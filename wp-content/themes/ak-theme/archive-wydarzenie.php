<?php
get_header();
?>

<div class="container-lg my-3">
    <h1>
        <?php wp_title();  ?>
    </h1>
    <div class="row justify-content-center px-3">
        <?php
        if (have_posts()) {
            $post_count = 0;
            while (have_posts()) {
                if ($post_count > 0 && $post_count % 3 == 0) {
                    echo "</div><div class='row row justify-content-center px-3'>";
                }
                the_post();
                get_template_part('template-parts/content', 'event');
                $post_count++;
            }
        }
        ?>
    </div>
    <div class="ms-auto">

        <?php
        $return = paginate_links(array(
            'prev_text'          => __('Poprzednie'),
            'next_text'          => __('Nastepne'),
            'type'               => 'list'
        ));
        $return = str_replace("<ul class='page-numbers'>", '<ul class="pagination m-3 justify-content-center">', $return);
        $return = str_replace("<li><span", '<li class="page-item active"><span', $return);
        $return = str_replace("<li>", '<li class="page-item">', $return);
        $return = str_replace('page-numbers', 'page-link', $return);
        $return = str_replace('current', 'active', $return);
        echo $return;


        ?>
    </div>

</div>


<?php
get_footer();
?>