<?php
/**
* Life Rattle custom template
* File: liferattle-podcastmeta.php
* This template displays the podcast metadata, such as host name, date and show number
*/
?>

<div class="lr-podcastMeta">

<?php

    $podcast_date = get_field( "podcast_date" );
    $podcast_host = get_field( "podcast_host" );
    $podcast_show_number = get_field( "podcast_show_number" );

    if( $podcast_date ) { ?>

        <p class="lr-podcast-date">Presented on: <strong><?php echo $podcast_date; ?></strong></p>

    <?php }

    if( $podcast_host ) { ?>

        <p class="lr-podcast-host">Hosted by: <strong><?php echo $podcast_host; ?></strong></p>

    <?php }

    if( $podcast_show_number ) { ?>

        <p class="lr-podcast-show">Show number: <strong><?php echo $podcast_show_number; ?></strong></p>

    <?php }
?>
</div>