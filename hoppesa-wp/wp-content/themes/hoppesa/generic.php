<?php  
/*
Template Name: Genérica 
*/
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="header-section"
       style= "background-image: url('<?php the_field('imagenHeader'); ?>');">
	     <div class="container-fluid">
	     
	     <div class="text-header-section"> 
	        <h1 class="animated fadeInDown">
	        <?php the_title(); ?></h1>
	        
	     </div>
	  </div>

	</section>
	  <section class="generic">
	  	<h4> <?php the_field('titleContent'); ?></h4>
	  	<h5> <?php the_field('subtitleContent'); ?></h5>
	  	<div  class="textGeneric"> 
	     	 <?php the_field('content'); ?>
	  	</div>
	  </section>
	<?php endwhile; else: ?>
	<?php endif; ?> 
<?php get_footer(); ?>
	