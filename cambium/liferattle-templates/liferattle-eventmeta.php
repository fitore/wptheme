<?php
/**
* Life Rattle custom template
* File: liferattle-bookmeta.php
* This template displays the book metadata, such as writer, ISBN, thumbnail and other book info
*/

$event_poster = get_field( "event_poster" );

if($event_poster) {
?>

    <img src="<?php echo $event_poster; ?>" class="event_poster" />

<?php } ?>