<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Hoppesa</title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="menu navbar navbar-default navbar-fixed-top clearHeader clearMargin">
		  
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
		        <img class="img-responsive" alt="Brand" src="<?php bloginfo('template_url')?>/assets/images/hoppesa.png">
		      </a>

		    </div>

              <hr>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
		       <?php
            
	            $args = array(
	              'theme_location' => 'top-bar',
	              'depth'    => 0,
	              'container'  => false,
	              'menu_class'   => 'nav, navbar-nav',
	              'walker'   => new BootstrapNavMenuWalker()
	            );

	            wp_nav_menu($args);
	          
	          ?>
		      
		    </div><!-- /.navbar-collapse -->

		    <div class="phone">
		    	<p><i><img src="<?php bloginfo('template_url')?>/assets/images/tel.png" alt=""></i>(55)2598-9935 • 5762-7291 </p>
		    </div>
  
		</nav>
	</header>