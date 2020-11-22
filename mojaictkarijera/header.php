<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Moja ICT karijera" />
		<meta name="keywords" content="programi, ict, gauss, obris, karijera, informatika, IT, programiranje, web, development, project menagment" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


	<div id="header-purple" class="container-full clearfix">
		<div id="header-white" class="container-full clearfix"></div>

			<div class="header container">

				<div class="header-logo clearfix">

					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png"></a>
				
				</div>

				<div class="cornered"></div>

				<a class="menutoggle"></a>
				<nav class="nav menumobile menuoff">

					<?php wp_nav_menu (

						array ('menu' => "Primary menu", 'container' => "false" )

					); ?>		
					
				</nav>

			</div>



		

	</div>

        
        

        
     	
       
