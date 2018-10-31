<!-- output website header here -->
<?php get_header(); 

?>

<section class="area area--pad area--border-top">
    <div class="container resource-post">
        <h1 class="resource-post__title primary-underline"><?php echo get_the_title(); ?><!-- output the post title here --></h1>
        <div class="resource-post__content"><?php echo the_content(); ?><!-- Output the post content here --></div>
    </div>
</section>

<!-- bonus points if you can output a loop of related posts set in the post itself using ACF ( advanced custom fields ) -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $related_posts = get_field()

<section class="area area--white area--pad-small">

    <div class="container">
        <h2 class="area__title area__title--related-resources">Related Resources</h2>
    </div>

    <div class="container">
        <div class="column column--third resources-listing">
            <a href="#set-link-here"><!-- set the href -->
                <!-- output thumbnail start -->
                <img class="resources-listing__thumbnail" src="http://placehold.it/330x175/C5C5C5/C5C5C5?text=IMG" />
                <!-- output thumbnail end -->

                <div class="resources-listing__details">
                    <h4 class="resources-listing__title"><!-- output post title here --></h4>
                </div>
            </a>
        </div>
    </div>

</section>

<?php endwhile; else: ?>

<h2> No related posts!</h2>

<?php endif; ?>
<!-- end bonus -->


<!-- Output website footer here -->
<?php get_footer(); ?>