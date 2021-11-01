<?php
$args = array('post_type' => 'slideHome', 'posts_per_page' => 10);
$wp_query = new WP_Query( $args );
?>

<?php if ($wp_query->have_posts()) : ?>

	<!-- Depoimento Loop -->
	<section id="sliderDoutor">

		<ul class="listaDoutor">
	
			<?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<li class="itemDoutor">

                    <?php getImagemObj(get_field('listagem_imagem')['sizes'], '2048x2048', get_the_title()) ?>
					
				</li>
			
			<?php endwhile; ?>

		</ul>

	</section>
	<!-- /Depoimento Loop -->

<?php endif; ?>

<?php wp_reset_query(); ?>