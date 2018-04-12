<?php
/**
* Life Rattle custom template
* File: liferattle-writerbio.php
* This template displays the writer name and bio
*/
?>

<?php
    $writerName = get_field( "writer_name" );
    $writerBio = get_field("writer_bio");

    if( $writerName ) { ?>
        <h3>About the writer</h3>
        <div class=""><?php echo $writerName; ?></div>

    <?php }
    if( $writerBio ) { ?>
        <div class=""><?php echo $writerBio; ?></div>
    <?php }
?>