<?php get_header(); ?>

<!-- // Write a conditional statement that checks if get_field( 'include_hero' ) exists if get the Hero template (parts/hero.php) -->

<?php if(get_field( 'include_hero' )): ?>

<?php get_template_part('parts/', 'hero') ?>

<?php endif; ?>
    




<section class="area area--white area--pad-small">

    <div class="container container--align-center">
        <?php // Bonus points if you can output the resources title and text that is set using ACF ( Advanced custom fields ) in the website options area of the admin ?>
        <h2 class="area__title"><?php the_field('resources_title', 'options'); ?></h2>
        <p class="area__description"><?php the_field('resources_text', 'options'); ?></p>
    </div>

    <div class="container">

        <?php // return the latest three posts utilising the below html mark up 
        
        $args = array( 'numberposts' => '3' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){ echo '<a href="<?php  . get_permalink($recent["ID"]) . // permalink - link to the single post  ?>">',
            echo '<h4 class="resources-listing__title"><?php .   $recent["post_title"]. // output the post title ?></h4>';
        }
        ?>

            <div class="column column--third resources-listing">

               

				    <?php // output the post thumbnail url start ?>
                        <img class="resources-listing__thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                    <?php // output the post thumbnail url end ?>

                    <div class="resources-listing__details">
                        
                        <div class="resources-listing__stamp">
                            <span class="author"><?php echo get_the_author(); // output post author ?>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                            <?php echo get_the_date('F j, Y' );// output the post date ?>
                        </div>
                    </div>
                </a>
            </div>

    </div>

</section>

<?php get_footer(); ?>
