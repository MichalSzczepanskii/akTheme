<?php
get_header();
?>


</div>

<article class="container-lg">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>

</article>

<?php

$today = date("Ymd");
$count = wp_count_posts('wydarzenie')->publish;
$args = array(
    'post_type' => 'wydarzenie',
    'posts_per_page' => 3,
    'meta_query' => array(
        'relation' => 'AND',
        'event_start_date' => array(
            'key' => 'data_rozpoczecia',
            'value' => $today,
            'compare' => '>='
        ),
        'event_start_time' => array(
            'key' => 'godzina_rozpoczecia',
            'compare' => 'EXISTS'
        )
    ),
    'orderby' => array(
        'event_start_date' => 'ASC',
        'event_start_time' => 'ASC'
    )
);
$loop = new WP_Query($args);
if ($loop->have_posts()) :
?>


    <div class="container-lg">
        <h2 class="fpTitle">Wydarzenia</h2>
        <div class="row justify-content-center px-3">
            <?php
            while ($loop->have_posts()) : $loop->the_post();
                get_template_part('template-parts/content', 'event');
            ?>


            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>


<?php endif; ?>

<div class="container-lg my-4">
    <h2 class="fpTitle">Aktualności</h2>
    <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query('posts_per_page=5'); ?>
    <?php
    // Start our WP Query
    while ($the_query->have_posts()) : $the_query->the_post();
        // Display the Post Title with Hyperlink
        get_template_part('template-parts/content', 'archive');
    ?>

    <?php
    // Repeat the process and reset once it hits the limit
    endwhile;
    wp_reset_postdata();
    ?>
</div>

<?php
get_footer();
?>