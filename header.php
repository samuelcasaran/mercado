<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tienda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tienda' ); ?></a>










	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
	
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$tienda_description = get_bloginfo( 'description', 'display' );
			if ( $tienda_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tienda_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg bg header" >
		<div class="container ">
   
   <div class="row align-items-center"> 



   <div class="  col-sm-12  col-md-9 ">  
	   
   <div class="navbar">
   <div class="brand navbar-brand"> 
  	<?php the_custom_logo();?>
	</div> 
	<div class="buscador">
	<?php aws_get_search_form( true ); ?> 
	</div> 
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	 <span class="navbar-toggler-icon"></span>
   </button> 
   </div> 


	   

	   </div> 
	   <div class=" col- sm-12 col-md-3">
	   <img src="https://http2.mlstatic.com/D_NQ_757831-MLA69342170755_052023-OO.webp" alt="">
	 </div>

   

	

 <div class=" row collapse navbar-collapse m-auto align-items-center" id="navbarText"> 




   <div class=" col-sm-12 col-md-8">
   <ul class="navbar-nav m-auto mb-lg-0">
	 <li class="nav-item">

	   <a href="" class="destacado nav-link">
	   <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" class="px-2">
		 <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
	   </svg>
	   Ingresa tu domicilio
	 </a>
	 </li>
	 <li class="nav-item">
	   <a class="nav-link" href="#">Categorías</a>
	 </li>
	 <li class="nav-item">
	   <a class="nav-link" href="#">Ofertas</a>
	 </li>  
	 
	 <li class="nav-item">
	   <a class="nav-link " aria-current="page" href="#">Historial</a>
	 </li>
	 <li class="nav-item">
	   <a class="nav-link" href="#">Supermercado</a>
	 </li>
	 <li class="nav-item">
	   <a class="nav-link" href="#">Moda</a>
	 </li> 
	 <li class="nav-item">
	   <a class="nav-link" href="#">Vender</a>
	 </li> 
	 <li class="nav-item">
	   <a class="nav-link" href="#">Ayuda</a>
	 </li>
   </ul> 

   </div> 






<div class=" col-sm-12 col-md-4">
<?php
	   wp_nav_menu(
		 array(
		   'theme_location' => 'menu-1',
		   'menu_id' => 'menu',
		   'menu_class' => 'navbar-nav',
		 )
	   );
	   ?>
</div>
  
 </div>






 </div>
	


</nav><!-- #site-navigation --> 



	</header><!-- #masthead -->









		