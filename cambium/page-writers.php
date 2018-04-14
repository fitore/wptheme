<?php /* Template Name: LifeRattleHome */ ?>

<?php

get_header(); ?>

    <div class="site-content-inside">
        <div class="container lr-container">
            <div class="row">

                <section id="primary" class="content-area lr-contentarea">
                    <main id="main" class="site-main" role="main">

                        <div id="post-wrapper" class="post-wrapper post-wrapper-single post-wrapper-single-page">
                            <div class="post-wrapper-hentry">
                                <?php if( function_exists( 'coauthors_wp_list_authors' ) ) {

                                    coauthors_wp_list_authors();
                                }?>
                            </div>
                        </div><!-- .post-wrapper -->

                    </main><!-- #main -->
                </section><!-- #primary -->


            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .site-content-inside -->

<?php get_footer(); ?>
