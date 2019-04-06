<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<title> <?php  echo bloginfo('name');?></title>
</head>

<body>

	<div class="main-header">
		<?php wp_nav_menu(array('menu' => 'Nome do Menu', 'container' => 'nav', 'container_class' => 'menu', 'menu_class' => 'menu-links')); ?>
      <h1><?php echo bloginfo('name'); ?></h1>
	</div>


<?php wp_head(); ?>

