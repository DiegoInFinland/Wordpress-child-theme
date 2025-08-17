<?php get_header(); ?>

<div class="container-fluid p-0 pb-3">
    <div class="presentation-cover">
        <h1> Category: <?php single_cat_title() ?></h1>
    </div>

    <div class="category-card p-5 text-center">
        <?php $categories = get_categories();
        if (! empty($categories)) {
            foreach ($categories as $category) {
                echo '<div class="category-content"> <a href="' . esc_url(get_category_link($category->term_id)) . '">' .
                    esc_html($category->name) . '</a> </div> ';
            }
        } else {
            echo '<p class="text-muted text-center">No categories found.</p>';
        }
        ?>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-2"></div>
        <div class="col-md-12 col-lg-8">

            <section class="d-flex flex-wrap gap-4 justify-content-center text-center">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="card text-white" style="width: 26rem;">

                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid card-img']); ?>
                            <?php else : ?>
                                <img src="..." class="card-img-top img-fluid card-img" alt="thumbnail">
                            <?php endif; ?>
                        </a>

                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="card-title"> <strong> <?php the_title(); ?> </strong> </h5>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </section>

            <div class="text-center">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« Previous'),
                    'next_text' => __('Next »'),
                ));
                ?>
            </div>
        </div>

        <div class="col-md-12 col-lg-2 p-5 text-center">
            <a href="https://github.com/DiegoInFinland" target="_blank"><i class="bi bi-github fs-1 left-panel"></i></a><br>
            <a href="https://x.com/D0bnoxious" target="_blank"><i class="bi bi-twitter fs-1"></i></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>