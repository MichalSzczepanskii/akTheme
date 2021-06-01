<div>
    <header class="text-center">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div class="col-md-auto">
            <?php the_post_thumbnail('large', array(
                'class' => 'rounded img-thumbnail my-3'
            )); ?>
        </div>

    </header>
    <div class="row">
        <div class="col-md text-justify">
            <?php
            the_content();
            ?>
        </div>
        <div class="col-md-auto">
            <div class="text-secondary mb-2 p-4 text-center localization px-5">
                <p>
                    <i class="far fa-calendar-check"></i> <strong>Data</strong> <br />
                    <?php
                    print_r(get_field('data_rozpoczecia'));
                    if (get_field('data_zakonczenia')) {
                        print_r(" - " . get_field('data_zakonczenia'));
                    }
                    ?>
                </p>
                <?php if (get_field('godzina_rozpoczecia')) : ?>
                    <p>
                        <i class="far fa-clock"></i> <strong>Czas</strong> <br />
                        <?php
                        print_r(get_field('godzina_rozpoczecia'));
                        if (get_field('godzina_zakonczenia')) {
                            print_r(" - " . get_field('godzina_zakonczenia'));
                        }
                        ?>
                    </p>
                <?php endif; ?>
                <?php if (get_field('lokalizacja')) : ?>
                    <p>
                        <i class="fas fa-map-marker"></i> <strong>Lokalizacja</strong> <br />
                        <?php print_r(get_field('lokalizacja'));
                        ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="meta">
            <?php
            the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', "</span>")
            ?>
        </div>
    </div>
</div>