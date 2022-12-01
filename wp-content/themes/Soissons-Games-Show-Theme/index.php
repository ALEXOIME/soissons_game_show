<?php get_header(); ?>

<main>
    <?php if(have_posts()){

        while(have_posts()){

            the_post();

            ?> <h2><?php the_title_rss() ?></h2> <?php

        }

    } ?>
</main>

<?php get_footer(); ?>