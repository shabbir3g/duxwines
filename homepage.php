<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duxwines
	
	Template Name: Home Page

 */

get_header(); ?>



<header> 

      	<?php $home_banner = get_field('home_banner'); 

			if($home_banner): ?>
      <div class="home-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo $home_banner['url'];?>"> 
      	<?php  endif; ?>
      

		<?php require_once('theme-menus.php'); ?>


		</div>
	</header>
      


	<section class="win-bottol-section">
	<div class="container"> 
		<div class="row"> 
			<div class="col-md-6"> 

		<?php $our_story_text = get_field('our_story_text'); 

			if($our_story_text): ?>

				<?php echo $our_story_text; ?>
				
				<?php  endif; ?>
			</div>
		</div>
		
		<?php $bottle_image = get_field('bottle_image'); 

			if($bottle_image): ?>
		<div class="win-bottol"> 
			<img src="<?php echo $bottle_image['url']; ?>" alt="">
		</div>

		</div>
	<div class="win-bottol-bg"></div>
	<?php  endif; ?>
	
	</section>

	<?php $our_wine_section_bg = get_field('our_wine_section_bg'); 

			if($our_wine_section_bg): ?>
	<section class="our-win-section parallax-window" data-parallax="scroll" data-image-src="<?php echo $our_wine_section_bg['url']; ?>">
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="our-win"> 
						<?php $our_wine_content = get_field('our_wine_content'); 

						if($our_wine_content): ?>

							<?php echo $our_wine_content; ?>
						
					<?php  endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php  endif; ?>
	<section class="wins-aus-area"> 

		<div class="container">

			<?php $wines_australia = get_field('wines_australia'); 
			if($wines_australia): ?> 
			<h2><?php echo $wines_australia; ?></h2>
			<?php  endif; ?>
			<div class="owl-carousel owl-theme">



				<?php $wines_australia_items = get_field('wines_australia_items'); 

				if($wines_australia_items):

				foreach($wines_australia_items as $wines_australia): ?>
			    <div class="item"> 

			    	<?php echo $wines_australia['wines_australia_single_item']; ?>
					
			    </div>
			    <?php endforeach; endif; ?>

			    


			</div>
		</div>
	</section>
	<section class="our-instagram-area"> 
		
		<div class="container-fluid">
			<?php $our_instagram_title = get_field('our_instagram_title'); 
			if($our_instagram_title): ?>  
			<h2><?php echo $our_instagram_title; ?></h2>
			<?php  endif; ?>
			<div class="row"> 
			
			<?php $instagram_shortcode = get_field('instagram_shortcode'); 
			if($instagram_shortcode): ?>  
				<?php echo do_shortcode("$instagram_shortcode"); ?>
			<?php  endif; ?>
			</div>
		</div>
	</section>

      

<?php get_footer();