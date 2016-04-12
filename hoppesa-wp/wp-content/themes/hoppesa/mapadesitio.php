<?php  
/*
Template Name: Mapa de sitio 
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="header-section" style="background-image: url(<?php the_field('imageHead'); ?>);">
      <div class="container-fluid">
         <div class="text-header-section">
            <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
           	</span>

         </div>
      </div>
	</section>

<section class="container">
	
	<article class="row map-site">
		<div class="col-sm-6">
			<ul>
				<li>
					<strong>Torre Dayr</strong>
					<ul>
					<li><a href="<?php bloginfo('template_url')?>/departamentos/">Departamentos</a></li>
					<li><a href="<?php bloginfo('template_url')?>/ubicacion/">Ubicación</li>
					<li><a href="<?php bloginfo('template_url')?>/galeria/">Galería</a></li>
					</ul>
				</li>
				

				<!--<li><strong>Torre Kahum</strong></li>
				<li><strong>Torre Amarna</strong></li>-->
				
			</ul>
			
		</div>

		<div class="col-sm-6">

			<ul>
				<li><strong><a href="<?php bloginfo('template_url')?>/hoppesa/">Hoppesa</a></strong></li>
				<li><strong><a href="<?php bloginfo('template_url')?>/asesoria-crediticia/">Asesoría crediticia</a></strong></li>
				<li><strong><a href="<?php bloginfo('template_url')?>/contacto/">Contacto</a><strong></li>
			
				
			</ul>
			
		</div>
		
	</article>

</section>

<?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>