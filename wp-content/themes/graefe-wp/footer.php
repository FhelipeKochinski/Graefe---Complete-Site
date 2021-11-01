<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">

<!-- Footer -->
<footer id="footer">

	<div class="linhaTopo"></div>

	<!-- Container -->
	<div class="container">
	
		<!-- Botão Subir -->
		<div class="botaoSubir">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- /Subir -->

		<!-- Dados Footer -->
		<div class="dadosFooter">
	
			<!-- Logo -->
			<div class="col-sm-3 logo">
				<figure id="logoFooter">
					<?php getImagemObj(get_field('logo', 'option')['sizes'], '2048x2048', 'IGO') ?>
				</figure>

				<div class="doutorUm">
					<span><?= get_field('funcao_doutor', 'options') ?></span>
					<p><?= get_field('nome_footer', 'options') ?></p>
				</div>

				<div class="doutorDois">
					<span><?= get_field('funcao_dois', 'options') ?></span>
					<p><?= get_field('nome_dois', 'options') ?></p>
				</div>

			</div>
			<!-- /Logo -->
			
			<!-- Exames -->
			<div class="col-sm-6 menu">
				<span class="tituloFooter">Exames</span>

				<div class="col-sm-6">
					<?php wp_nav_menu(array('theme_location' => 'footer_exame_esquerda', 'container' => '')); ?>
				</div>

				<div class="col-sm-6">
					<?php wp_nav_menu(array('theme_location' => 'footer_exame_direita', 'container' => '')); ?>
				</div>

			</div>
			<!-- /Exames -->

			<!-- Contatos -->
			<div class="col-sm-3 contatos">

				<span class="tituloFooter">CONTATOS</span>

				<!-- Botão -->
				<div class="btnInferior">
														
					<!-- Agendamento Online -->
					<div class="linkFooter agendamentoBtn">
					
						<div id="agendamentoFooter">
							<a href="#">
								<i class="fa fa-calendar"></i>
								<span>AGENDAMENTO ONLINE</span> 
							</a>
						</div>

					</div>
					<!-- /Agendamento Online -->

				</div>
				<!-- /Botão -->
				
				<!-- Telefone -->
				<?php if (get_field('telefone', 'options')) { ?>
					<div class="clear"></div>
					<a href="tel: <?= linkTelefone(get_field('telefone', 'options')) ?>" id="telefoneRodape">
						<i class="fa fa-phone"></i>
						<span><?= get_field('telefone', 'options') ?></span>
					</a>
				<?php } ?>


				<!-- Whatspp -->
				<?php if (get_field('whatsapp', 'options')) { ?>
					<div class="clear"></div>
					<a href="https://api.whatsapp.com/send?phone=55<?= linkTelefone(get_field('whatsapp', 'options')) ?>" id="whatsappRodape" target="_blank">
						<i class="fa fa-whatsapp"></i>	
						<span><?= get_field('whatsapp', 'options') ?></span>
					</a>
				<?php } ?>
				
				<!-- E-mail -->
				<?php if (get_field('e-mail', 'options')) { ?>
					<a href="mailto: <?= get_field('e-mail', 'options') ?>" id="emailRodape">
						<i class="fa fa-envelope-o"></i>
						<span><?= get_field('e-mail', 'options') ?></span>
					</a>
				<?php } ?>

				<div class="redesSociais">

					<?php if(get_field('instagram', 'option')){ ?>
						<a href="<?php echo get_field('instagram', 'option') ?>" target="_blank">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					<?php } ?>

					<?php if(get_field('facebook', 'option')){ ?>
						<a href="<?php echo get_field('facebook', 'option') ?>" target="_blank">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
						</a>
					<?php } ?>

				</div>

			</div>
			<!-- /Contatos -->

		</div>
		<!-- /Dados Footer -->

	</div>
	<!-- /Container -->

</footer>
<!-- /Footer -->

	<!-- Sub Footer -->
	<div id="subfooter">
		<div class="container">

			<!-- Logo MMD -->
			<figure>
				<a href="https://muitomaisdigital.com.br/" target="_blank" title="Criação de Sites em Curitiba">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/logo-MMD-04-tons-de-cinza-1.png" alt="Criação de Sites em Curitiba">
				</a>
			</figure>

		</div>
	</div>
	<!-- /Sub Footer -->

	<!-- Btn Whats -->
		<?php if (get_field('whatsapp', 'options')) { ?>
			<a href="https://api.whatsapp.com/send?phone=55<?= linkTelefone(get_field('whatsapp', 'options')) ?>" id="whatsappFlutua" target="_blank">
				<img id="btnWhats" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/10/icone-whatsapp.png" alt="Botão WhatsApp" />
			</a>
		<?php } ?>
	<!-- /Btn Whats -->

<script src="<?php echo get_template_directory_uri()?>/assets/scripts.js"></script>

<?php wp_footer(); ?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&family=Work+Sans&display=swap" rel="stylesheet">

</body>
</html>
