<?php
/**
* Life Rattle custom template
* File: liferattle-storyinfo.php
* This template displays the writer name and bio
*/
?>

<?php
    $storyTitle = get_field( "story_title" );
    $storyExcerpt = get_field("story_excerpt");


    if( $storyTitle ) { ?>
        <div class="">
            <h3>In this podcast</h3>
            <h4><?php echo $storyTitle; ?></h4>
        </div>

    <?php }
    if( $storyExcerpt ) { ?>
        <div class=""><?php echo $storyExcerpt; ?></div>
    <?php }
?>