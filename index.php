<?php get_header();?>
		<section>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/hero.png" />
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  <section>
			  <h1><a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

			<?php the_content(); ?>
			  </section>
			<?php endwhile; else: ?>

											
						
		</section>
<?php get_footer(); ?>




