<?php
function add_loading_script()
{
    echo '<script>
    document.documentElement.style.display = "none";
    document.addEventListener("DOMContentLoaded", function() {
        document.documentElement.style.display = "block";
    });
    </script>';
}

add_action('wp_head', 'add_loading_script');

// Add styles
function load_css()
{
    wp_register_style(
        "quasar-style",
        get_template_directory_uri() . "/assets/css/quasar.rtl.prod.css",
        [],
        false,
        "all"
    );

    wp_enqueue_style("quasar-style");

    wp_register_style(
        "material_ui",
        get_template_directory_uri() . "/assets/css/css.css",
        [],
        false,
        "all"
    );

    wp_enqueue_style("material_ui");

    wp_register_style(
        "main-style",
        get_template_directory_uri() . "/style.css",
        [],
        false,
        "all"
    );

    wp_enqueue_style("main-style");
}

add_action("wp_enqueue_scripts", "load_css");

// Add js
function load_js()
{
    wp_enqueue_script(
        "vue",
        get_template_directory_uri() . "/assets/js/vue.global.js",
        [],
        null,
        true
    );
    wp_enqueue_script(
        "quasar",
        get_template_directory_uri() . "/assets/js/quasar.umd.prod.js",
        ["vue"],
        null,
        true
    );
    wp_enqueue_script(
        "fa-quasar",
        get_template_directory_uri() . "/assets/js/fa-IR.umd.prod.js",
        [],
        null,
        true
    );
}

add_action("wp_enqueue_scripts", "load_js");

// Theme options
add_theme_support("menus");
add_theme_support("post-thumbnails");
// Crop images before render
// add_image_size("smallest", 300, 300, true);
// add_image_size("largest", 800, 800, true);
add_theme_support('appearance-tools');
add_theme_support('custom-spacing');
// add_theme_support('title-tag');


//Webida schema color
function wpacg_webida_admin_color_scheme()
{
    // Get the theme directory
    $theme_dir = get_stylesheet_directory_uri();

    // آژانس خلاقیت وبیدا
    wp_admin_css_color(
        'webida',
        __('آژانس خلاقیت وبیدا'),
        $theme_dir . '/assets/css/colors/webida-theme-color.css',
        array('#ce1340', '#ffffff', '#ce1340', '#d84266')
    );
}
add_action('admin_init', 'wpacg_webida_admin_color_scheme');


//Change WordPress admin dashboard font
function custom_admin_custom_font()
{
    wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/assets/fonts/index.css');

    echo '<style>body, #wpadminbar *:not([class="ab-icon"]), .wp-core-ui, .media-menu, .media-frame *, .media-modal *{font-family:"yekan-regular",sans-serif!important;}</style>';
}
add_action('admin_head', 'custom_admin_custom_font');

function custom_admin_custom_font_frontend_toolbar()
{
    if (current_user_can('administrator')) {
        wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/assets/fonts/index.css');

        echo '<style>#wpadminbar *:not([class="ab-icon"]){font-family:"yekan-regular",sans-serif!important;}</style>';
    }
}
add_action('wp_head', 'custom_admin_custom_font_frontend_toolbar');

function custom_admin_custom_font_login_page()
{
    if (stripos($_SERVER["SCRIPT_NAME"], strrchr(wp_login_url(), '/')) !== false) {
        wp_enqueue_style('custom-fonts', get_template_directory_uri() . '/assets/fonts/index.css');

        echo '<style>body{font-family:"yekan-regular",sans-serif!important;}</style>';
    }
}
add_action('login_head', 'custom_admin_custom_font_login_page');

