<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Fhelipe Kochinski - Mix Web Soluções">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon"/>
	<?php wp_head(); ?>

</head>

<body> 

	<!-- Cabeçalho Header -->
	<div class="nav-top">
		<div class="container">
				
			<!-- E-mail -->
			<?php if (get_field('e-mail', 'options')) { ?>
				<div class="linkHeader email">
				
					<div class="texto">
						<i class="fa fa-envelope-o"></i>
						<a href="mailto: <?= get_field('e-mail', 'options') ?>" id="emailHeader">
							<?= get_field('e-mail', 'options') ?>
						</a>
					</div>

				</div>
			<?php } ?>
			<!-- /E-mail -->

			<!-- Phone -->
			<?php if (get_field('telefone', 'options')) { ?>
				<div class="linkHeader telefoneHeader">
					
					<div class="texto">
						<i class="fa fa-phone"></i>
						<a href="tel: <?= linkTelefone(get_field('telefone', 'options')) ?>" id="telefoneHeader">
							<?= get_field('telefone', 'options') ?>
						</a>
					</div>

				</div>
			<?php } ?>
			<!-- /Phone -->

			<!-- Whats -->
			<?php if (get_field('whatsapp', 'options')) { ?>
				<div class="linkHeader whatsappHeader">
					
					<div class="texto">
						<i class="fa fa-whatsapp"></i>
						<a href="tel: <?= linkTelefone(get_field('whatsapp', 'options')) ?>" id="whatsappHeader">
							<?= get_field('whatsapp', 'options') ?>
						</a>
					</div>
					
				</div>
			<?php } ?>
			<!-- /Whats -->

		</div>
	</div>
	<!-- /Cabeçalho Header -->
		
	<!-- Início Header -->
	<header id="header">

		<!-- Top Header -->
		<div class="topHeader">
			<div class="container">

				<!-- Logo -->
				<figure id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php getImagemObj(get_field('logo', 'option')['sizes'], '2048x2048', 'Graefe') ?>
					</a>
				</figure>
				<!-- /Logo -->

				<!-- BoxMenu -->
				<div id="boxMenu">

					<!-- Menu -->
					<div id="menuPrincipal">

						<img id="fechaMenuMobile" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/fecha-menu.png" alt="Fecha Menu" />
							
						<!-- Botões -->
						<div class="btnSuperiores">
						
							<!-- Resultados de Exames -->
							<?php if (get_field('resultado_exame', 'options')) { ?>
								<div class="linkHeader examesBtn">
								
									<a href="<?= get_field('resultado_exame', 'options') ?>" id="exameHeader">
										<i class="fa fa-file-text"></i>
										<span>RESULTADOS DE EXAMES</span>
									</a>
								</div>
							<?php } ?>
							<!-- /Resultados de Exames -->
															
							<!-- Agendamento Online -->
							<div class="linkHeader agendamentoBtn">
							
								<div id="agendamentoHeader">
									<a href="#">
										<i class="fa fa-calendar"></i>
										<span>AGENDAMENTO ONLINE</span> 
									</a>
								</div>

							</div>
							<!-- /Agendamento Online -->

						</div>
						<!-- /Botõe -->

						<!-- Menu Principal -->
						<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '')); ?>

					</div>

				</div>
				<!-- /BoxMenu -->

				<!-- Busca -->
				<div id="buscaHeader">
					<i class="fa fa-search"></i>
				</div>
				<!-- /Busca -->

				<!-- Icone -->
				<div id="menuMobile">
					<i class="fa fa-bars"></i>
				</div>
				<!-- /Icone -->

			</div>
		</div>
		<!-- /Fim Top Header -->
		
		<!-- BuscaFull -->
		<div id="buscaFull">
			<div class="boxInterno">
				<figure id="fechaBusca">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/fecha-menu.png" alt="Fecha Busca" />
				</figure>
				<?php get_search_form() ?>
			</div>
		</div>
		<!-- /BuscaFull -->
		
	</header>
	<!-- /Fim Header -->

	<!-- Modal Orçamento -->
	<section class="modalOrcamento">
		<div class="modalContato">
			<div class="boxFlex">

				<!-- Fecha -->
				<figure id="fechaFormulario">
					<img id="fechaMenuMobile" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/fecha-menu.png" alt="Fecha Menu" />
				</figure>
				<!-- /Fecha -->

				<!-- Conteúdo -->
				<div class="boxConteudo">

					<div class="internoModal">
						<span class="tituloModal">Agende sua consulta online</span>
						<div class="borda"></div>
					</div>

					<!-- Formulário -->
					<div class="formulario">
						<?= do_shortcode ('[contact-form-7 id="327" title="Formulário de Agendamento Online"]') ?>
					</div>
					<!-- /Formulário -->

				</div>
				<!-- /Conteúdo -->

			</div>
		</div>
	</section>
	<!-- /Modal Orçamento -->
