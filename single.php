<?php get_header(); ?>
    <section class="single-post">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="single-post__header">
                <div class="category_post">
                    <?php the_category(); ?>
                </div>
                <h1 class="page-title">
                    <?php the_title(); ?>
                </h1>
                <div class="info">
                    <span class="author-name">
                        <?php 
                            $AuthorImage = get_field('author_image', 'user_'. get_the_author_meta('ID'));
                            $AuthorFirstName = get_the_author_meta('user_firstname');
                            $AuthorLastName = get_the_author_meta('user_lastname');
                            $AuthorBio = get_field('author_bio',  'user_'. get_the_author_meta('ID'));
                            $AuthorMeta = get_field('author_meta',  'user_'. get_the_author_meta('ID'));
                         ?>

                         <?php echo $AuthorFirstName; ?>
                         <?php echo $AuthorLastName; ?>
                    </span>
                    <div class="date-publish">
                        <?php echo get_the_time('jS M, Y');?>
                    </div>
                </div>
                
            </div>
            <div class="container">
                <div class="single-post__wrapper">
                    <div class="single-post__image">
                        <img src="<?php the_field('post_main_image'); ?>" alt="">
                    </div>
                    <div class="row align-items-start justify-content-center justify-content-md-between">
                        <div class="col-md-8 col-lg-8 col-xl-8 pr-lg-5 pr-xl-5">
                            <div class="single-post__content">
                                <?php if(have_rows('flexible_content_field')): 
                                    while(have_rows('flexible_content_field')): the_row(); ?>
                                    <?php get_template_part( '/template-parts/blocks/' . get_row_layout() ) ?>
                                    <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>