function custom_admin_css()
{
    echo '<style>
        #titlediv #title-prompt-text {
            display: none;
        }
        #titlediv #title {
            background-color: #FFFFCC;
            border: 1px solid #E6DB55;
            font-family: "yekan-black";
            padding: 42px 16px;
            margin-top: 24px;
        }

        #edit-slug-box {

            margin-bottom: 16px;

        }

        .metabox-holder .postbox>h3, .metabox-holder .stuffbox>h3, .metabox-holder h2.hndle, .metabox-holder h3.hndle {
        
        font-family: "yekan-regular";
        }

        .wrap {
            margin: 24px 2px 0 24px;
        }

        .wrap .wp-heading-inline+.page-title-action {
            background-color:  #ce1340;
            border-radius: 4px;
            padding: 8px 16px;
            border: none;
            color: white;
        }

        .wrap .wp-heading-inline+.page-title-action:hover {
            background-color:  #eb2958;
            
        }

        .rtl h1, .rtl h2, .rtl h3, .rtl h4, .rtl h5, .rtl h6 {
            font-family: "yekan-boldest";
            color: #2d2d2d;
            fotnt-weight: 700
        }

        .wp-core-ui .button-link {
            color: #ce1340!important;
        }

        .wp-core-ui .button-link:hover {
            color: #eb2958!important;
        }

        .wp-core-ui .button-link:active {
            color: #eb2958!important;
        }

        #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu .wp-has-current-submenu .wp-submenu a:focus, #adminmenu .wp-has-current-submenu .wp-submenu a:hover, .folded #adminmenu .wp-has-current-submenu .wp-submenu a:focus, .folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:focus, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:focus, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
            color: yellow;
        }

        #adminmenu .wp-submenu li.current a:hover, #adminmenu .wp-submenu li.current a:focus, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a:hover, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a:focus, #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:hover, #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:focus {
            color: yellow;
        }

        #adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after, #adminmenu li.wp-has-submenu.wp-not-current-submenu:focus-within:after {
            border-left-color: yellow;
        }

        #__wp-uploader-id-1:active {
            color: #fff;
        }
    </style>';
}

function custom_admin_js()
{
    echo '<script>
        jQuery(document).ready(function($) {
            $("#title").attr("placeholder", "عنوان مطلب رو بنویس جیگر");
        });
    </script>';
}

add_action('admin_head', 'custom_admin_css');
add_action('admin_head', 'custom_admin_js');



// Register menus location
register_nav_menus([
    "top-menu" => "Top Menu Location",
    "footer-menu" => "Footer Menu Location",
]);

// Access upload SVG files
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = [];
    $new_filetypes["svg"] = "image/svg+xml";
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter("upload_mimes", "add_file_types_to_uploads");

//Jalali Calendar
require_once get_template_directory() .
    "/assets/jalali-date/jdatetime.class.php";

function convert_to_persian_date($gregorian_date)
{
    $dateObj = new jDateTime(true, true, "Asia/Tehran");
    return $dateObj->date("d F Y", strtotime($gregorian_date));
}

include_once('assets/like-post/like-metabox.php');
include_once('assets/like-post/like-post.php');

function enqueue_js_files()
{

    wp_register_script('like-post', get_template_directory_uri() . '/assets/like-post/like-post.js', array('jquery'), false, '1.0', true);
    wp_enqueue_script('like-post');

}
add_action('wp_enqueue_scripts', 'enqueue_js_files');

add_action('wp_ajax_process_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_process_contact_form', 'handle_contact_form');

function handle_contact_form()
{
    // Retrieve form data
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    // Compose email message with HTML formatting
    $to = 'shomalikhashayar@gmail.com';
    $subject = 'پیام از طرف فرم ارتباط با ما';
    $body = "<p style='font-size: 16px;'>نام و نام خانوادگی: $name</p><p style='font-size: 16px;'>شماره تماس: $phone</p><p style='font-size: 16px;'>متن پیام: $message</p>";

    // Set email content type to HTML
    $headers[] = 'Content-Type: text/html; charset=UTF-8';

    // Send email
    $mailed = wp_mail($to, $subject, $body, $headers);

    if ($mailed) {
        // Send success response
        wp_send_json_success('Form submitted successfully!');
    } else {
        // Send error response with the error message
        $error_message = error_get_last()['message'];
        wp_send_json_error('Error sending form data! Error: ' . $error_message);
    }
}


add_action('wp_head', function () {

    $Light = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Light.woff';
    $Regular = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Regular.woff';
    $Thin = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Thin.woff';
    $Medium = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Medium.woff';
    $Bold = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Bold.woff';
    $DemiBold = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-DemiBold.woff';
    $ExtraBold = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-ExtraBold.woff';
    $Heavy = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Heavy.woff';
    $Black = get_template_directory_uri() . '/assets/fonts/IRANYekanXFaNum-Black.woff';

    echo '
    <link rel="preload" href="' . $Light . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $Regular . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $Medium . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $Bold . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $DemiBold . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $ExtraBold . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $Heavy . '" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="' . $Black . '" as="font" type="font/woff" crossorigin>
    
    ';
});

