<?php

/* Template Name: Partnership Page */

?>
<?php get_header('partnership'); ?>
<?php if (have_rows('flexible_content_field')) :
	while (have_rows('flexible_content_field')) : the_row(); ?>
		<?php get_template_part('/template-parts/blocks/' . get_row_layout()) ?>
<?php endwhile;
endif; ?>

<?php get_footer('partnership'); ?>