<div>
    <header class="text-center">
    <div class="meta text-secondary mb-2">
            <span class="date">
            <?php 
                the_date();
            ?>
            </span>
        </div>
        <h2>
            <?php the_title(); ?>
        </h2>
       
        <?php         the_post_thumbnail('large', array(
        'class'=>'rounded img-thumbnail my-3'
    )); ?>
    </header>
    <div class="articleContainer">
        <?php
        the_content();
        ?>
        <div class="meta">
        <?php 
                the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>',"</span>")
            ?>
        </div>
    </div>
</div>


