<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="mkxo9Pt7fl1gvDBOEwO6pTxWcMElR0oRuoOobSEp1uE" />
	<meta name="descriptions" content="Виробництво ПВХ фурнітури на замовлення, оптом.">
	<meta name="keywords" content="Резиновые шевроны,Резиновые шевроны заказать, Резиновые шевроны заказать оптом, Патчи заказать, Резиновые нашивки заказать, Резиновые нашивки заказать оптом ">
	<title><?php bloginfo( 'description'  ); ?></title>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS6535J1GF"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

  	gtag('config', 'G-MS6535J1GF');
	</script>
	
	<?php wp_head(); ?>
</head>
<body>
	<div class="button__on_top" id="btn_top">
		<div class="some">
			<button><span class="material-symbols-outlined top">
			expand_less</span></button>
		</div>
	</div>
	<header class="header" id="header">
		<nav class="menu">
			<div class="container">
				<div class="manu__items">
					<a href="<?php get_home_url(); ?>"><img class="icon" src="<?php the_field( 'header_icon'  ); ?>" alt="icon"></a>
					<span id="menu_ico" class="material-symbols-outlined but">
						menu
					</span>
					<ul class="menu__list">
						<?php 
						wp_nav_menu( [
							'theme_location'  => 'header_menu',
							'depth'           => 1,
							'container'       => 'nav',
							'container_id'    => 'menu',
							'menu_class' => 'menu__list',	
						] );
						?>
						<button class="contact"><a href="#">Зв'язатися з нами</a></button>
						<span>+38 (066) 832 966</span>
					</ul>
				</div>

			</div>
		</nav>	
		<section class="responsive_menu" id="dddd">
			<div class="container">
				<ul class="responsive_menu_list">
					<?php 
					wp_nav_menu( [
						'theme_location'  => 'header_menu',
						'depth'           => 1,
						'container'       => 'ul',
						'container_id'    => 'responsive__menu',
						'menu_class' => 'responsive_menu_list',	
					] );
					?>
					<button class="contact"><a href="#">Зв'язатися з нами</a></button>
						<span>+38 (066) 832 966</span>
				</ul>
			</div>
		</section>
	</header>