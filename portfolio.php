<?php 
/*
* Template name: Портфоліо
*/
?>
<?php get_header(); ?>
<main>
<div class="container">
	<?php
	$args = array(
		'post_type' => 'portfolio',
		'posts_per_page' => 100
	);
	$the_query = new WP_Query( $args ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="service__sections-title title">
				<?php the_field('portfolio_pvh_title'); ?>
			</div>
			<div class="service__sections-descr">
				<p><?php the_field('portfolio_pvh_descr'); ?></p>
			</div>
			<div class="service__sections-price">
				<p><?php the_field('portfolio_pvh_price'); ?></p>
			</div>
			<div class="chevrons__photo-portfolio" >
				<div class="wrepper__photo">
					<?php
					$featured_posts = get_field('portfolio_item');
					if( $featured_posts ): ?>
						<?php foreach( $featured_posts as $post ): 
							setup_postdata($post); ?>
							<div class="chevrons__photo-item">
								<img src="<?php the_field('portfolio_photo'); ?>" alt="portfolio_photo">
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
<hr class="hr container">
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
</main>
<?php get_footer(); ?>