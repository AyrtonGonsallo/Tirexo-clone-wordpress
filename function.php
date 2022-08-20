<?php 


	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Mise en place des images à la une
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );


	// Création des 2 menus
	register_nav_menus( array(
		'principal' => __( 'Principal'),
		'secondaire' => __( 'Secondaire'),
	) );

	// This theme allows users to set a custom background
	add_custom_background();

	

	


// Zones widgets

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Barre laterale',
'before_widget' => '<div class="module">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));




if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer gauche',
'before_widget' => '<div id="module_bottom1" class="module_bottom">',
'after_widget' => '</div><!--module_bottom1-->',
'before_title' => '<h2>',
'after_title' => '</h2>',
));



if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer milieu',
'before_widget' => '<div id="module_bottom2" class="module_bottom">',
'after_widget' => '</div><!--module_bottom2-->',
'before_title' => '<h2>',
'after_title' => '</h2>',
));


	

?>

