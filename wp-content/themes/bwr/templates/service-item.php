<div class="col-sm-6 text-center">
    <article class="service-box-1 sr-button">
        <a href="<?= get_permalink() ?>">
        <img src="<?= get_the_post_thumbnail_url() ?>">
        <i class="wi-icon wi-icon-exp-s"></i>
        <h3><?= get_the_title() ?></h3>
        <p class="text-muted"><?= wp_trim_words(get_the_content(), 15) ?></p>
        </a>
    </article>
</div>