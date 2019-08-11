<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duxwines
 */

get_header(); ?>

	

	<header> 

      	<?php while(have_posts()): the_post(); ?>
      <div class="home-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>"> 
      	<?php endwhile; ?>
      
		<?php require_once('theme-menus.php'); ?>

		</div>
	</header>


	<section class="blog-page-section">
	<div class="container"> 
		<div class="row"> 
			<div class="col-md-12"> 
				<div class="blog-page"> 
					

					<?php while(have_posts()): the_post(); ?>

					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php echo wp_trim_words(get_the_content(),40,false); ?></p>
					<?php endwhile; ?>
				</div>
				
			</div>
		</div>
		
	</div>
	</section>


	

<?php get_footer();
