<?php
/* 
Template Name: Custom Page Template
*/
?>

<?php get_header(); ?>

<style>
    img {
        border-radius: 50%;
    }

    .border-top {
        border-width: 20px !important;
    }

    .bg-color-page {
        background-color: rgb(255, 254, 253);
    }

    @media (max-width: 798px) {
        .page-content {
            text-align: center;
        }
    }
</style>
<div class="container-fluid p-4"></div>
<div class="container-fluid pt-5 text-muted">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-md-12 col-lg-2"> </div>
                <div class="col-md-12 col-lg-8 border-top border-dark-subtle rounded-end pt-2 bg-color-page page-content" style="--bs-border-opacity: .5;">
                    <h1 class="p-1"><?php the_title() ?> </h1>
                    <?php the_content(); ?>
                </div>

                <div class="col-md-12 col-lg-2 pt-5">
                    <?php get_sidebar(); ?>
                </div>

            <?php endwhile; ?>

        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>