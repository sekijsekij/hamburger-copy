<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?></title>

  <?php 
  wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
  wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="p-contents">
    <main>
      <header class="l-header">
        <h1 class="l-header__logo"><a href="<?php echo home_url(); ?>">Hambuger</a></h1>
        <?php get_search_form(); ?>        
        <span class="l-header__menu-btn">Menu</span>
      </header>