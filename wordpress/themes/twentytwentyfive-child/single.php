<?php get_header(); ?>

<div class="container-fluid pt-5 pb-2">
    <div class="post-cover">
        <h1><?php the_title(); ?></h1>
        <p class="text-muted p-0">Categories: <?php the_category(', ') ?> </p>
    </div>
</div>

<style>
    /* img {  width: 850; height: 350; } */
</style>

<div class="container-fluid pt-3 text-muted">
    <div class="row">
        <div class="col-md-12 col-lg-2 pt-2"> </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-12 col-lg-8 p-3">
                    <hr>
                    <p>By <b><a href="/about" style="color: black;"><?php the_author(); ?></a></b>, Updated: <?php the_date(); ?> </p>
                    <article class="p-3">

                        <?php the_content(); ?>

                    </article>
                    <?php
                    if (get_next_posts_link()) {
                        next_post_link();
                    }
                    if (get_previous_posts_link()) {
                        previous_post_link();
                    }
                    ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <hr>
            <?php if (comments_open() || get_comments_number()) {
                comments_template();
            } ?>

                </div>

                <div class="col-md-12 col-lg-2 pt-5">
                    <article>
                        <?php get_sidebar(); ?>
                    </article>
                </div>
    </div>
</div>


<?php get_footer(); ?>