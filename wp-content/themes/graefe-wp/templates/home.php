<?php
/**
 * Template Name: Home
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">

<section id="paginaInicial">

	<!-- Conteúdo 1 -->
	<div class="conteudo_consulta">
		<div class="container">

			<!-- Interno -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_consulta'), 'h1') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_consulta') ?>
				</div>

				<!-- Link -->
				<?php if (get_field('link_consulta')) { ?>
					<a class="botaoGeral hoverZoom" href="<?= get_field('link_consulta') ?>">
						<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
						SAIBA MAIS
					</a>
				<?php } ?>

			</div>

			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_consulta')['sizes'], '2048x2048', get_field('titulo_consulta')) ?>
			</figure>

		</div>
	</div>
	<!-- /Conteúdo 1 -->

	<!-- Conteúdo 2 -->
	<div class="conteudo_listagem">

		<!-- Interno  -->
		<div class="lista">
			<?php if( have_rows('listagem_consulta') ): ?>
				<ul>
					<?php while( have_rows('listagem_consulta') ): the_row(); ?>
						<li class="col-sm-2">
												
							<!-- Img -->
							<figure>
								<?php getImagemObj(get_sub_field('imagem_item')['sizes'], '2048x2048', get_sub_field('titulo_item')) ?>
							</figure>

							<span><?php the_sub_field('titulo_item'); ?></span>
	
							<!-- Link -->
							<?php if (get_sub_field('link_item')) { ?>
								<a class="botaoGeral hoverZoom" href="<?= get_sub_field('link_item') ?>">
								<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
								SAIBA MAIS
								</a>
							<?php } ?>

						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		<!-- /Interno  -->

	</div>
	<!-- /Conteúdo 2 -->

	<!-- Conteúdo 3 -->
	<div class="conteudo_samir">
		<div class="container">

			<!-- Interno - Título/Texto -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_samir'), 'h2') ?>

				<span><?= get_field('nome_samir'); ?></span>

				<span><?= get_field('crm_samir'); ?></span>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_samir'); ?>
				</div>

				<!-- Botão -->
				<div class="btnMeio">

					<!-- Link -->
					<?php if (get_field('link_samir')) { ?>
						<a class="botaoGeral hoverZoom" href="<?= get_field('link_samir') ?>">
							<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
							SAIBA MAIS
						</a>
					<?php } ?>

				</div>

			</div>

			<div class="col-sm-6 loop">

				<!-- Loop slide -->
				<?php include('contents/imagemDoutor.php') ?>

			</div>

		</div>
	</div>
	<!-- /Conteúdo 3 -->

	<!-- Agendamento -->
	<?php include('contents/contato.php') ?>
	
	<!-- Conteúdo 4 -->
	<div class="conteudo_instituto">
		<div class="container">

			<!-- Interno -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_instituto'), 'h1') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_instituto') ?>
				</div>

				<!-- Botão -->
				<div class="btnMeio">

					<!-- Link -->
					<?php if (get_field('link_instituto')) { ?>
						<a class="botaoGeral hoverZoom" href="<?= get_field('link_instituto') ?>">
							<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
							SAIBA MAIS
						</a>
					<?php } ?>
				</div>

			</div>

			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_instituto')['sizes'], '2048x2048', get_field('titulo_instituto')) ?>
			</figure>

		</div>
	</div>
	<!-- /Conteúdo 4 -->
	
	<!-- Conteúdo 5 -->
	<div class="home_convenios">
		<div class="container">

		<!-- Título -->
		<?php tituloPrincipal(get_field('titulo_convenio'), 'h2') ?>
			   
        <!-- Loop Convênios -->
        <ul class="listagemConvenios" id="slideConvenios">

            <?php
                $args = array('post_type' => 'convenios', 'posts_per_page' => 15);
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

</section>

<?php get_footer() ?>