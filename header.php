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
<nav class="flex justify-center">

    <ul class="bg-stone-50 max-w-min">
    <?php
	    // On récupère la liste des menus
	    $menuLocations = get_nav_menu_locations();
	
	    // On récupère l'ID de notre menu principal
	    $menuID = $menuLocations['menu_principal'];
     
	    // On récupère les liens de ce menu
	    $menu = wp_get_nav_menu_items($menuID);
     
	    // On boucle dans les liens et on les affiche
	    foreach ( $menu as $navItem ) {
            echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
        }
    ?>
    </ul>
</nav>

<?php wp_body_open(); ?>