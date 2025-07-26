<?php
/**
 * GitHub Updater Configuration
 * 
 * Configure your GitHub repository details here
 * 
 * @package GreenLight
 * @author  Wpsoul
 * @license GNU General Public License v2 or later
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// GitHub Repository Configuration
// Replace these values with your actual GitHub repository details
$greenlight_github_config = array(
    'github_username' => 'wpsoul', // Your GitHub username
    'github_repo' => 'greenlight', // Your repository name
    'github_branch' => 'main', // Branch to check for updates
    'github_access_token' => '', // Leave empty for public repos, add token for private repos
);

// Initialize the GitHub updater
if (!class_exists('GreenLight_GitHub_Theme_Updater')) {
    require_once GREENLIGHT_THEME_PATH . '/inc/class-github-theme-updater.php';
}

// Create updater instance
new GreenLight_GitHub_Theme_Updater($greenlight_github_config); 