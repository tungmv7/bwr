<?php get_header() ?>

    <header class="header">
        <div class="header-content">
            <div class="container">
                <span class="top-title">Welcome To The</span>
                <h1 id="homeHeading">Hair Style Salon</h1>
                <p>Book An Appointments & We'll Take Care Of The Rest</p>
                <span class="line"></span>
                <a href="#about" class="btn-style btn-big page-scroll">Appointments</a>
            </div>
        </div>
    </header>

    <section id="about-us" class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <article class="service-box sr-icons">
                     <span class="outer-icon">
                     <i class="wi-icon wi-icon-exp"></i>
                     </span>
                        <h3>Sturdy Templates</h3>
                        <hr class="second">
                        <p class="text-muted">Consecteturi adipiscing elit, sed do eiusmod tempr porice incidi dunt ut
                            labore et dolore magna aliqua enim minim veniam</p>
                    </article>
                </div>
                <div class="col-sm-4 text-center">
                    <article class="service-box sr-icons">
                     <span class="outer-icon">
                     <i class="wi-icon wi-icon-pro"></i>
                     </span>
                        <h3>Professional styles</h3>
                        <hr class="second">
                        <p class="text-muted">Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            Neque porro quisquam ipsum quia dolor sit amet</p>
                    </article>
                </div>
                <div class="col-sm-4 text-center">
                    <article class="service-box sr-icons">
                     <span class="outer-icon">
                     <i class="wi-icon wi-icon-award"></i>
                     </span>
                        <h3>We have all 03 awards</h3>
                        <hr class="second">
                        <p class="text-muted">Ut enim ad minima veniam, quis nostrum exercita tionem corporis suscipit
                            laboriosam nisi ut ea commodi consequatur</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="statistic" class="statistic-section bg-parallax bg-parallax-1">
        <div class="container">
            <div class="row">
                <div class="count-box col-sm-3 col-sm-6">
                    <span>Our Total</span>
                    <h3>Finished Projects</h3>
                    <p class="counter">1059</p>
                </div>
                <div class="count-box col-sm-3 col-sm-6">
                    <span>Our Clients</span>
                    <h3>Happy Customers</h3>
                    <p class="counter">1057</p>
                </div>
                <div class="count-box col-sm-3 col-sm-6">
                    <span>We Have</span>
                    <h3>Questions Answered</h3>
                    <p class="counter">897</p>
                </div>
                <div class="count-box col-sm-3 col-sm-6">
                    <span>Total Time</span>
                    <h3>Hours Works</h3>
                    <p class="counter">4630</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-section bg-1" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Services</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <img class="img-1 sr-img" src="<?= get_template_directory_uri() ?>/images/people/people-1-b.png" alt="">
                <img class="img-2 sr-img" src="<?= get_template_directory_uri() ?>/images/people/people-2.png" alt="">
                <div class="col-md-8 col-md-offset-2"><div class="row">
                <?php
                    $viewAll = false;
                    $services = getNews(4, 1, [], 'service');
                    if ($services) {
//                        $first = true;
                        while ($services->have_posts()){
                            $services->the_post();
//                            if ($first) {
                                // $viewAll = get_permalink();
//                                $first = false;
//                            }
                            get_template_part('templates/service', 'item');
                        }
                    } else {
                        get_template_part('template/service', 'not-found');
                    }
                ?>
                <?php if ($viewAll !== false): ?>
                <p class="outer-btn text-center">
                    <a class="btn-style btn-m" href="<?= $viewAll ?>">View all now</a>
                </p>
                <?php endif; ?>
                </div></div>
            </div>
        </div>
    </section>

    <section class="bg-parallax bg-parallax-1">
        <div class="ctn-app container">
            <div class="col-sm-8">
                <h2>Do You Like Our Hairdresser?</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem </p>
            </div>
            <div class="col-sm-4">
                <a class="btn-style btn-m page-scroll" href="#appointment">Appointments</a>
            </div>
        </div>
    </section>

    <section id="meet-our-team" class="portfolio-section no-padding">
        <section class="bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Meet Our Team</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="team-box sr-icons">
                            <img src="<?= get_template_directory_uri() ?>/images/people/people-1.png">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-box sr-icons">
                            <img src="<?= get_template_directory_uri() ?>/images/people/people-2.png">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-box sr-icons">
                            <img src="<?= get_template_directory_uri() ?>/images/people/people-1.png">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="team-box sr-icons">
                            <img src="<?= get_template_directory_uri() ?>/images/people/people-3.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="bg-parallax bg-parallax-1">
        <div class="ctn-app container">
            <div class="col-sm-8">
                <h2>Join our team ?</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem </p>
            </div>
            <div class="col-sm-4">
                <a class="btn-style btn-m page-scroll" href="#contact-us">Contact Us</a>
            </div>
        </div>
    </section>

    <!--<section id="blog" class="blog-section" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Blog Posts</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                /*
                    $news = getNews(18, 1);
                    if ($news) {
                        while ($news->have_posts()){
                            $news->the_post();
                            get_template_part('templates/news', 'item');
                        }
                    } else {
                        get_template_part('template/news', 'not-found');
                    }
                */
                ?>
            </div>
        </div>
    </section>-->

    <section id="appointment" class="bg-1 block-appoi">
        <img class="img-2 sr-img" src="<?= get_template_directory_uri() ?>/images/people/people-3.png" alt="">
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

    <section class="bg-parallax bg-parallax-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Client Says</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slider slider-nav">
                <div><img src="<?= get_template_directory_uri() ?>/images/per-1.png"></div>
                <div><img src="<?= get_template_directory_uri() ?>/images/per-2.png"></div>
                <div><img src="<?= get_template_directory_uri() ?>/images/per-3.png"></div>
                <div><img src="<?= get_template_directory_uri() ?>/images/per-4.png"></div>
                <div><img src="<?= get_template_directory_uri() ?>/images/per-5.png"></div>
                <div><img src="<?= get_template_directory_uri() ?>/images/per-6.png"></div>
            </div>
            <div class="slider slider-for">
                <div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                    <h4>Vinh Nguyen</h4>
                    <span> - Clitent -</span>
                </div>
                <div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                    <h4>Hoolo Swain</h4>
                    <span> - Clitent -</span>
                </div>
                <div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                    <h4>Amy Stewart</h4>
                    <span> - Clitent -</span>
                </div>
                <div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                    <h4>Peter Thanh</h4>
                    <span> - Clitent -</span>
                </div>
                <div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                    <h4>Amy Stewart</h4>
                    <span> - City Zen -</span>
                </div>
                <div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunt.</p>
                    <h4>Amy Stewart</h4>
                    <span> - Mozila Fire -</span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us" class="contact-us-section bg-1" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact us</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <section class="block-contact">
                <div class="col-left">
                    <div class="inner-contact">
                        <h2>Contact form</h2>
                        <?= do_shortcode('[contact-form-7 id="26" title="Contact form 1" html_class="frm-2"]') ?>
                    </div>
                </div>
                <div class="col-right">
                    <?php $general = get_option('bwr_settings_general') ?>
                    <article class="box-address">
                        <i class="wi-icon wi-icon-address"></i>
                        <address><?= $general['address'] ?></address>
                    </article>
                    <article class="box-address">
                        <i class="wi-icon wi-icon-mail"></i>
                        <a href="mailto:<?= $general['email'] ?>" title=""><?= $general['email'] ?></a>
                    </article>
                    <article class="box-address">
                        <i class="wi-icon wi-icon-call"></i>
                        <a href="tel:<?= $general['phone'] ?>" title=""><?= $general['phone'] ?></a>
                    </article>
                </div>
            </section>
        </div>
    </section>

<?php get_footer() ?>