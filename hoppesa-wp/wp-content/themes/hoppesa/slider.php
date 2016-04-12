<section class="carrousell">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <?php if( have_rows('slider') ): ?>
       <?php while( have_rows('slider') ): the_row(); 
           // vars producto
          $title = get_sub_field('title');
          $descript = get_sub_field('descript');
          $imagen= get_sub_field('imagen');

          ?>
        <div class="item">
            
            <?php 
            if( !empty($imagen) ): ?>
            <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
            <?php endif; ?>
          
          <div class="carousel-caption">
            <h1 class="animated slideInDown"><?php echo $title; ?></h1>
            <h2 class="animated slideInDown"><?php echo $descript; ?></h2>
          </div>
        
        </div>

       <?php endwhile; else: ?>
       <?php endif; ?>
        
    <?php endwhile; else: ?>
    <?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><img src="<?php bloginfo('template_url')?>/assets/images/arrow-left.png"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><img src="<?php bloginfo('template_url')?>/assets/images/arrow-right.png"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</section>

  