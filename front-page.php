<?php get_header(); ?>
<section class="baner">
	<div class="container">
		<div class="baner__content">
			<div class="baner__content-text">
				<h1><?php the_field('title'); ?></h1>
				<div class="content__title"><?php the_field( 'gello_descr'  ); ?></div>
				<div class="benefits">
					<?php
					$args = array(
						'post_type' => 'benefits',
						'posts_per_page' => 100
					);
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="benefits__item">
								<div class="benefits__dot"></div>
								<div class="benefits__text">
									<?php the_field('benefits__text'); ?>
								</div>	
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="baner__contacts">
					<h2>Наши контакты:<?php the_field( 'main_text'  ); ?></h2>
					<div class="baner__contacts-item">
						<div class="social">Telegram:</div>
						<div class="social__link"><a href="">@Olegseychik</a></div>
					</div>
					<div class="baner__contacts-item">
						<div class="social">Viber:</div>
						<div class="social__link"><a href="">+38 (066) 832 966</a></div>
					</div>
					<div class="baner__contacts-item">
						<div class="social">Instagram:</div>
						<div class="social__link"><a href="https://instagram.com/gellofabrika?igshid=YmMyMTA2M2Y=">gellofabrika</a></div>
					</div>
				</div>
			</div>
			<div class="baner__icon">
				<img  src="<?php the_field( 'header_ico_baner'  ); ?>" alt="baner__icon">
			</div>

		</div>
		<button class="baner__button">нашы услуги</button>
		<span class="material-symbols-outlined ico">
			expand_more
		</span>
	</div>
</section>
<main>
	<hr class="hr container">
	<section class="sevises__all " id="all">
		<div class="container">
			<div class="sevises__list">
				<?php
				$args = array(
					'post_type' => 'all_services',
					'posts_per_page' => 100
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="sevises__list-item">
							<div class="sevises__dot"></div>
							<p><?php the_field('all_services'); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

	<section class="service__sections " id="works">
		<div class="container">
			<?php
			$args = array(
				'post_type' => 'services_pvh',
				'posts_per_page' => 100
			);
			$the_query = new WP_Query( $args ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="service__sections-title title">
						<p><?php the_field('services_pvh_title'); ?></p>
					</div>
					<div class="service__sections-subtitle subtitle">
						<p><?php the_field('services_pvh_subtitle'); ?></p>
					</div>
					<div class="service__sections-content">
						<div class="chevrons__service same">
							<?php
							$featured_posts = get_field('services_item');
							if( $featured_posts ): ?>
								<?php foreach( $featured_posts as $post ): 
									setup_postdata($post); ?>
									<div class="service more1 more2 more3 more4">
										<div class="wrapper">
											<h2><?php the_field('services_title_item'); ?></h2>
											<div href = "#" class = "chevrons_img" id = "zoomOut">
												<figure>
													<img src="<?php the_field('photo'); ?>" alt="">
												</figure>
											</div>
											<div class="price">
												<?php the_field('services_subtitle_item'); ?>
											</div>
											<div class="sub__title">
												<?php the_field('services_descrp_item'); ?>
											</div> 
											<button class="more1"><a href="http://gellofabrika.com.ua/%d1%88%d0%b5%d0%b2%d1%80%d0%be%d0%bd%d1%8b-%d0%bf%d0%be%d0%b4-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7/%d0%bf%d0%be%d1%80%d1%82%d1%84%d0%be%d0%bb%d1%96%d0%be/">БОЛЬШЕ ФОТО</a></button>	
										</div>
									</div>
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<?php echo do_shortcode( ' [Контактная форма 1] ' ); ?>
</main>

<?php get_footer(); ?>