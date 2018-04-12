<?php
/**
* Life Rattle custom template
* File: liferattle-writerbio.php
* This template displays the writer name and bio
*/
?>


<div class="lr-writerInfo">

<?php
    $writerName = get_field( "writer_name" );
    $writerBio = get_field( "writer_bio" );

    if( $writerName ) { ?>
        <h3 class="lr-innerHeading lr-sectionHeading">About the writer</h3>
        <p class="">Introducing: <?php echo $writerName; ?></p>

    <?php }
    if( $writerBio ) { ?>
        <div class="lr-writerBio"><?php echo $writerBio; ?></div>
    <?php }
?>

</div>