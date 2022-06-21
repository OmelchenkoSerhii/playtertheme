<?php get_header(); ?>

<section id="searchResults" class="search-page">
            <div class="container">
				<p class="h2 searchResults__title">Search results for: <?php echo get_query_var('s');?> </p>
                <div class="row align-items-start justify-content-between">
                    <?php if ( have_posts() ) : ?>
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/postIndexTmp', get_post_type() );

                        endwhile;
                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>
                <div class="pagination" style="margin-top:100px">
                        <?php //kama_pagenavi($before = '', $after = '', $echo = true, $args = array(), $wp_query = $the_query); // пагинация, функция нах-ся в function.php ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>