<?php

/* Stylo da página de login */

function login_logo() { ?>
	<style type="text/css">
		body.login {
			background: #fff;
		}
		body.login div#login h1 a {
			background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>graefe/wp-content/uploads/2021/10/logo.png);
			background-size: 308px 138px;
			height: 138px;
    		width: 308px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );
?>