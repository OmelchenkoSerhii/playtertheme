</main>

<footer class="footer1">
	<div class="container">
		<div class="row align-items-center justify-content-center justify-content-md-between">
			<div class="col-md-3 col-xl-3">
				<div class="footer-info">
					<div class="logo" style="margin-bottom: 0;">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
					</div>
				</div>
			</div>


			<div class="col-md-4 col-xl-4">
				<div class="social" style="float: left;">
					<div class="item">
						<a target="_blank" href="<?php the_field('linkedin_link', 'option'); ?>" class="linkedin">
							<?php $icon = get_field('linkedin_icon', 'option');
							if (!empty($icon)) : ?>
								<?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
							<?php endif; ?>
						</a>
					</div>
				</div>
				<div class="f-links"><a href="https://playter.co/privacy-policy/">Privacy Policy</a> <a href="https://playter.co/cookie-policy/">Cookie Policy</a></div>
			</div>

		</div>

	</div>
</footer>
<?php wp_footer(); ?>
<div class="main-popup">

	<div class="main-popup__body">
		<div class="main-popup__close close_popup">
			<svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg">
				<path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />
			</svg>
		</div>
		<?php the_field('content_editor', 'option'); ?>

		<div class="actions">
			<?php
			$link = get_field('modal_link', 'option');
			if ($link) :
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
			?>
				<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
					<?php echo esc_html($link_title); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>