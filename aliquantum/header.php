<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <?php wp_head(); ?>
	<!-- google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width">
</head>
<body <?php body_class(); ?>>
	<div class="fullPageWrap">
		<div class="wrapper">
			<div class="floatLFull langLog">
				<div class="contHalf floatL">
					<p class="disIB">
						<span class="sizeIcon floatL globe"></span>
						<select class="icon-chevron-down floatL" name="lang" id="langSelect">
							<option value="hr" selected>HR</option>
							<option value="en">EN</option>
						</select>
					</p>
					<p class="disIB">
						<span class="sizeIcon floatL headset"></span>
						<span>+38516442100</span>
					</p>
				</div>
				<div class="contHalf floatL alignR">
					<p class="disIB myAccountSection">
						<span class="sizeIcon floatL person"></span>
						<span class="myAccount">
							<?php _e('Moj račun', 'tema'); ?>
							<span class="icon-chevron-down"></span>
						</span>
					</p>
						<div class="loginContent hidden">
							<div class="loginForm">
								<span class="clearfix loginContentTitle">
									<span class="sectionTitle"><?php _e('Prijava', 'tema'); ?></span>
									<span class="sectionClose"></span>
								</span>
								<?php

									echo do_shortcode('[wppb-login]');

								?>

								<?php if( !(is_user_logged_in()) ) : ?>

									<span class="forgotPassLink">
										<a href="#">
											<?php _e('Zaboravljena lozinka?', 'tema'); ?>
										</a>
									</span>

									<span class="registerLink">
									<span><?php _e('Nemate korisnički račun?', 'tema'); ?></span>
										<a href="#">
											<?php _e('Registracija', 'tema'); ?>
										</a>
									</span>

								<?php endif; ?>
							</div>
							<div class="forgotPass hidden">
								<span class="clearfix loginContentTitle">
									<span class="sectionTitle"><?php _e('Promijeni Lozinku', 'tema'); ?></span>
								</span>
								<?php echo do_shortcode('[wppb-recover-password]'); ?>
							</div>
							<div class="registerForm hidden">
								<span class="clearfix loginContentTitle">
									<span class="sectionTitle"><?php _e('Promijeni Lozinku', 'tema'); ?></span>
									<span class="sectionClose"></span>
								</span>
								<?php echo do_shortcode('[wppb-register]'); ?>
							</div>
						</div><!-- end login content -->
					<p class="disIB cartContentLink">
						<span class="sizeIcon cart"></span>
						<span class="cartHead">Košarica</span>
						<span class="cartItemNumber">
							<?php /* Display number of items in cart and total */ 
								global $woocommerce; 

								echo sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);
							?>
						</span>
						<span class="icon-chevron-down"></span>
					</p>
					<div class="cartContent hidden">
						<span class="clearfix loginContentTitle">
							<span class="sectionTitle"><?php _e('Dodani proizvodi', 'tema'); ?></span>
							<span class="sectionClose"></span>
						</span>
						
						<!-- mini cart -->
					
						<?php dynamic_sidebar('SidebarTwo'); ?>
						<!-- end mini cart -->

					</div><!-- end cart content -->
				</div>
			</div><!-- end langLog -->
			<div class="floatLFull logoSearch">
				<div class="contThird logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
				</div>
				<div class="search">
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
						<div>
							<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Pretraži" />
							<input type="submit" id="searchsubmit" value="Search" class="btn" />
						</div>
					</form>
				</div>
			</div><!-- end logoSearch -->



			<a class="menutoggle"></a>
			<div class="clearfix clr mainMenu">
				<nav class="nav menumobile menuoff">
					<a href="<?php echo site_url(); ?>" class="homeLink">
						<span class="icon-home homeLink"></span>
					</a>
					<?php 
						$menuArgs = array('menu' => 'main-menu');
						wp_nav_menu($menuArgs);

					?>
				</nav>
			</div><!-- end mainMenu -->
		</div><!-- end wrapper -->