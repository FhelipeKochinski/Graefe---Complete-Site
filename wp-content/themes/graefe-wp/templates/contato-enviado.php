<?php
/**
 * Template Name: Contato Enviado
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/enviado.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="contato_enviado">

	<!-- Conteúdo 1 -->
	<div class="conteudo_enviado">
		<div class="container">

            <div class="tituloPag center">
                <span class="pretitulo"><?= get_field('pre-titulo') ?></span>
                <?php tituloPrincipal(get_field('titulo_enviado'), 'h1') ?>
            </div>


            <div class="texto">
                <?= get_field('texto_enviado') ?>
            </div>
		</div>
	</div>
	<!-- /Conteúdo 1 -->
	
	<!-- Mapa -->
	<div class="boxMapa">
		<?= get_field('mapa') ?>
	</div>
	<!-- /Mapa -->

</section>

<?php get_footer() ?>