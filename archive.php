<?php 

/* Template Name: Blog Page */ 

?>
<?php get_header(); ?>
    <div id="app-wrapper" role="main">
        <div id="app" class="app-container" data-namespace="blog-archive">
            <section class="blog">
                <div class="container">
                    <h1 class="blog-title">
                        <?php the_field('blog_title'); ?>
                    </h1>
                    <p class="text blog-subtitle">
                        <?php the_field('blog_subtitle'); ?>
                    </p>
                    <div class="blog-search">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="result-search">
                        
                        <div class="result-search-list row align-items-start justify-content-center justify-content-lg-start">
                          
                        </div>
                    </div>
                    <div id="response" class="results-category">
                        <?php 
                          $projects = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            'order' => 'desc',
                          ]);
                        ?>

                        <?php if($projects->have_posts()): ?>
                          <ul class="project-tiles row align-items-start justify-content-center justify-content-lg-start">
                            <?php
                              while($projects->have_posts()) : $projects->the_post();
                                ?>
                                <?php include ( get_template_directory() . '/template-parts/postIndexTmp.php'); ?>
                                <?php
                              endwhile;
                            ?>
                          </ul>
                          <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="blog-posts">
                        <div class="row align-items-start justify-content-center justify-content-lg-start">
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 9,
                                'paged' => $paged,
                                'publish' => true,
                                'operator' => 'NOT EXISTS'
                            );
                            query_posts($args);

                            if ( have_posts() ){
                                while ( have_posts() ){
                                    the_post();
                                    ?>
                                   
                                <?php include ( get_template_directory() . '/template-parts/postIndexTmp.php'); ?>
                                    <?php
                                }
                            } else {
                                echo wpautop( 'Постов для вывода не найдено.' );
                            }
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
            
        </div>
    </div>
    <?php get_footer(); ?>