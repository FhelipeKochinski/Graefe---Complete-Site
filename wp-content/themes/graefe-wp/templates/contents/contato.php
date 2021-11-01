<!-- Conteúdo x -->
<div class="conteudo_contato">

    <!-- Title -->
    <div class="container">

        <!-- Interno -->
        <div class="col-sm-12 titulo">
        
            <div class="tituloPrincipal">
                <h2 class="titulo"><?= get_field('titulo_agendamento', 'option')?></h2>
                <div class="borda"></div>
            </div>

        </div>
        <!-- /Interno -->

    </div>
    <!-- Title -->

    <!-- bgForm -->
    <div class="bgForm">
    
        <div class="container">

            <figure class="col-sm-6 imgAgendamento">
                <?php getImagemObj(get_field('imagem_agendamento', 'option')['sizes'], '2048x2048') ?>
            </figure>

            <!-- Formulário -->	
            <div class="col-sm-6 agendamento">
            
                <?= do_shortcode('[contact-form-7 id="100" title="Formulário de Agendamento"]') ?>

                <div class="textoAgendamento">
                    <p><?php get_field('texto_agendamento', 'option') ?></p>
                </div>

            </div>
            <!-- /Formulário -->

        </div>

    </div>
    <!-- /bgForm -->

</div>
<!-- /Conteúdo X -->
