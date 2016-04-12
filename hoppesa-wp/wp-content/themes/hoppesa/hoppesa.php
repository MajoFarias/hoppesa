<?php  
/*
Template Name: Hoppesa
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

	<section class="section-0">
		<article class="container">
			<h3>
			<?php the_field('subtitle'); ?>
			</h3>
			<img src="<?php bloginfo('template_url')?>/assets/images/barra.png" alt="" >
			<div class="text-section-0">
           	<span><?php the_field('phrase'); ?></span>
           	<br>
			<?php the_field('first_text'); ?>
			</div>
			
		</article>
	</section>


	<?php if( have_rows('mision_vision') ): ?>
	<?php while( have_rows('mision_vision') ): the_row(); 
    
     $subtitle_mv = get_sub_field('subtitle_mv');
     $text = get_sub_field('text');
     $imagen = get_sub_field('imagen');
     ?>

	
		<section class="section-4">
			<article class="container">
				<div class="image-sec-2 col-sm-4 col-md-6">
					<?php 
		            if( !empty($imagen) ): ?>
		            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
		            <?php endif; ?>
				</div>
				<div class="text col-sm-8 col-md-6">
					<h3>
					<?php echo $subtitle_mv; ?>
					</h3>
					<img src="<?php bloginfo('template_url')?>/assets/images/barra.png" alt="" >
					<?php echo $text; ?>
				</div>
				
			</article>
		</section>


	<?php endwhile; ?>
	<?php endif; ?> 

	<section class="container">
			<div class="contactanos col-xs-12">
				<a href="<?php the_field('link_contacto'); ?>">Contáctanos</a>	
			</div>
	</section>

<?php endwhile; ?>
<?php endif; ?> 
	
<?php get_footer(); ?>
	