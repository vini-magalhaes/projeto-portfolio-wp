<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php

	$logo = get_field('logo', 'option');
	$clientes = get_field('area_clientes', 'option');
	$contato = get_field('contato', 'option');
	?>
	<div id="breadcrumb-area" class="desktop">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb">
						<?php echo custom_breadcrumbs(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="header">
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-6">
					<div class="logo">
						<a href="<?php echo get_site_url(); ?>">
							<img src="<?php echo $logo['url'] ?>" alt="<?php bloginfo('name') ?>">
							<h1 style="display: none;">Sompo Seguros</h1>
						</a>
					</div>
				</div>
				<div class="col-lg-8 col-12 desktop">
					<div id="menu-desktop" class="desktop menu">
						<?php
						wp_nav_menu(
							array(
								'menu'              => 'Primary Navigation',
								'depth'             => 2,
								'container'         => '',
								'menu_class'        => 'no-format no-margin no-padding',
							)
						);
						?>
					</div>
				</div>
				<div class="col-lg-2 col-12 desktop">
					<div class="itens-menu desktop">
						<a href="<?php echo get_permalink(get_page_by_path('/busca')) ?>">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/icon-busca.png' ?>" alt="Buscar">
						</a>

						<a href="<?php echo $clientes ?>">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/icon-cliente.png' ?>" alt="Área do Cliente">
						</a>
						<a href="<?php echo $contato['url'] ?>" class="contato" target="<?php echo $contato['target'] ?>">
							<?php echo $contato['title'] ?>
							<img src="<?php echo get_template_directory_uri() . '/assets/img/seta-botao.png' ?>" alt="" width="8" height="13">
						</a>
					</div>
				</div>

			</div>



		</div>
		<input type="checkbox" id="control-nav" class="hide" />
		<label for="control-nav" class="control-nav mobile">
		</label>
		<div id="menuMobileBox" class="menu">

			<?php
			wp_nav_menu(
				array(
					'menu'              => 'Primary Navigation',
					'container' => '',
					'menu_class' => 'no-format no-margin no-padding'
				)
			);
			?>
			<div class="itens-menu mobile">
				<a href="<?php echo get_permalink(get_page_by_path('/busca')) ?>" class="busca">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/icon-busca.png' ?>" alt="Buscar">
				</a>

				<a href="<?php echo $clientes ?>" class="area-cliente">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/icon-cliente.png' ?>" alt="Área do Cliente">
				</a>
				<a href="<?php echo $contato['url'] ?>" class="contato" target="<?php echo $contato['target'] ?>">
					<?php echo $contato['title'] ?>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/seta-botao.png' ?>" alt="" width="8" height="13">
				</a>
			</div>
		</div>
		<div id="cover" class="mobile"></div>
	</header>