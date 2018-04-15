<?php
/**
* Life Rattle custom template
* File: liferattle-bookmeta.php
* This template displays the book metadata, such as writer, ISBN, thumbnail and other book info
*/

$book_title = get_field( "book_title" );

if($book_title) {
?>

    <div class="lr-bookMeta">
        <?php

        $book_title = get_field( "book_title" );
        $book_thumbnail = get_field( "book_thumbnail" );
        $book_buy_link = get_field( "book_buy_link" );
        $book_price = get_field( "book_price" );
        $book_isbn = get_field( "book_isbn" );
        $book_information = get_field( "book_information" );

        if( $book_thumbnail ) { ?>

           <div class="lr-bookThumb"><a href="<?php echo $book_buy_link ?>"><img src="<?php echo $book_thumbnail; ?>" class="book_thumbnail" /></a></div>

        <?php } ?>

        <div class="lr-bookInfo">
                <p class="lr-bookMetap">Title: <strong><?php echo $book_title; ?></strong></p>

            <?php if( $book_buy_link ) { ?>
                <p class="lr-bookMetap">Availability: <a href="<?php echo $book_buy_link ?>">Buy the book <?php echo $book_price ?></a></p>

            <?php }

            if( $book_information ) { ?>
                <strong>Book information: </strong>
                <p><?php echo $book_information; ?></p>
            <?php } ?>
        </div>

    </div>

<?php } ?>