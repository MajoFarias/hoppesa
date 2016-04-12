
	<footer>
		
		<section class="container-fluid">
			<section class="llamanos">
			<a href="tel:+56831861">Llámanos</a>
			</section>
			<article class="row">
				<div class="col-xs-12 col-sm-6">
					<p>Manuel Rivera Cambas # 46 Col. Jardín Balbuena Del. Venustiano Carranza. Cp. 15900 CDMX<br>
Todos los derechos Reservados HOPPESA de S.A. de C.V. 2016</p>
				</div>

				

					<?php wp_nav_menu(
                             array(
                             'container' => false,
                             'items_wrap' => '<ul id="menu-top" class="col-xs-12, col-sm-6, secondarymenu">%3$s</ul>',
                             'theme_location' => 'menu'
                             )); ?>

			</article>

		</section>
		
	</footer>
	
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	   	<script src="<?php bloginfo('template_url')?>/assets/js/bootstrap.js"></script>
	   	<script src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>
	   	<script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/venobox.min.js"></script>
		<script>
		   $(".carousel-inner > div:first-child").addClass("active");
		</script>
<?php wp_footer(); ?>
</body>

</html>