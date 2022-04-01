<!DOCTYPE HTML>
<html <?php language_attributes();?>>
    <head>
        <?php wp_head();?>
    
    	<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    	<title><?php bloginfo( );?></title>
    	<link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri(); ?>/style.css">
    </head>

    <body class="is-preload <?php body_class(); ?>">
	
	<?php wp_body_open();?>
	

	<div class= "site-header sticky-top py-4 ">	
		<?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
	</div>


	
					
		
		
		
	
	
