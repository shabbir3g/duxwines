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
	
	Template Name: Wine Regions

 */

get_header(); ?>



<header> 

      	<?php $page_banner = get_field('page_banner'); 

			if($page_banner): ?>
      <div class="home-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo $page_banner['url'];?>"> 
      	<?php  endif; ?>
      

		<?php require_once('theme-menus.php'); ?>


		</div>
	</header>

	<section class="win-varieties-section">
	<div class="container"> 
		<div class="row"> 
			<div class="col-md-12"> 
			<?php $wine_regions_top_text = get_field('wine_regions_top_text'); 

			if($wine_regions_top_text): ?>
				<div class="regions-wines"> 
					<?php echo $wine_regions_top_text; ?>
					

				</div>
			<?php  endif; ?>
			</div>
		</div>
		
	</div>
	</section>
	<section class="win-region"> 
		<div class="container"> 
			
			<div class="owl-carousel owl-theme">

			<?php $wine_regions = get_field('wine_regions'); 

			if($wine_regions):

			foreach($wine_regions as $wine): ?>

			    <div class="item"> 

			    	<?php echo $wine['single_item']; ?>
					
			    </div>
			<?php endforeach; endif; ?>


			   
			    
			 </div>

			
			<a class="customNextBtn" href="javascript:avoid(0)"><i class="fas fa-chevron-right"></i></a>
			<a class="customPrevBtn" href="javascript:avoid(0)"><i class="fas fa-chevron-left"></i></a>

		</div>
	</section>




<?php get_footer();
