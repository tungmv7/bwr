<?php get_header() ?>
<?php while (have_posts()) : the_post(); ?>

    <?php
    $currency = '£';
    $priceTable = '';
    $fromPrice = "From " . $currency;
    $minPrice = 0;
    // check if the repeater field has rows of data
    if (have_rows('service_items')):
        $thead = "<th>&nbsp;</th><th>S</th><th>SS</th><th>D</th><th>M</th>";
        $tmp = '';
        $tmp .= "<tbody>";
        $lastCol = false;
        // loop through the rows of data
        while (have_rows('service_items')) : the_row();
            $tmp .= "<tr>";
            $tmp .= "<td>" . get_sub_field('name') . "</td>";
            $tmp .= "<td>" . $currency . get_sub_field('s') . "</td>";
            $tmp .= "<td>" . $currency . get_sub_field('ss') . "</td>";
            $tmp .= "<td>" . $currency . get_sub_field('d') . "</td>";
            $tmp .= "<td>" . $currency . get_sub_field('m') . "</td>";
            if (get_sub_field('f') != '') {
                $tmp .= "<td>" . $currency . get_sub_field('f') . "</td>";
                $lastCol = true;
            }
            $tmp .= "</tr>";
            if ($minPrice == 0) {
                $minPrice = get_sub_field('s');
            }else if ($minPrice > (int) get_sub_field('s')) {
                $minPrice = get_sub_field('s');
            }
        endwhile;
        $tmp .= "</tbody>";
        if ($lastCol) {
            $thead .= "<th>F</th>";
        }
        $fromPrice .= $minPrice;
        $priceTable = "<table class='table table-responsive'><thead><tr>" . $thead . "</tr></thead>" . $tmp . "</table>";
    endif;
    ?>

    <section class="bg-parallax bg-parallax-3 block-top">
        <div class="container">
            <h1><?= the_title() ?></h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/#services">Services</a></li>
                <li class="active"><?= the_title() ?></li>
            </ol>
        </div>
    </section>
    <section class="bg-1 bottomPadding" style="padding-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="outer-img col-md-6">
                    <img class="" src="<?= get_template_directory_uri() ?>/images/people/people-1-b.png" alt="">
                </div>
                <div class="col-md-6">
                    <article class="service-choose">
                        <h2><?= the_title() ?></h2>
                        <p class="price"><span class="currency"><?= $fromPrice ?></span></p>

                        <div class="ctn-service">
                            <?= the_content() ?>
                        </div>
                        <div class="price-box-1" style="margin-bottom: 10px;">
                            <section>
                                <h3>Prices</h3>
                                <div>
                                    <?= $priceTable ?>
                                </div>
                            </section>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-parallax bg-parallax-1">
        <div class="ctn-app container">
            <div class="col-sm-8">
                <h2>Do You Like this Service?</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem </p>
            </div>
            <div class="col-sm-4">
                <a class="btn-style btn-m page-scroll" href="#appointment">Book Now</a>
            </div>
        </div>
    </section>
    <section id="appointment" class="bg-1 block-appoi">
        <img class="img-2 sr-img" src="<?= get_template_directory_uri() ?>/images/people/people-2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Appointments</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?= do_shortcode('[contact-form-7 id="27" title="appointment form" html_class="frm-1"]') ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer() ?>