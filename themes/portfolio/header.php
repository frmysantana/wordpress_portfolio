<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <?php $post_count = get_post_count(); ?>
  <body id="site_content-js"
    >

    <header class="header">
      <?php echo wp_get_attachment_image(122, array('250', '250'), false, array("class" => "header__logo")); ?>
      <?php echo wp_get_attachment_image(115, 'heroSize', false, array("class" => "header__hero")); ?>
      <p class="header__greeting">Welcome!</p>
    </header>

    <nav class="nav">

      <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>

        <ul class="container navigation__background">
          <li class="navigation__item navigation__item--phone <?php if (is_page('Home')) echo 'navigation__item--current-page'; ?>">
            <a href="<?php echo site_url(); ?>" class="navigation__link">Home</a>
          </li>
          <li class="navigation__item navigation__item--phone <?php if (get_queried_object_id() == 23) echo 'navigation__item--current-page'; ?>">
            <a href="<?php echo site_url('/blog'); ?>" class="navigation__link">Projects</a>
          </li>
          <li class="navigation__item navigation__item--phone <?php if (get_queried_object_id() == 98) echo 'navigation__item--current-page'; ?>">
            <a href="<?php echo site_url('/contact'); ?>" class="navigation__link">Contact</a>
          </li>
          <li class="navigation__item navigation__item--phone">
            <a href="https://github.com/frmysantana" target="_blank" class="navigation__link">Github</a>
          </li>
          <li class="navigation__item navigation__item--phone">
            <a href="https://www.linkedin.com/in/fremy-santana-5a714696" target="_blank" class="navigation__link">LinkedIn</a>
          </li>
        </ul>
    </nav>