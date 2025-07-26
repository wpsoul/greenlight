<?php
/**
 * GitHub Theme Updater Class
 * 
 * Handles theme updates from GitHub repository
 * 
 * @package GreenLight
 * @author  Wpsoul
 * @license GNU General Public License v2 or later
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class GreenLight_GitHub_Theme_Updater {
    
    private $theme_slug;
    private $github_username;
    private $github_repo;
    private $github_branch;
    private $github_access_token;
    private $theme_data;
    
    public function __construct($config = array()) {
        $this->theme_slug = 'greenlight'; // Hardcoded theme slug
        $this->theme_data = wp_get_theme($this->theme_slug);
        
        // Set configuration
        $this->github_username = $config['github_username'];
        $this->github_repo = $config['github_repo'];
        $this->github_branch = $config['github_branch'];
        $this->github_access_token = $config['github_access_token'];
        
        // Hook into WordPress update system
        add_filter('pre_set_site_transient_update_themes', array($this, 'check_for_update'));
        add_filter('upgrader_source_selection', array($this, 'upgrader_source_selection'), 10, 4);
        add_action('upgrader_process_complete', array($this, 'upgrader_process_complete'), 10, 2);
    }
    
    /**
     * Check for theme updates
     */
    public function check_for_update($transient) {
        if (empty($transient->checked)) {
            return $transient;
        }
        
        $current_version = $this->theme_data->get('Version');
        $remote_version = $this->get_remote_version();
        
        if ($remote_version && version_compare($current_version, $remote_version, '<')) {
            $theme_data = array(
                'theme' => $this->theme_slug,
                'new_version' => $remote_version,
                'url' => "https://github.com/{$this->github_username}/{$this->github_repo}",
                'package' => $this->get_download_url(),
                'requires' => $this->theme_data->get('RequiresWP'),
                'requires_php' => $this->theme_data->get('RequiresPHP'),
                'tested' => $this->theme_data->get('Tested up to'),
                'last_updated' => $this->get_last_commit_date()
            );
            
            $transient->response[$this->theme_slug] = $theme_data;
        }
        
        return $transient;
    }
    
    /**
     * Get remote version from GitHub
     */
    private function get_remote_version() {
        $cache_key = 'greenlight_github_version_' . $this->github_username . '_' . $this->github_repo;
        $cached_version = get_transient($cache_key);
        
        if ($cached_version !== false) {
            return $cached_version;
        }
        
        $api_url = "https://api.github.com/repos/{$this->github_username}/{$this->github_repo}/contents/style.css?ref={$this->github_branch}";
        
        $response = wp_remote_get($api_url, array(
            'headers' => $this->get_github_headers(),
            'timeout' => 15
        ));
        
        if (is_wp_error($response)) {
            return false;
        }
        
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        if (empty($data['content'])) {
            return false;
        }
        
        $style_content = base64_decode($data['content']);
        
        // Extract version from style.css
        if (preg_match('/Version:\s*([^\n\r]+)/i', $style_content, $matches)) {
            $version = trim($matches[1]);
            set_transient($cache_key, $version, HOUR_IN_SECONDS * 12); // Cache for 12 hours
            return $version;
        }
        
        return false;
    }
    
    /**
     * Get download URL for the theme
     */
    private function get_download_url() {
        return "https://github.com/{$this->github_username}/{$this->github_repo}/archive/{$this->github_branch}.zip";
    }
    
    /**
     * Get last commit date
     */
    private function get_last_commit_date() {
        $api_url = "https://api.github.com/repos/{$this->github_username}/{$this->github_repo}/commits/{$this->github_branch}";
        
        $response = wp_remote_get($api_url, array(
            'headers' => $this->get_github_headers(),
            'timeout' => 15
        ));
        
        if (is_wp_error($response)) {
            return '';
        }
        
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        if (!empty($data['commit']['author']['date'])) {
            return $data['commit']['author']['date'];
        }
        
        return '';
    }
    
    /**
     * Get GitHub API headers
     */
    private function get_github_headers() {
        $headers = array(
            'User-Agent' => 'WordPress/' . get_bloginfo('version') . '; ' . get_bloginfo('url'),
            'Accept' => 'application/vnd.github.v3+json'
        );
        
        if (!empty($this->github_access_token)) {
            $headers['Authorization'] = 'token ' . $this->github_access_token;
        }
        
        return $headers;
    }
    
    /**
     * Handle source selection during update
     */
    public function upgrader_source_selection($source, $remote_url, $upgrader, $hook_extra) {
        if (isset($hook_extra['theme']) && $hook_extra['theme'] === $this->theme_slug) {
            // Extract the theme from the zip file
            $new_source = trailingslashit($source) . $this->github_repo . '-' . $this->github_branch;
            if (is_dir($new_source)) {
                return $new_source;
            }
        }
        
        return $source;
    }
    
    /**
     * Handle update completion
     */
    public function upgrader_process_complete($upgrader, $hook_extra) {
        if (isset($hook_extra['theme']) && $hook_extra['theme'] === $this->theme_slug) {
            // Clear version cache
            $cache_key = 'greenlight_github_version_' . $this->github_username . '_' . $this->github_repo;
            delete_transient($cache_key);
            
            // Add admin notice
            add_action('admin_notices', function() {
                echo '<div class="notice notice-success is-dismissible">';
                echo '<p>' . sprintf(__('GreenLight theme has been updated successfully!', 'greenlight')) . '</p>';
                echo '</div>';
            });
        }
    }
} 