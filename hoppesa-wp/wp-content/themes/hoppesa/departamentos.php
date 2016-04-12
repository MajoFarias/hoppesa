	
<?php  
/*
Template Name: Departamentos
*/
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="header-section"
       style= "background-image: url('<?php the_field('imagenHeader'); ?>');">
      <div class="container-fluid">
         <div class="text-header-section">
            <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
            <h2 class="animated fadeInDown"><?php the_field('subtitle'); ?></h2>
         </div>
      </div>
	</section>

	

	<section class="section4">	

	<?php if( have_rows('description') ): ?>
	<?php while( have_rows('description') ): the_row(); 
	    
	     $imagen = get_sub_field('imagen');
	     $title = get_sub_field('title');
	     $textCaracteristicas= get_sub_field('textCaracteristicas');
	     ?>

		 
		 <div class="content">
		 	
		 	<article>
		 		 <?php 
                  if( !empty($imagen) ): ?>
                  <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                  <?php endif; ?>
		 	</article>
		 	
		 	<article>
		 		
		 		<h3><?php echo $title; ?></h3>
		 		
		 		<img src="<?php bloginfo('template_url')?>/assets/images/barra.png">
		 		
		 		<h4>CARACTERÍSTICAS</h4>
		 		
		 		<div class="textCaracteristicas">
		 			<?php echo $textCaracteristicas; ?>
		 		</div>
		 		
		 		<h4>DISTRIBUCIÓN</h4>

		 		
		 		<div class="textDistribucion">
		 			
			 			<ul>

			 			<?php if( have_rows('distribucion') ): ?>	
						<?php while( have_rows('distribucion') ): the_row(); 
	    
			 				$icon = get_sub_field('icon');
			 				$element = get_sub_field('element');
			 				$number = get_sub_field('number');
			 			
			 			?>

			 				<li>
			 				<?php 
				            if( !empty($icon) ): ?>
				            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
				            <?php endif; ?>
							<span><?php echo $element; ?>
							<strong><?php echo $number; ?></strong>
							</span>							
							</li>
							
							
						<?php endwhile; else: ?>
						<?php endif; ?>	

			 			</ul>


			 			<ul>

			 			<?php if( have_rows('distribucion2') ): ?>	
						<?php while( have_rows('distribucion2') ): the_row(); 
	    
			 				$icon = get_sub_field('icon');
			 				$element = get_sub_field('element');
			 				$number = get_sub_field('number');
			 			
			 			?>

			 				<li>
			 				<?php 
				            if( !empty($icon) ): ?>
				            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
				            <?php endif; ?>
							<span><?php echo $element; ?>
							<strong><?php echo $number; ?></strong>
							</span>							
							</li>
							
							
						<?php endwhile; else: ?>
						<?php endif; ?>	

			 			</ul>

			 			<ul>

			 			<?php if( have_rows('distribucion3') ): ?>	
						<?php while( have_rows('distribucion3') ): the_row(); 
	    
			 				$icon = get_sub_field('icon');
			 				$element = get_sub_field('element');
			 				$number = get_sub_field('number');
			 			
			 			?>

			 				<li>
			 				<?php 
				            if( !empty($icon) ): ?>
				            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
				            <?php endif; ?>
							<span><?php echo $element; ?>
							<strong><?php echo $number; ?></strong>
							</span>							
							</li>
							
							
						<?php endwhile; else: ?>
						<?php endif; ?>	

			 			</ul>				

		 		</div>		 		
		 	
		 	</article>
			

		 </div>


	<?php endwhile; else: ?>
	<?php endif; ?>	

	</section>	


<!--link y nombre editables en contacto-->	
	<section class="container">
	<div class="contactanos col-xs-12">
		
		<?php if( have_rows('contact') ): ?>	
		<?php while( have_rows('contact') ): the_row();

		$link_contacto = get_sub_field('link_contacto');
		$nombre_contacto = get_sub_field('nombre_contacto');
		?>
		<a href="<?php echo $link_contacto; ?>"><?php echo $nombre_contacto ?></a>	
		
		<?php endwhile; else: ?>
		<?php endif; ?>		

	</div>
	</section>
	  
<!--link y nombre editables en contacto 2-->	
	<section class="container">
	<div class="contactanos col-xs-12">	
		<a href="<?php the_field('link_contacto'); ?>"><?php the_field('nombre_contacto'); ?></a>	
	</div>
	</section>
	
<?php endwhile; else: ?>
<?php endif; ?>	

<?php get_footer(); ?>

	

