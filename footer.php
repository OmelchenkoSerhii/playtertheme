</main>
<footer class="footer">
	<div class="container">
		<div class="row align-items-start justify-content-center justify-content-md-between">
			<div class="col-md-3 col-xl-3">
				<div class="footer-info">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="playter logo" width="120" height="83">
					</div>
					<p class="text addres">
						<?php the_field('site_addres', 'option'); ?>
					</p>
					<div class="social">
						<div class="item">
							<a target="_blank" href="<?php the_field('linkedin_link', 'option'); ?>" class="linkedin">
								<?php $icon = get_field('linkedin_icon','option');
                                        if( !empty( $icon ) ): ?>
                                        <?php echo file_get_contents(esc_url(wp_get_original_image_path($icon['id']))); ?>
                                <?php endif; ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-5 col-md-2 col-xl-2 mt-lg-4">
				<div class="footer-links">
					<h5 class="footer-title">
						Links
					</h5>
					<?php 
					    wp_nav_menu( [
					        'theme_location'  => '',
					        'menu'            => 'Menu Footer', 
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
					        'items_wrap'      => '<ul id="%1$s" class="%2$s footer-links__list">%3$s</ul>',
					        'depth'           => 0,
					        'walker'          => '',
					    ] );
					 ?>
					</ul>
				</div>
			</div>
			<div class="col-6 col-md-3 col-xl-3 mt-lg-4">
				<div class="footer-legals">
					<h5 class="footer-title">
						Legals
					</h5>
					<?php 
					    wp_nav_menu( [
					        'theme_location'  => '',
					        'menu'            => 'Legal Menu', 
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
			</div>
			<div class="col-8 col-md-3 col-xl-3 mt-lg-4">
				<div class="footer-newsletter">
					<h5 class="footer-title">
						Newsletter
					</h5>
					<p class="text footer-newsletter__description">
						<?php the_field('newsletter_text', 'option'); ?>
					</p>
					<?php echo do_shortcode( '[ninja_form id=8]' ); ?>
				</div>
			</div>
			
		</div>
		<div class="row align-items-center justify-content-center justify-content-lg-end justify-content-xl-end">
			<div class="col-12 col-sm-12 col-md-7 col-lg-6 pl-xl-0 pr-xl-0 mr-xl-2 col-xl-6">
				<div class="footer-partners">
					<?php
                	if( have_rows('footer_partners', 'option') ):
                		while ( have_rows('footer_partners', 'option') ) : the_row();
                			?>

                            <?php if( get_sub_field("footer_partners_link", 'option') ): ?>
                            
                                <div class="item">
                                	<a target="_blank" href="<?php the_sub_field('footer_partners_link', 'option'); ?>">
                                		<img src="<?php the_sub_field('footer_partners_image', 'option'); ?>" alt="partners playter image" width="100" height="100">
                                	</a>
                                </div>
                                
                                
                            <?php else :?>
                                
                                
                                <div class="item">
                                	<img src="<?php the_sub_field('footer_partners_image', 'option'); ?>" alt="partners playter image" width="100" height="100">
                                </div>
                            
                                
                            <?php endif; ?>
                			
                			<?php
                		endwhile;
                	else :
                	endif;
                	?>
				</div>
			</div>
		</div>
		<div class="p design" style="font-size: 18px;">
		© 2021 Imployapp Limited, trading as Playter Pay. All Rights Reserved. All trademarks, trade names, and logos are the property of their respective owners. Playter is not a lender. Playter is an originator and servicer for external lending providers. Playter will never lend money and all rights to loan repayments belong to the lending providers. <a target="_blank" rel="noreferrer noopener" href="https://www.rocket-saas.io/">Web design: Rocket SaaS</a> 
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<div class="main-popup">
	
	<div class="main-popup__body">
		<div class="main-popup__close close_popup">
			<svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
		</div>
		<?php the_field('content_editor', 'option'); ?>

		<div class="actions">
			<?php 
			$link = get_field('modal_link', 'option');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
			    	<?php echo esc_html( $link_title ); ?>
			    </a>
			<?php endif; ?>
		</div>
	</div>
</div>