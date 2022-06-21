<form role="search" method="get" id="searchForm" >
	<div class="row align-items-center justify-content-center justify-content-lg-between">
		<div class="col-12 col-sm-7 col-md-6 col-lg-6 col-xl-6">
			<input type="text" value="" name="s" class="search-input" id="s" placeholder="Search" />
		</div>
		<div class="col-12 col-sm-7 col-md-3 col-lg-3 col-xl-3">
			<div class="blog-select">
				<?php $categories = get_categories(); ?>
				<ul class="cat-list">
				  <li class="cat-item__act-l">Category
				  		
					  	<!-- <div class="arrow">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/down.svg" alt="">
						</div> -->
				  </li>

				  <div class="cat-list__dropdown">
				  	<?php foreach($categories as $category) : ?>
				  	  <li>
				  	    <a class="cat-list_item" href="" data-slug="<?= $category->slug; ?>">
				  	      <?= $category->name; ?>
				  	    </a>
				  	  </li>
				  	<?php endforeach; ?>
				  </div>
				</ul>
			</div>
		</div>
		<div class="col-12 col-sm-7 col-md-3 col-lg-3 col-xl-3">
			<button type="submit" id="searchsubmit" class="button blog-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">Search</button>
		</div>
	</div>
	
</form>