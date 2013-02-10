<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo();?> </title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<a href='<?php the_permalink(); ?>'><h1> <?php bloginfo('name');?> </h1> </a>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/hero.png" />
			<?php if (have_posts()) : while (have_posts()): the_post();?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.')?></p>
			<?php endif; ?>
			
			<section>
				<?php the_content();?>
										<!-- <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
										<p>We also make pancakes on the side.</p> -->
									</section>
						
		</section>
	
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>