
<section class="newsletter-section bg-parallax bg-parallax-1">
    <div class="ctn-app container">
        <div class="col-sm-8">
            <h2>Newsletter</h2>
            <p>Feel free to place your Mail_ID and Subscribe to our Newsletter here. So that, you can receive our
                exiting Updates and Offers with no wait!</p>
        </div>
        <div class="col-sm-4">
            <form class="frm-mail">
                <input class="txt-mail" type="email" name="" placeholder="Email Address">
                <button class="btn-mail"><i class="fa fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</section>

<footer id="footer" class="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4><a href="#" title="">Social media</a></h4>
                    <p>Like, follow and share our social media pages.
                        Tag yourselves and share your pics with us!</p>
                    <ul class="list-social">
                        <li><a href="<?= get_option('bwr_settings_general')['facebook'] ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= get_option('bwr_settings_general')['Twitter'] ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= get_option('bwr_settings_general')['Instagram'] ?>" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">

                    <?php $openingHours = get_option('bwr_settings_opening_hours') ?>
                    <h4><a href="javascript:;" title="">Opening Hours</a></h4>
                    <p><span>Monday: </span><?= $openingHours['mon']?></p>
                    <p><span>Tuesday: </span><?= $openingHours['tue']?></p>
                    <p><span>Wednesday: </span><?= $openingHours['wed']?></p>
                    <p><span>Thursday: </span><?= $openingHours['thu']?></p>
                    <p><span>Friday: </span><?= $openingHours['fri']?></p>
                    <p><span>Saturday: </span><?= $openingHours['sat']?></p>
                    <p><span>Sunday: </span><?= $openingHours['sun']?></p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4><a href="#" title="">Our feed</a></h4>
                    <div style="margin-top: -10px; margin-left: -5px; margin-right: -5px;">
                    <?= do_shortcode("[instagram-feed num=9 cols=3]") ?>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h4><a href="javascript:;" title="">quick links</a></h4>
                    <?= wp_nav_menu(['menu_class' => 'nav-footer nav-scroll']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class=container"">
            <p class="copyright"> <a href="/" title="HairStyle">Bright White Room</a> © 2016. All Right Reserved.</p>
        </div>
    </div>
</footer>
<a class="btn-top" href="javascript:void(0)" title=""><i class="fa fa-chevron-up"></i></a>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/lib.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/plugin.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/start.js"></script>
<?= wp_footer() ?>
</body>
</html>
