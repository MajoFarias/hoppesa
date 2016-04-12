<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <?php if( have_rows('eyecatcher') ): ?>
   <?php while( have_rows('eyecatcher') ): the_row(); 
       // vars producto
      $title = get_sub_field('title');
      $descript = get_sub_field('descript');
      $imagen= get_sub_field('imagen');
      $eyecatcher= get_sub_field('eyecatcher');

      ?>


         <section class="eyecatcher" style="background-image: url(<?php echo $eyecatcher; ?> );">
               <div class="container-fluid">
                  <div class="text-eyecatcher">
                     <h1 class="animated fadeInDown">
                        <?php echo $title; ?> 
                     </h1>
                     <p class="animated fadeInDown">
                     	<?php echo $descript; ?> 
                     </p>
                  </div>
               </div>
         </section>


   <?php endwhile; else: ?>
   <h1>No se encontraron Articulos</h1>
   <?php endif; ?>
          

<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?>