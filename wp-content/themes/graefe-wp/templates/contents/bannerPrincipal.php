<?php
$args = array('post_type' => 'banners', 'posts_per_page' => 10);
$wp_query = new WP_Query( $args );
?>

<?php if ($wp_query->have_posts()) : ?>

	<!-- Banner Desktop -->
	<section id="sliderHome">

		<ul>
	
			<?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
				<li>
				
					<?php if(get_field('link')){ ?>
						<a href="<?php echo get_field('link') ?>" <?php if(get_field('banner_nova_guia')[0] === 'novaGuia'){ ?> target="_blank" <?php } ?>>
					<?php } ?>
							
						<?php getImagemObj(get_field('imagem_desktop')['sizes'], '2048x2048', get_the_title()) ?>				
							
					<?php if(get_field('link')){ ?>
						</a>
					<?php } ?>
					
				</li>
			
			<?php endwhile; ?>

		</ul>

	</section>
	<!-- /Banner Desktop -->

	<!-- Banner Mobile -->
	<section id="sliderHomeMobile">

		<ul>
	
			<?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
				<li>
				
					<?php if(get_field('link')){ ?>
						<a href="<?php echo get_field('link') ?>" <?php if(get_field('banner_nova_guia')[0] === 'novaGuia'){ ?> target="_blank" <?php } ?>>
					<?php } ?>
							
						<?php getImagemObj(get_field('imagem_mobile')['sizes'], '2048x2048', get_the_title()) ?>				
							
					<?php if(get_field('link')){ ?>
						</a>
					<?php } ?>
					
				</li>
			
			<?php endwhile; ?>

		</ul>

	</section>
	<!-- /Banner Mobile -->

<?php endif; ?>

<?php wp_reset_query(); ?>