<?php /* Template Name: LifeRattleWriters */ ?>

<?php

get_header(); ?>

    <div class="site-content-inside">
        <div class="container lr-container">

            <h1 class="lr-heading">Writers</h1>

            <?php get_template_part( 'searchform' ); ?>

            <div class="row">

                <section id="primary" class="content-area lr-contentarea">
                    <main id="main" class="site-main" role="main">

                        <div id="post-wrapper" class="lr-postwrapper post-wrapper post-wrapper-single post-wrapper-single-page">
                            <div class="post-wrapper-hentry">

                                <div class="lr-writerList">

                                    <?php if( function_exists( 'coauthors_wp_list_authors' ) ) {

                                        /*
                                        TODO:
                                        - For each writer show titles of publications
                                        */
                                        $coauthorArgs = array(
                                            'optioncount'      => true,
                                            'show_fullname'    => false,
                                            'hide_empty'       => true,
                                            'feed'             => '',
                                            'feed_image'       => '',
                                            'feed_type'        => '',
                                            'echo'             => true,
                                            'style'            => 'list',
                                            'html'             => true,
                                            'number'           => 500, // A sane limit to start to avoid breaking all the things
                                            'guest_authors_only' => true,
                                            'authors_with_posts_only' => true
                                        );

                                        coauthors_wp_list_authors($coauthorArgs);

                                    }?>



                                </div>
                            </div>
                        </div><!-- .post-wrapper -->

                    </main><!-- #main -->
                </section><!-- #primary -->


            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .site-content-inside -->

<?php get_footer(); ?>
