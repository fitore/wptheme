<?php
/**
 * Template part for displaying single posts.
 *
 * @package Cambium
 */
?>

<div class="post-wrapper-hentry">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-content-wrapper post-content-wrapper-single post-content-wrapper-single-post lr-post-content">

			<div class="entry-header-wrapper">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-meta entry-meta-header-after">
<!-- 					<?php
					cambium_posted_by();
					cambium_posted_on();
					cambium_post_edit_link();
					?> -->

					<?php get_template_part('liferattle-templates/lferattle-bookmeta'); ?>

					<?php get_template_part('liferattle-templates/liferattle-podcastmeta'); ?>

				</div><!-- .entry-meta -->
			</div><!-- .entry-header-wrapper -->

			<div class="entry-content">
				<?php the_content(); ?>

				<?php get_template_part('liferattle-templates/liferattle-storyinfo'); ?>
				<?php get_template_part('liferattle-templates/liferattle-writerbio'); ?>
			</div><!-- .entry-content -->


		</div><!-- .post-content-wrapper -->
	</article><!-- #post-## -->
</div><!-- .post-wrapper-hentry -->
