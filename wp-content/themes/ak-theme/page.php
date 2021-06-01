<?php 
get_header();
?>


<article class="articleContainer">
    <h2><?php the_title(); ?></h2>
<?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
            get_template_part( 'template-parts/content', 'page' );

        }
    }
?>

</article>


<?php 
get_footer();
?>
    
