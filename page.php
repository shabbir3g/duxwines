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
 */

get_header(); ?>



<header> 

      	<?php while(have_posts()): the_post(); ?>
      <div class="home-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>"> 
      	<?php endwhile; ?>
      

		<?php require_once('theme-menus.php'); ?>


		</div>
	</header>


	 
					

					<?php while(have_posts()): the_post(); ?>

					
					<p><?php the_content(); ?></p>
					<?php endwhile; ?>
				


	

<?php get_footer();

