<?php
/**
 * Template Name: Clinica
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/clinica.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaClinica">

    <!-- Conteúdo 1 -->
    <div class="conteudo_clinica">
		<div class="container">

			<!-- Interno -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_historia'), 'h1') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_historia') ?>
				</div>

			</div>

			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_historia')['sizes'], '2048x2048', get_field('titulo_historia')) ?>
			</figure>

        </div>
    </div>
	<!-- /Conteúdo 1 -->

    <!-- Conteúdo 2 -->
    <div class="conteudo_olho">
		<div class="container">
		
			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_olho')['sizes'], '2048x2048', get_field('titulo_olho')) ?>
			</figure>

			<!-- Interno -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<h2><?= get_field('titulo_olho') ?></h2>

				<div class="icone">
					<?php getImagemObj(get_field('icone_logo')['sizes'], 'produtoThumbnail', get_field('titulo_olho')) ?>
				</div>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_olho') ?>
				</div>

			</div>

        </div>
    </div>
	<!-- /Conteúdo 2 -->
	
	<!-- Agendamento -->
	<?php include('contents/contato.php') ?>
	

</section>

<?php get_footer() ?>