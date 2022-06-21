<?php 

/* Template Name: Landing Blocks */ 

?>
<?php get_header('landing'); ?>

<?php if(have_rows('landing_blocks')): 
    while(have_rows('landing_blocks')): the_row(); ?>
    <?php get_template_part( '/template-parts/blocks/' . get_row_layout() ) ?>
    <?php endwhile;
endif; ?>

<?php get_footer('landing'); ?>