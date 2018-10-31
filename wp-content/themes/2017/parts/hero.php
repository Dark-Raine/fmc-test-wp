<section class="hero clearfix" style="background-image: url('<?php echo the_field('hero_background_image'); ?>');">
  <div class="hero__container container container--hero">
    <div class="hero__content-wrapper">

      <h1 class="hero__title primary-underline"><?php echo the_field('hero_title'); ?></h1>
      <p class="hero__text"><?php echo the_field('hero_text'); ?></p>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        if (get_field('include_buttons')) :
          if (have_rows('buttons')) :
            while (have_rows('buttons')) : the_row(); ?>
              <a href="<?php echo the_sub_field('button_url'); ?>" class="button <?php echo the_sub_field('button_colour'); ?>-background">
                <?php echo the_sub_field('button_text'); ?>
              </a>
            <?php endwhile;
          endif;
        endif;
        endwhile; endif; ?>
    </div>
  </div>
</section>
