<?php
/**
* Life Rattle custom template
* File: liferattle-podcastmeta.php
* This template displays the podcast metadata, such as host name, date and show number
*/
?>

<?php

    $podcast_date = get_field( "podcast_date" );
    $podcast_host = get_field( "podcast_host" );
    $podcast_show_number = get_field( "podcast_show_number" );

    if( $podcast_date ) { ?>

        <div class=""><?php echo $podcast_date; ?></div>

    <?php }

    if( $podcast_host ) { ?>

        <div class="">Hosted by: <?php echo $podcast_host; ?></div>

    <?php }

    if( $podcast_show_number ) { ?>

        <div class="">Show number: <?php echo $podcast_show_number; ?></div>

    <?php }
?>