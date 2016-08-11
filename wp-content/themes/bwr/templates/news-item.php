<div class="col-sm-4">
    <article class="blog-box sr-contact">
        <a href="<?= get_permalink() ?>" title="<?php the_title_attribute() ?>"><img src="<?= get_the_post_thumbnail_url() ?>"></a>
        <h3><a href="<?= get_permalink() ?>" title="<?php the_title_attribute() ?>"><?= get_the_title() ?></a></h3>
        <ul class="date">
            <li>By <?= get_the_author() ?></li>
            <li><?= get_the_date() ?></li>
        </ul>
        <?= wp_trim_words(get_the_content(), 30) ?>
    </article>
</div>