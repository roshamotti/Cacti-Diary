<?php get_header();?>
		<section>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/hero.png" />
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  <section>
			  <h1><a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

			<?php the_content(); ?>
			  </section>
			<?php endwhile; else: ?>
			<!-- <?php if (have_posts()) : while (have_posts()): the_post();?>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.')?></p>
					<?php endif; ?>
					
					<section>
						<?php the_content();?>
												<!-- <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
												<p>We also make pancakes on the side.</p> 
											</section> -->
											
						
		</section>
<?php get_footer(); ?>




