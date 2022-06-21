<?php get_header(); ?>
    <section class="blog">
        <div class="container">
            <h1 class="blog-title">
               <?php the_field('blog_title', 110); ?>
            </h1>
            <p class="text blog-subtitle">
                <?php the_field('blog_subtitle', 110); ?>
            </p>
            
            <div class="blog-posts">
                <div class="row align-items-start justify-content-center justify-content-lg-start">
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
                
            </div>
            <div class="blog-pagination">
                <?php the_posts_pagination(array(

                    'prev_text'    => __('<svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.56349e-07 4.92385L4.16266e-07 4.23848L4.50644 -4.31486e-08L4.94635 1.2986L2.19957 3.89579L1.12661 4.56313L2.18884 5.14028L5 7.71944L4.57082 9L3.56349e-07 4.92385Z" fill="#4F4F4E"/>
                    </svg>              
                    '),
                    'next_text'    => __('<svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 4.07615V4.76152L0.493562 9L0.0536481 7.7014L2.80043 5.10421L3.87339 4.43687L2.81116 3.85972L0 1.28056L0.429185 0L5 4.07615Z" fill="#4F4F4E"/>
                    </svg>
                    '),

                            ));
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>