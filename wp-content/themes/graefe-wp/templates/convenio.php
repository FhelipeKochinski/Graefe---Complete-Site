<?php
/**
 * Template Name: Convênios
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/convenio.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="paginaClinica">

    <!-- Conteúdo 1 -->
    <div class="conteudo_convenio">
		<div class="container">

			<!-- Interno -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_convenio'), 'h1') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_convenio') ?>
				</div>

			</div>

			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_convenio')['sizes'], '2048x2048', get_field('titulo_convenio')) ?>
			</figure>

        </div>
    </div>
	<!-- /Conteúdo 1 -->

    
    <!-- Conteúdo 2 -->
    <div class="conveniosLista">
   
        <div class="container">
            
            <!-- Loop Convênios -->
            <ul class="listagemConvenios">

                <?php
                    $args = array('post_type' => 'convenios', 'posts_per_page' => -1);
                    $wp_query = new WP_Query( $args );
                ?>

                <?php if($wp_query->have_posts()) : ?>
                    <?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <?php get_template_part('content','convenios'); ?>
                    <?php endwhile;	?>
                <?php endif; ?>

            </ul>
            <!-- /Loop Convênios -->

        </div>

    </div>
    <!-- /Conteúdo 2 -->

	<!-- Agendamento -->
	<?php include('contents/contato.php') ?>
	

</section>

<?php get_footer() ?>