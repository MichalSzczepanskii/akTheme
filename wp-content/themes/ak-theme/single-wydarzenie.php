<?php
get_header();
?>


<article class="container-lg my-3 mb-5">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'event-page');
        }
    }
    ?>

</article>


<?php
get_footer();
?>