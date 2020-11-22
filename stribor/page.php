<?php
global $woocommerce; ?>




<?php get_header(); ?>











<?php if (is_cart()) :  

	 the_content() ?>

 <?php else : 

	 the_content() ?>
	
<?php endif; ?>






<?php get_footer(); ?>