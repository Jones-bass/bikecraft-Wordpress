<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<?php if(is_home() && !is_front_page()) { ?>
		<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo', get_option('page_for_posts')); ?></title>
		<?php } else { ?>
		<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
		<?php } ?>		
		<meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="favicon.ico">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<script>document.documentElement.classList.add("js");</script>

		<?php wp_head(); ?>
		
	</head>
	<body>

		<header class="header">
			<div class="container">
				<a href="/bikecraft/" class="grid-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.png" alt="Bikcraft">
				</a>
					<nav class="grid-12 header_menu">
					<?php
						$args = array(
							'menu' => 'principal',
							'theme_location' => 'menu-principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
				</nav>
			</div>
		</header>
