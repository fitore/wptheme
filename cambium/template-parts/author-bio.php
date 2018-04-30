<?php
/**
 * The template part for displaying an Author Bio
 *
 * @package Cambium
 */

global $post;
?>

<div class="entry-author lr-author">

		<?php

		// Check if the author is a contributing writer who's not a wordpress user
		// https://vip.wordpress.com/documentation/incorporate-co-authors-plus-template-tags-into-your-theme/
        $author = '';
        $authorLink = '';

        if( function_exists( 'coauthors_posts_links' ) ) {
            $author = coauthors_posts_links( null, null, null, null, false );
        } else {
            $author = printf( esc_html__( 'Published by %1$s', 'cambium' ), '<span class="author-name">' . get_the_author() . '</span>' );
            $authorLink = esc_url( get_author_posts_url( $id ) );
        }

		?>

	<div class="author-heading">
		<h3 class="lr-innerHeading lr-sectionHeading">Writer information</h3>
		<div class="author-title">Author(s): <?php echo $author ?></div>
	</div><!-- .author-heading -->

	<div class="author-biowrapper">
		<?php if( function_exists( 'get_coauthors' ) ) {

			$author_id = $post->post_author;
			foreach( get_coauthors() as $coauthor ) {
                if( $coauthor->description ) {
                ?>
			    <div class="author-bio">
                    <p class="author-bio-title">Biography: <?php echo $coauthor->display_name ?> </p>
                    <p><?php echo $coauthor->description; ?></p>
                </div>
			<?php }
            }

		} else { ?>

			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo $authorLink; ?>" rel="author">View all by this writer</a>

		<?php } ?>
	</div><!-- .author-bio -->
</div><!-- .entry-auhtor -->
