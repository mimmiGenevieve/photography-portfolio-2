<!DOCTYPE html>
<html lang="sv">
 <head>

 <!-- stylesheet -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" media="screen" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

 <!-- <link rel="shortcut icon" href="<hp echo get_bloginfo('template_directory'); ?>favicon.ico" type="image/x-icon">
 <link rel="icon" href="<hp echo get_bloginfo('template_directory'); ?>favicon.ico" type="image/x-icon"> -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
   <?php wp_head();?>

 </head>

 <body>

 <div class="page-wrap"> <!-- wrap div for whole page -->

 <div class="menu-wrap">
<div class="menuHeader">
<a class="menuHeaderText" href="<?php echo get_option('home'); ?>">
       <?php echo get_bloginfo( 'name' ); ?></a>

<span class="social">
<?php $instagram = get_option('instagram', $instagram_def);
 if ( $instagram){ ?> 
 <a href="<?php echo get_option('instagram'); ?>"> <img src="<?php bloginfo('template_directory'); ?>/images/Instagram.png" /> </a>
 <?php } ?>

 <?php $vsco = get_option('vsco', $vsco_def);
 if ( $vsco){ ?> 
 <a href="<?php echo get_option('vsco'); ?>"> <img src="<?php bloginfo('template_directory'); ?>/images/Vsco.png" /> </a>
 <?php } ?>
 </span>
</div>	 

<!-- some empty span for the hamburger on smaller devices -->
<div class="hamburger">
<div class="hamburger1"></div>
<div class="hamburger2"></div>
<div class="hamburger3"></div>
</div>

 <nav class="mainMenu"> <!-- main menu -->
<?php
	 
 wp_nav_menu( array(
    'theme_location' => 'primary',
    'container_class' => 'mainMenu' ));
    ?>

</nav> <!-- end of main menu -->

 </div> <!-- end of menu-wrap -->
 <div class="content"> <!-- wrap div for content -->
 <div class="grid gridContent">
    <div class="grid-sizer"></div>