<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/singleServico.css">


<?php include('templates/contents/breadCrumbs.php') ?>

<section id="singleServico">

    
	<!-- Conteúdo 1 -->
	<div class="conteudo_servicos">
		<div class="container">

			<!-- Interno -->
			<div class="col-sm-6 texto">

				<!-- Título -->
				<?php tituloPrincipal(get_field('titulo_servico'), 'h1') ?>

				<!-- Texto -->
				<div class="textoBox">
					<?= get_field('texto_servico') ?>
				</div>

			</div>

			<!-- Img -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_servico')['sizes'], '2048x2048', get_field('titulo_servico')) ?>
			</figure>

		</div>
	</div>
	<!-- /Conteúdo 1 -->
    
    <!-- Conteúdo 2 -->
    <div class="conteudo_exames">
        <div class="container">

            <!-- Lista -->
            <div class="panel-group listaConteudos" id="accordion">

                <?php
                $cont = 1;
                $itens = get_field('lista_servicos');

                if($itens) :
                    foreach($itens as $item) :?>

                        <div class="card panel panel-default" id="<?= $item['ancora'] ?>">

                            <div class="card-header" id="heading<?php echo $cont ?>">

                                <button type="button" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="<?php if($cont === 1){ echo 'true'; } else { echo 'false'; } ?>" aria-controls="collapse<?php echo $cont ?>" class="<?php if($cont === 1){ echo ''; } else { echo 'collapsed'; } ?>">

                                    <h2><?= $item['titulo_servico_interno'] ?></h2>

                                    <span class="mais">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </span>

                                    <span class="menos">
                                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                    </span>

                                </button>

                            </div>

                            <div id="collapse<?php echo $cont; ?>" class="collapse boxConteudo <?php if($cont === 1){ echo 'in'; } ?>" aria-labelledby="heading<?php echo $cont; ?>" data-parent="#accordion">
                                <p><?= $item['texto_servico_interno'] ?></p>
                            </div>

                        </div>

                    <?php $cont++; endforeach;
                endif; 
                ?>

            </div>

        </div>
    </div>
    <!-- /Conteúdo 2 -->

	<!-- Agendamento -->
	<?php include('templates/contents/contato.php') ?>
	
</section>

<?php get_footer() ?>