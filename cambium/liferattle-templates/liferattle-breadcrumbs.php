<?php
/**
* Life Rattle custom template
* File: liferattle-bookmeta.php
* This template displays the book metadata, such as writer, ISBN, thumbnail and other book info
*/
?>
<div class="lr-subnav">
    <?php if(function_exists('bcn_display')) { ?>

    <div class="lr-breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php bcn_display(); ?>
    </div>

    <?php } ?>

    <div class="lr-subnav-search"><?php get_template_part( 'searchform' ); ?></div>
</div>