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


    <meta name="viewport" content="width=device-width">
    
		<script src="<?php bloginfo('template_url'); ?>/fonts/fontsmoothie.min.js"></script>
		<link rel=stylesheet type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/Aharoni-Bold.css">

      

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.datepicker-<?php echo ICL_LANGUAGE_CODE ; ?>.js?ver=3.8.3"></script>
   
    <style type="text/css" media="screen">
	   @import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
  <link rel=stylesheet href="<?php bloginfo('template_url'); ?>/stylesheets/responsive.css" type="text/css" media="screen"/>  
</head>
<body oncontextmenu="return false" <?php body_class(); ?>>
  <script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
 
        

<div class="se-pre-con"></div>      
        

        
     	
       
