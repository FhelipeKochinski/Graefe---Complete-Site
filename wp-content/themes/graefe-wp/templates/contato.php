<?php
/**
 * Template Name: Contato
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contato.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="pagina_contato">

	<!-- Bloco Inicial -->
	<div class="blocoInicial">
		<div class="container">
			<?php tituloPrincipal(get_field('titulo'), 'h1') ?>
		</div>
	</div>
	<!-- /Bloco Inicial -->

	<!-- Formulário -->	
	<div class="formulario">
		<div class="container">
			<div class="col-sm-8">
				<?= do_shortcode('[contact-form-7 id="9" title="Formulário de contato 1"]') ?>
			</div>
		</div>
	</div>
	<!-- /Formulário -->
	
	<!-- Mapa -->
	<div class="boxMapa">
		<?= get_field('mapa') ?>
	</div>
	<!-- /Mapa -->

</section>

<?php get_footer() ?>