<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom fixed-top">
            <div class="container-fluid text-center">
                <a class="navbar-brand text-dark pr-5" href="<?php echo home_url() ?>"><?php echo get_bloginfo() ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top_menu" aria-controls="top_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="top_menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'top_menu',
                        'menu_class' => 'mi-nav-lista navbar-nav ms-auto mb-2 mb-lg-0',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'top_menu',
                        'depth' => 1,  // 2 with dropdowns. 
                        'walker' => new WP_Bootstrap_Navwalker
                    ]);
                    ?>
                </div>
            </div>
        </nav>
    </div>