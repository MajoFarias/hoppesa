<?php  
/*
Template Name: Ubicación
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

	<section class="section-4">
		<article class="container-fluid">
		<div class="row">
			
			<div class="img-depto col-md-6">
				<iframe src="<?php the_field('map_link'); ?>"  height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
			<div class="white-back col-md-6">
				
				<div class="col-600px">
					<h3>
					<?php the_field('sub_visited'); ?>
					</h3>
					<img src="<?php bloginfo('template_url')?>/assets/images/barra.png" alt="">
					<br>
					<?php the_field('text'); ?>
					
					<div class="left contactanos">
			
			<a href="<?php the_field('contact_link'); ?>">Contáctanos</a>

				</div>
			
			</div>
		
		</div>
		</article>	
	</section>




<!--Asesoría creditica-->

   <section class="section-3">
      <article class="container">
         
         <div class="row">

         <?php if( have_rows('section2-home') ): ?>
         <?php while( have_rows('section2-home') ): the_row(); 
             
            $title = get_sub_field('title');
            $phrase = get_sub_field('phrase');
            $descript = get_sub_field('descript');
            $imagen= get_sub_field('imagen');
            $link= get_sub_field('link');
            ?>

            <div class="col-xs-12 col-sm-6">

               <?php 
               if( !empty($imagen) ): ?>
               <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
               <?php endif; ?>
               
               <h3><?php echo $title; ?></h3>
               <img src="<?php bloginfo('template_url')?>/assets/images/barra.png" alt="">
               <div class="textSection3">
                  <strong><?php echo $phrase; ?></strong>
                  <br> <br>
                   <?php echo $descript; ?>
                </div>
               <a href="<?php echo $link; ?>">Conoce Más ></a>

            	</div>  

         <?php endwhile; else: ?>
         <h1>No se encontraron Articulos</h1>
         <?php endif; ?>

         </div>      
      </article>
   </section>





<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?> 


<?php get_footer(); ?>

	
