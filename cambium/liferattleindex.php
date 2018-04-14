<?php /* Template Name: LifeRattleHome */ ?>

<?php


get_header(); ?>

    <div class="site-content-inside">
        <div class="container lr-container">
            <div class="row">

                <section id="primary" class="content-area lr-contentarea">
                    <main id="main" class="site-main" role="main">

                        <div id="post-wrapper" class="post-wrapper post-wrapper-single post-wrapper-single-page">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'template-parts/content', 'page' ); ?>

                        <?php endwhile; // end of the loop. ?>
                        </div><!-- .post-wrapper -->

                    </main><!-- #main -->
                </section><!-- #primary -->


            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .site-content-inside -->

<?php get_footer(); ?>
