<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>

</head>

<body>

    <header class="pageHeader">
        <div class="container-lg">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            $alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true)
            ?>
            <a class="navbar-brand" href="<?php echo get_home_url() ?>">
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt ?>">
            </a>
        </div>
        <div class="searchContainer  mb-4 py-2">
            <div class="container-lg px-4 searchContainer navbar navbar-expand-xl navbar-dark">
                <nav class="collapse navbar-collapse" id="navbarText">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="nav navbar-nav text-white">%3$s</ul>',
                            'add_li_class' => 'nav-item',
                            'link-class' => 'nav-link',
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        )
                    );
                    ?>
                    <div class="ms-auto">
                        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" name="s" id="form1" class="form-control" />
                                    <label class="form-label visuallyhidden" for="form1">Search</label>
                                </div>
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </nav>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>