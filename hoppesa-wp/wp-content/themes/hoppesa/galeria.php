<?php  
/*
Template Name: Galería
*/
 ?>

<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<section class="header-section" style="background-image: url(<?php the_field('imageHead'); ?>);">
	  
	  <div class="container-fluid">
	     
	     <div class="text-header-section">
	        
	        <h1 class="animated fadeInDown"><?php the_field('subtitle'); ?></h1>
	        <h2 class="animated fadeInDown"><?php the_title(); ?></h2>


	     </div>

	  </div>

	</section>


	<section>
		
		<article class="container">
		<div class="row">


			<?php if( have_rows('gallery') ): ?>
	        	<?php while( have_rows('gallery') ): the_row(); 
	            
	             $title = get_sub_field('title');
	             $imagen_link = get_sub_field('imagen_link');
	             $link= get_sub_field('link');
	             $imagen_completa = get_sub_field('imagen_completa');
	             ?>



			<div class="gal col-sm-6 col-md-4">
			<div class="lol">
			<a class="venobox" href="<?php echo $imagen_completa;?>" data-gall="myGallery">
			
			<?php 
             if( !empty($imagen_link) ): ?>
            <img src="<?php echo $imagen_link['url']; ?>" alt="<?php echo $imagen_link['alt']; ?>" />
            <?php endif; ?>

			</a>
			</div>
			<h2><?php echo $title; ?></h2>
			</div>

				<?php endwhile; else: ?>
		        <h1>No se encontraron Articulos</h1>
		        <?php endif; ?>
       
			
		</div>

		<div class="contactanos col-xs-12">
			<a href="<?php the_field('contact_link'); ?>">Contáctanos</a>
			
		</div>

		</article>


	</section>

<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 

	

<?php get_footer(); ?>

