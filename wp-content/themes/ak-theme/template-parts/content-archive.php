<article class="post">
    <div class="row colCenter">
        <?php if (has_post_thumbnail()) : ?>
            <div class="col-md-auto p-4">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('thumbnail', array(
                        'class' => 'img-thumbnail'
                    )); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="col-md p-4">

            <a class="titleLink" href="<?php the_permalink() ?>">
                <h3><?php the_title() ?></h3>
            </a>

            <div class="meta text-secondary mb-2">
                <?php the_time('F j, Y'); ?>
            </div>

            <div class="intro">
                <?php the_excerpt(); ?>
            </div>

            <a class="moreLink btn btn-primary" href="<?php the_permalink() ?>"> Czytaj dalej &rarr;</a>
        </div>
    </div>

</article>