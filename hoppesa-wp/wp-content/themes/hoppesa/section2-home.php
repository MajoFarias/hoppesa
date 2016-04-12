
   <section class="section-3">
      <article class="container">
         <div class="row">


         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
       
         <?php endwhile; else: ?>
         <h1>no hay post</h1>
         <?php endif; ?>      
 



            
         

         </div>
         
      </article>

   </section>