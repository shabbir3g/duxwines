<nav class="navbar navbar-expand-lg navbar-light header-top-fixed">
	<div class="container"> 

		 <?php $logo_upload = get_field('logo_upload','options'); 
				if($logo_upload): ?>
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logo_upload['url'] ?>" alt="" /></a>
		<?php  endif; ?>
	<div class="menu-collaps">
	<a href="javascript:void(0);" class="menu_icon"></a>

	<div id="menu">
		<?php $logo_upload = get_field('logo_upload','options'); 
				if($logo_upload): ?>
		<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_upload['url'] ?>" alt=""></a>
		<?php  endif; ?>
		<?php wp_nav_menu([
			'theme_location'	=> 'main-menu', 
			'fallback_cb'		=> 'default_menu',
		]); ?>
	  
	</div>
	</div>
  </div>
</nav>