<?php  
/*
Template Name: Contacto 
*/
?>

<?php get_header(); ?>

<?php
	if($_POST){

		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$email = $_POST['e-mail'];
		$desarrollo = $_POST['desarrollo'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		$html_message  = '<html><table>'; 
		$html_message .= '<tr><td>Nombre: '.$nombre.'</td></tr>';
		$html_message .= '<tr><td>Telefono: '.$telefono.'</td></tr>';
		$html_message .= '<tr><td>Correo: '.$email.'</td></tr>';
		$html_message .= '<tr><td>Desarrollo: '.$desarrollo.'</td></tr>';
		$html_message .= '<tr><td>Mensaje: '.$mensaje.'</td></tr>';
		$html_message .= '</table></html>';


		$para      = 'ivan.hernandez@publicidadenlinea.com';
		$titulo    = $asunto;
		$mensaje   = $html_message;
		$cabeceras = "MIME-Version: 1.0" . "\r\n";
		$cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$cabeceras .= 'From: not_replay@hoppesa.com' . "\r\n" .
		    'Reply-To: not_replay@hoppesa.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		mail($para, $titulo, $mensaje, $cabeceras);

		?>
		<script>
			location.href= 'gracias';
		</script>
		<?php
	}
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<section class="header-section" style="background-image: url(<?php the_field('imageHead'); ?>);">
	  
	  <div class="container-fluid">
	     
	     <div class="text-header-section">
	        
	        <h1 class="animated fadeInDown"><?php the_title(); ?></h1>


	     </div>

	  </div>

	</section>

	<section class="contacto">
		<article class="container">
		  <form id="contacto" method="post" action="#">
			<div class="col-sm-6">
				<div class="form-group">
					
					<input name="nombre" type="text" class="form-control input-sm" placeholder="Nombre Completo">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<input name="telefono" type="text" class="form-control input-sm" placeholder="Teléfono">
				</div>
			</div>

			<span class="clearfix"></span>

			<div class="col-sm-6">
				<div class="form-group">
					<input name="e-mail" type="text" class="form-control input-sm" placeholder="Correo electrónico">
				</div>
			</div>

			<div class="col-sm-6">
				<select name="desarrollo" class="select">
					  <option value="disabled">Selecciona el desarrollo de tu interés</option>
					  <option value="Torre Dayr">Torre Dayr</option>
					  <option value="Torre Kahum">Torre Kahum</option>
					  <option value="Torre Amarna">Torre Amarna</option>
				</select>
			</div>


			<div class="col-sm-12">
				<div class="form-group">
					<input name="asunto" type="text" class="form-control input-sm" placeholder="Asunto">
				</div>
			</div>

			<div class="col-sm-12">
			<textarea class="form-control" rows="5" placeholder="Mensaje" name="mensaje"></textarea>

			<div class="contactanos">
			 <input class="button naranja enviar" type="submit" value="Enviar">
				</div>
			</div>
            </form>
             <div id="resMsg"></div>
		</article>
	</section>
<?php endwhile; else: ?>
<h1>no hay post</h1>
<?php endif; ?>

<?php get_footer(); ?>