<!-- output website header here -->
<?php get_header(); 

?>
<section class="area area--white area--pad">
    <div class="container">
        <h1><!-- output archive title --></h1>
    </div>

    <div class="container">

        <!-- loop through the posts here -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section class="column column--third resources-listing">
                <a href="<?php echo get_permalink(); ?>#output-the-link-to-the-single-post"><!-- set the href -->
                    <!-- output the posts thumbnail url start -->
                    <img class="resources-listing__thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?> http://placehold.it/330x175/C5C5C5/C5C5C5?text=IMG" />
                    <!-- thumbnail end -->
                    <div class="resources-listing__details">
                        <h4 class="resources-listing__title"><?php echo get_the_title(); ?><!-- output the post title here --></h4>
                        <div class="resources-listing__stamp">
                            <span class="author"><?php echo get_the_author(); ?><!-- Output the post author here --> | </span>
                            <?php echo get_post_time('F j, Y'); ?><!-- Output the post date here -->
                        </div>
                    </div>
                </a>
            </section>
            <div class="spacer spacer--thirds">&nbsp;</div>
        <?php endwhile; else: ?>

            <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
            <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

        <?php endif; ?>
        <!-- Loop ends -->

    </div>
    <?php endif; ?>
</section>

<!-- output website footer here -->
<?php get_footer(); ?>