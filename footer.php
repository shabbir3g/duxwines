<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duxwines
 */

?>


  <footer>
        <div class="footer-top"> 
			<div class="container"> 
				<div class="row">


				 <?php $footer_options = get_field('footer_options','options'); 
				if($footer_options): 
				foreach($footer_options as $footer_opt): ?>

					
					<div class="col-md-4">  

						<?php echo $footer_opt['single_footer_widget']; ?>
						
					</div>
					 <?php endforeach; endif; ?>
		
				</div>
			</div>
        </div>
        <div class="footer-bottom"> 
			<div class="container-fluid"> 
				<div class="row"> 
					 <?php $footer_copyright = get_field('footer_copyright','options'); 
				if($footer_copyright): echo $footer_copyright; ?>
					

				<?php endif; ?>
				</div>
			</div>
        </div>
      </footer>
	
	<?php wp_footer(); ?>
    </body>
</html>
