<?php get_header(); ?>


<?php
    
    /*Template name: Prijava */

?>

<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        }
    });
});
</script>


			<?php get_template_part('template_parts/banners'); ?>

			<div class="prijava-wrap container clearfix">

				<h2><?php the_field('prijava_naslov'); ?></h2>
				<hr>

				<p><?php the_field('prijava_text'); ?></p>

				<div class="prijava-form container clearfix">
					<?php echo do_shortcode('[contact-form-7 id="345" title="Prijava form"]'); ?>
				</div>

				<div id="#fileupload" class="fileupload"></div>

			</div>
				









<?php get_footer(); ?>	