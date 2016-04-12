<section class="section-1" id="section-one">

   <div class="container-fluid">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h3>
      <?php the_field('head_title'); ?>
      </h3>

   <img src="<?php bloginfo('template_url')?>/assets/images/barra.png" alt="">
      
      <div class="desarrollos" id="desarrollos">
         
         <div class="grid">


                  <?php if( have_rows('1_desarrollo') ): ?>
                  <?php while( have_rows('1_desarrollo') ): the_row(); 
                      // vars producto
                     $title = get_sub_field('title');
                     $descript = get_sub_field('descript');
                     $imagen= get_sub_field('imagen');
                     $link= get_sub_field('link');
                     ?>
            
            <figure class="effect-oscar">

                     <?php 
                       if( !empty($imagen) ): ?>
                       <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                     <?php endif; ?>
                     
                     <figcaption>
                        
                        <div class="texto-fig">

                           <h2><?php echo $title; ?></span></h2>
                           <p><?php echo $descript; ?></p>
                           <br>
                           <p><a href="#">Conoce más</a></p>
                        </div>

                        <a href="<?php echo $link; ?>">View more</a>
                     </figcaption>    

            </figure>

                  <?php endwhile; else: ?>
                  <h1>No se encontraron Articulos</h1>
                  <?php endif; ?>
          

              
         </div>

      </div>

   <?php endwhile; else: ?>
   <h1>no hay post</h1>
   <?php endif; ?>  

   </div>
      
</section>