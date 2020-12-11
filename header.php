<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="<?php bloginfo('description')?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href ="<?php bloginfo('stylesheet_url'); ?>" rel ="stylesheet" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet" />
  
  <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet"/>
   

    <title><?php bloginfo('name') ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>

    
    </title>

     <?php wp_head(); ?>
</head>