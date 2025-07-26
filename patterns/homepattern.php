<?php
/**
 * Title: Home pattern
 * Slug: greenlight/homepattern
 * Categories: greenlight-general
 * Block Types: core/template-part/homepattern
 * Inserter: no
 */
?>

<?php if(is_glgs_active()): ?>
    <?php get_template_part('patterns/brandbook'); ?>
<?php else: ?>
    <?php get_template_part('patterns/hero-main'); ?>
<?php endif; ?>