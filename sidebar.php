<aside id="sidebar" class="sidebar" role="complementary">
	<div class="similar-posts">
		<?php 
			// необязательно, но в некоторых случаях без этого не обойтись
			global $post;
			 
			// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
			$related_tax = 'category';
			 
			// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
			$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
			 
			// массив параметров для WP_Query
			$args = array(
				'post__not_in' => array($post->ID),
				'posts_per_page' => 3, // сколько похожих постов нужно вывести,
				'tax_query' => array(
					array(
						'taxonomy' => $related_tax,
						'field' => 'id',
						'include_children' => false, // нужно ли включать посты дочерних рубрик
						'terms' => $cats_tags_or_taxes,
						'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
					)
				)
			);
			$playter_query = new WP_Query( $args );
			 
			// если посты, удовлетворяющие нашим условиям, найдены
			if( $playter_query->have_posts() ) :
			 
				
			 
				// запускаем цикл
				while( $playter_query->have_posts() ) : $playter_query->the_post();
					?>
						<div class="col-12 col-sm-8 col-md-12 col-lg-12 col-xl-12 pl-0 pr-0">
							<article <?php post_class('blog__post'); ?>>
								<a href="<?php the_permalink( ); ?>">
									<div class="image">
									    <div class="post_date">
									        <?php the_time('M j'); ?>
									    </div>
									    <?php the_post_thumbnail(); ?>
									</div>
								</a>
							    <div class="text">
							        <div class="blogIndex__post_category">
							            <?php the_category(); ?>
							        </div>
							        <h2>
							        	<a href="<?php the_permalink( ); ?>">
							        	   <?php trim_title_chars(50, ''); ?>
							        	</a>
							        </h2>
							        <a href="<?php the_permalink( ); ?>" class="button-o">
							            Read more
							            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							            <rect y="5" width="12" height="2" rx="1"/>
							            <path d="M8.12109 1.75732L12.3637 5.99996L8.12109 10.2426" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							            </svg>
							        </a>
							    </div>
							</article>
						</div>
		                               
					<?php 
				endwhile;
			endif;
			 
			// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
			wp_reset_postdata();
		 ?>
	</div>
	<div class="sidebar-newsletter">
		<h5 class="sidebar-title">
			Newsletter
		</h5>
		<p class="text sidebar-newsletter__description">
			<?php the_field('newsletter_text', 'option'); ?>
		</p>
		<?php echo do_shortcode( '[ninja_form id=9]' ); ?>
	</div>
</aside>