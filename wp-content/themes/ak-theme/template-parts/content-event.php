<div class="col-sm-3 p-0 m-3 rounded-3 border eventCol">
    <a href="<?php the_permalink() ?>" class="eventCell">
        <?php the_post_thumbnail('thumbnail', array(
            'class' => 'rounded'
        )); ?>
        <h3 class="mt-3 mb-0"> <?php the_title(); ?> </h3>


        <div class="excerpt">
            <?php the_excerpt() ?>
        </div>
        <div class="date mt-1 mb-2">
            <i class="far fa-calendar-check"></i>
            <?php
            print_r(get_field('data_rozpoczecia'));
            ?>
            <?php if (get_field('godzina_rozpoczecia')) : ?>
                <i class="far fa-clock"></i>
            <?php
                print_r(get_field('godzina_rozpoczecia'));
            endif;
            ?>
        </div>
    </a>
</div>