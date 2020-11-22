<div class="search-box">
	<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
		<input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" placeholder="Pretraži web...">
		<button type="sumbit" class="search-button"><span><span class="icon-search"></span></span></button>
		<input type="hidden" name="post_type" value="posts" /> 
	</form>
</div>

