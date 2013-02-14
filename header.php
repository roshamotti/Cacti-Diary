<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo();?> </title>
	<?php wp_head();?>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body <?php body_class($class)?>>
		<header>
			<a href='<?php the_permalink(); ?>'><h1> <?php bloginfo('name');?> </h1> </a>
		    <?php wp_nav_menu( array( 'menu' => 'Main Nav') ); ?>
		</header>