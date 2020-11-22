		<div class="clearfix footerWrapper">
			<div class="wrapper">
				<div class="sectionTop">
					<?php
						
						wp_nav_menu( array(
						'menu' => "Footer Menu",
						'depth' => 3,
						'container' => false,)
						);
					?>
					<p class="contThird">
						<a href="#"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-linkedin2"></span></a>
					</p>
				</div>
				<div class="floatL clr sectionMiddle">
					&copy; 2016 Aliquantum Idea d.o.o.
				</div>
			</div>
		</div>
	</div><!-- end fullpage wrapper -->
	<?php wp_footer(); ?>
</body>
</html>

 