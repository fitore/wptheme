<?php
/**
* Life Rattle custom template
* File: liferattle-bookmeta.php
* This template displays the book metadata, such as writer, ISBN, thumbnail and other book info
*/

if(function_exists('bcn_display')) {
?>

<div class="lr-breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php bcn_display(); ?>
</div>

<?php } ?>
