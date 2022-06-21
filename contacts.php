<?php 

/* Template Name: Contacts Page */ 

?>
<?php get_header(); ?>
<?php get_header(); ?>

	<?php if(have_rows('contacts_flexible')): 
	    while(have_rows('contacts_flexible')): the_row(); ?>
	    	<?php get_template_part( '/template-parts/blocks/' . get_row_layout() ) ?>
	    <?php endwhile;
	endif; ?>
	
<?php get_footer(); ?>