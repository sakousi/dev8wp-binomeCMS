<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>


<body <?php body_class();?>>
<main class="bg-gray-400 mx-64">
<nav>

    <ul class="flex bg-stone-50 max-w-min">
        <li>Accueil</li>
        <li>A propos</li>
        <li>Blog</li>
        <li>Contact</li>
    </ul>
</nav>

<?php wp_body_open(); ?>