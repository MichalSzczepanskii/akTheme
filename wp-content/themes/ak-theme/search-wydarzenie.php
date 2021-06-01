<?php
get_header();
?>


<div class="container-lg">
    <h1> <?php wp_title(); ?></h1>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'event');
        }
    }
    ?>
    <?php

    $return = paginate_links(array(
        'prev_text'          => __('Poprzednie'),
        'next_text'          => __('Nastepne'),
        'type'               => 'list'
    ));
    $return = str_replace("<ul class='page-numbers'>", '<ul class="pagination m-3">', $return);
    $return = str_replace("<li><span", '<li class="page-item active"><span', $return);
    $return = str_replace("<li>", '<li class="page-item">', $return);
    $return = str_replace('page-numbers', 'page-link', $return);
    $return = str_replace('current', 'active', $return);
    echo $return;


    ?>



</div>


<?php
get_footer();
?>