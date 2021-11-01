<?php
/**
 * Template Name: Equipe
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/equipe.css">

<!-- BreadCrumbs -->
<?php include('contents/breadCrumbs.php') ?>

<section id="pagina_equipe">

    <!-- Conteúdo 1 -->
    <div class="conteudo_equipe">
		<div class="container">

            <!-- TítuloTexto -->
			<div class="col-sm-6 texto">

				<?php tituloPrincipal(get_field('titulo_equipe'), 'h1') ?>

			</div>

        </div>
    </div>
    <!-- /Conteúdo 1 -->

    <!-- Conteúdo 2 -->
    <div class="conteudo_faria">
        <div class="container">

            <!-- Doutor - Repeater -->
            <?php
            $cont = 1;
            $itens = get_field('integrantes_loop');

            if($itens) :
                foreach($itens as $item) :?>

                    <!-- Doutor -->
                    <div class="col-sm-6 interno">

                        <!-- Img -->
                        <figure>
                            <?php getImagemObj($item['imagem_doutor']['sizes'], '2048x2048') ?>
                        </figure>
                    
                        <!-- Título -->
                        <span class="tituloDoutor"><?= $item['nome_doutor'] ?></span>

                        <!-- CRM -->
                        <span class="crmDoutor"><?= $item['crm_doutor'] ?></span>

                        <!-- Texto -->
                        <div class="textoBox">
                            <?= $item['estudo_doutor'] ?>
                        </div>

                    </div>

                    <?php if($cont % 2 == 0): ?>

                        <div class="clear"></div>

                    <?php endif; ?>

                <?php $cont++; endforeach;
            endif; 
            ?>

        </div>
    </div>
    <!-- /Conteúdo 2 -->

	<!-- Agendamento -->
	<?php include('contents/contato.php') ?>


</section>

<?php get_footer() ?>