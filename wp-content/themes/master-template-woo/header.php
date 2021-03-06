<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Master_Template
 */
global $geniorama;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header <?php
			foreach($geniorama['button-set-multi-header-bottom'] as $clase_encabezado){
				if ($clase_encabezado == '2') {
					echo "absolute-header";
				}
		}?>">
		<!--Start Top Header-->
		<?php if ($geniorama['header-top-on-off']): ?>
			<?php get_template_part( 'template-parts/header/top-header'); ?>
		<?php endif; ?>

		<!--Start Bottom Header-->
		<?php if ($geniorama['header-bottom-on-off'] == '1'): ?>
			<!-------------------------------Logo left--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '1'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-left'); ?>
			<?php endif; ?>
			
			<!-------------------------------Logo center--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '2'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-center'); ?>
			<?php endif; ?>


			<!-------------------------------Logo Right--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '3'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-right'); ?>
			<?php endif; ?>

			<!-------------------------------Logo Superior--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '4'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-superior'); ?>
			<?php endif; ?>

		<?php endif; ?>
	</header><!-- #masthead -->

	<!--Menu lateral-->
	<?php if ($geniorama['menu_lateral']): ?>
		<?php get_template_part( 'template-parts/menu-lateral'); ?>
	<?php endif; ?>

	<div class="search-box-modal" id="search-box">
		<div class="container-form">
			<form role="search" method="get" action="<?php home_url( '/' ) ?>" class="search-form form-search form-inline justify-content-center">
				<div class="form-group">
					<input type="search" name="s" id="" class="form-control" value="<?php get_search_query(); ?>" placeholder="Ingresa tu búsqueda">
					<button class="button-master principal-button rounded-button" type="submit">Buscar</button>
				</div>
			</form>
			
			<button class="close-button" id="close-button-search">
				<i class="fas fa-times"></i>
			</button>
		</div>
	</div>
	<div id="content" class="site-content">
