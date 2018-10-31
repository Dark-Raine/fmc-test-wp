<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Adobe Typekit Fonts -->
    <script src="https://use.typekit.net/ucx0dgc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>

    <?php if (get_field('override_theme_colours', 'options')) : ?>

      <style>

        .primary-background { background: <?php echo the_field('primary_colour', 'options'); ?> !important; }
        .primary-background:before { background: <?php echo the_field('primary_colour_dark', 'options'); ?> !important; }
        .primary-underline:before { border-color:  <?php echo the_field('primary_colour_dark', 'options'); ?> !important; }
        .primary-colour { color: <?php echo the_field('primary_colour', 'options'); ?> !important; }
        .primary-border-top { border-top: 3px solid <?php echo the_field('primary_colour', 'options'); ?> !important; }
        .primary-border-bottom { border-bottom: 3px solid <?php echo the_field('primary_colour', 'options'); ?> !important; }
        .gform_wrapper input[type="submit"] { background: <?php echo the_field('primary_colour_dark', 'options'); ?> !important; }
        .border-bottom-primary { border-color: <?php echo the_field('primary_colour', 'options'); ?>; }

        .secondary-background { background: <?php echo the_field('secondary_colour', 'options'); ?> !important; }
        .secondary-background:before {background:  <?php echo the_field('secondary_colour_dark', 'options'); ?> !important; }
        .secondary-colour { color: <?php echo the_field('secondary_colour', 'options'); ?> !important; }

        .neutral-background { background: <?php echo the_field('neutral_colour', 'options'); ?> !important; }

        .header .nav-toggle::before {
          background: <?php echo the_field('primary_colour', 'options'); ?> !important;
          box-shadow: 0 13px 0 0 <?php echo the_field('primary_colour', 'options'); ?>, 0 26px 0 0 <?php echo the_field('primary_colour', 'options'); ?>;
        }

      </style>


    <?php endif; ?>

  </head>

  <body <?php body_class(); ?>>

    <?php $defaults = array(
        'container' => 'nav',
        'theme_location' => 'primary-menu',
        'menu_class' => 'nav-collapse'
      );
    ?>

    <header class="header">

      <div class="container container--header">
        <div class="logo">
          <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo the_field('header_logo', 'option'); ?>" />
          </a>
        </div>

        <?php wp_nav_menu($defaults); ?>

      </div>

    </header>
