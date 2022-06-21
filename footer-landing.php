<?php
    $copyright = get_field('landingCopy','option');
	$logo = get_field('landingLogo','option');
	$linkedin_link = get_field('linkedin_link','option');
	$content = get_field('content','option');

?>
<div style="background-color: #f4fdff;padding-bottom: 65px;">
	<div class="container h3">
		<div style="display: flex; flex-direction:column; justify-content: center;align-items:center;">
		Follow our blog <a class="button-dark" href="https://medium.com/playter" target="_blank" style="margin-top: 15px;">Blog</a>
	</div>
</div>
	
<style>
	#header .button-dark{
		display: none;
	}
</style>

</main>

<footer>
	<div class="footer__landing__copyright">
		<div class="container">
			<div class="row">
					<div class="col-auto">
					<?php if($logo) :?>
						<?php echo file_get_contents(esc_url(wp_get_original_image_path($logo['id']))); ?>
					<?php endif;?>
					</div>
					<div class="col-sm-auto  align-items-center d-flex footer__landingCopyright__wrapper">
						<div class="footer__landingCopyright fz-14">
							<?php echo $copyright ?>
						</div>
					</div>
				<div class="menu d-flex align-items-center footer__menu__wrapper"  >

				
				<div class="col-sm-auto  align-items-center">
				<?php 
					wp_nav_menu( [
							'theme_location'  => 'footer_landing_menu',
							'menu'            => 'Menu Footer Landing', 
							'container'       => '', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s footer-legals__list">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
					?>
				</div>
				<div class="link ">
				<a class="footer__landing__dragon__social" href="<?php echo $linkedin_link ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/linked-in-m.svg" alt="">
                </a>
				</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript">

var _hsq = _hsq || [];

_hsq.push(["setContentType", "standard-page"]);

</script>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK5MNBC"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

