<?php

function theme_setup()
{

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(370, 250);

    // crop
    add_image_size("featured-project-image", 370, 250, true);

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'top_menu' => __('Primary Menu', 'bwr'),
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

}

add_action('after_setup_theme', 'theme_setup');

// Remove WP Version From Styles
add_filter('style_loader_src', 'my_remove_ver_css_js', 9999);
add_filter('script_loader_src', 'my_remove_ver_css_js', 9999);
function my_remove_ver_css_js($src)
{
    if (strpos($src, 'ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

// remove unused files
add_action('init', 'my_disable_embeds_init', 9999);
function my_disable_embeds_init()
{
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
        remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
        remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
        remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
        remove_action('wp_head', 'index_rel_link'); // index link
        remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
        remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'rest_output_link_wp_head');
        remove_action('template_redirect', 'rest_output_link_header', 11, 0);

    }
}

function getNews($postPerPage = 9, $currentPage = 1, $args = [], $type = 'post')
{
    $defaults = [
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => $postPerPage,
        'paged' => $currentPage,
        'tax_query' => []
    ];
    $args = wp_parse_args($args, $defaults);

    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) {
        return $my_query;
    } else {
        return [];
    }
}


add_action("admin_menu", "bwr_settings_menu");
add_action("admin_init", "bwr_settings_general_init");
add_action("admin_init", "bwr_settings_opening_hours_init");

function bwr_settings_menu()
{
    // top menu
    add_menu_page("BWR Settings", "BWR Settings", "manage_options", "bwr-settings-general", "bwr_settings_general");

    // sub menu
    add_submenu_page("bwr-settings-general", 'General', 'General', 'manage_options', 'bwr-settings-general', 'bwr_settings_general');
    add_submenu_page("bwr-settings-general", 'Opening Hours', 'Opening Hours', 'manage_options', 'bwr-opening-hours', 'bwr_settings_opening_hours');
}

/*
 * begin general
 */
function bwr_settings_general()
{
    ?>
    <div class="wrap">
        <form method="post" action="options.php">
            <?php
            settings_fields("bwrSettingGeneral");
            do_settings_sections("bwrSettingGeneral");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function bwr_settings_general_init()
{
    // define required values
    $name = "bwrSettingGeneral";
    $dbField = 'bwr_settings_general';
    $section = 'default';
    $prefix = "bwr_general_";

    register_setting($name, $dbField);

    add_settings_section($section, __('General', 'bwr'), $prefix . 'callback', $name);

    $generals = ['address' => 'Address', 'phone' => 'Phone', 'email' => 'Email', 'facebook' => 'Facebook', 'twitter' => 'Twitter', 'instagram' => 'Instagram'];
    $defaultValues = [
        'address' => '45 Balham High Road, London, SW12 9AN',
        'phone' => '0208 673 322', 'email' => 'brightwhiteroom@gmail.com',
        'facebook' => 'https://facebook.com/BrightWhiteRoom',
        'twitter' => 'https://twitter.com/@BrightWhiteRoom',
        'instagram' => 'https://www.instagram.com/brightwhiteroom'];

    foreach ($generals as $general => $label) {
        $value = !empty(trim(get_option($dbField)[$general])) ? get_option($dbField)[$general] : $defaultValues[$general];
        add_settings_field(
            $general, __($label, 'bwr'), $prefix . 'render', $name, $section, [$general, $value, $dbField]
        );
    }
}

function bwr_general_render($args)
{
    echo "<input type='text' name='" . $args[2] . "[" . $args[0] . "]' value='" . $args[1] . "' class='regular-text code'/>";
}

function bwr_general_callback()
{
    echo __('General information', 'bwr');
}

/*
 * end general
 */


/*
 * begin opening hours
 */
function bwr_settings_opening_hours()
{
    ?>
    <div class="wrap">
        <form method="post" action="options.php">
            <?php
            settings_fields("bwrSettingOpeningHours");
            do_settings_sections("bwrSettingOpeningHours");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function bwr_settings_opening_hours_init()
{
    // define required values
    $name = "bwrSettingOpeningHours";
    $dbField = 'bwr_settings_opening_hours';
    $section = 'default';
    $prefix = "bwr_opening_hours_";

    register_setting($name, $dbField);

    add_settings_section($section, __('General', 'bwr'), $prefix . 'callback', $name);

    $openingHours = ['mon' => 'Monday', 'tue' => 'Tuesday', 'wed' => 'Wednesday', 'thu' => 'Thursday', 'fri' => 'Friday', 'sat' => 'Saturday', 'sun' => 'Sunday'];
    $defaultValues = ['mon' => '12pm to 9pm', 'tue' => '10am to 9pm', 'wed' => '10am to 9pm', 'thu' => '10am to 9pm',
        'fri' => '10am to 8pm', 'sat' => '9am to 6pm', 'sun' => '11am to 5pm'];
    foreach ($openingHours as $openingHour => $label) {
        $value = !empty(trim(get_option($dbField)[$openingHour])) ? get_option($dbField)[$openingHour] : $defaultValues[$openingHour];
        add_settings_field(
            $openingHour, __($label, 'bwr'), $prefix . 'render', $name, $section, [$openingHour, $value, $dbField]
        );
    }
}

function bwr_opening_hours_render($args)
{
    echo "<input type='text' name='" . $args[2] . "[" . $args[0] . "]' value='" . $args[1] . "' class='regular-text code' />";
}

function bwr_opening_hours_callback()
{
    echo __('Opening Hours changes daily according to the day', 'bwr');
}

/*
 * end opening hours
 */

