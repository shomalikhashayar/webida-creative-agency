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
        get_template_directory_uri() . "/assets/js/fa.umd.prod.js",
        [],
        null,
        true
    );
}

add_action("wp_enqueue_scripts", "load_js");

// Theme options
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_image_size("smallest", 300, 300, true);
add_image_size("largest", 800, 800, true);
add_theme_support('appearance-tools');
add_theme_support('custom-spacing');

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

/*=============================================
=            BREADCRUMBS			            =
=============================================*/

function the_breadcrumb()
{
    $delimiter = '<q-icon name="arrow_left" size="md" color="primary"></q-icon>'; // Delimiter between breadcrumbs
    $home = "وبیدا"; // Text for the 'Home' link
    $show_current = true; // Display the current page title in breadcrumbs
    $before = '<span class="current">'; // Tag before the current page
    $after = "</span>"; // Tag after the current page

    echo '<div class="items-center">'; // Removed the "row" class

    global $post;

    $homeLink = get_bloginfo("url");
    echo '<a href="' . $homeLink . '" class="text-primary text-weight-500 no-decoration items-center">' . '<q-icon name="o_home" class="q-mr-xs" size="sm" color="primary"></q-icon>' . $home . "</a>" . $delimiter;

    if (is_category() || is_single()) {
        $category = get_the_category();
        if ($category) {
            $cat_id = $category[0]->cat_ID;
            echo $before . '<a href="' . get_category_link($cat_id) . '" class="text-primary no-decoration items-center">' . '<q-icon name="o_category" class="q-mr-xs" size="sm" color="primary"></q-icon>' . $category[0]->name . "</a>";
        }
        echo $after . $delimiter;

        if (is_single()) {
            // Display an icon and wrap the post title in a <span> with items-center class
            echo $before . '<q-icon name="o_article" class="q-mr-xs" size="sm" color="secondary"></q-icon><span class="text-secondary text-weight-500 items-center">' . get_the_title() . '</span>' . $after;
        }
    }

    echo "</div>";
}


//TOC
function webida_TOC()
{
    $content = get_the_content();
    $pattern = "/<h2(.*?)>(.*?)<\/h2>/";
    preg_match_all($pattern, $content, $matches);

    $headings = [];

    if (!empty($matches[0])) {
        foreach ($matches[2] as $index => $heading) {
            $id = sanitize_title($heading); // Generate an ID from the heading text
            $headings[] = [
                "id" => $id,
                "text" => $heading,
            ];
            $content = str_replace(
                $matches[0][$index],
                '<h2 id="' . $id . '">' . $matches[2][$index] . "</h2>",
                $content
            );
        }
    }

    // Convert $headings to JSON
    $headings_json = json_encode($headings);

    // Output the JSON for Vue to use
    //Desktop screen
    echo '<div id="headings-json" style="display: none;">' .
        $headings_json .
        "</div>";
    echo '<div class="table-of-contents">';
    echo get_template_part("components/TableOfContents");

    foreach ($headings as $heading) {
        echo '
            <div class="column">
                <div class="link-on-hover q-mb-sm q-mx-sm">
                    <q-icon name="circle" size="8px" class="q-mr-sm text-secondary"></q-icon>
                    <a class="no-decoration text-secondary text-body2 no-letter-spacing" href="#' .
            $heading["id"] .
            '">' .
            $heading["text"] .
            '
                        <q-tooltip :delay="700" class="text-white bg-secondary q-py-sm q-px-md text-body2">
                                ' .
            $heading["text"] .
            '
                        </q-tooltip>
                    </a>
                </div>
            </div>
        ';
    }

    echo "</div>";
    echo "</div>";
    echo '</q-slide-transition>
    </q-card-section>
</q-card>';
    echo "</div>";

    echo $content;

    // Add JavaScript and CSS for smooth scrolling and offset
    echo '
<script>
document.addEventListener("DOMContentLoaded", function() {
    var headings = JSON.parse(document.getElementById("headings-json").textContent);
    var offset = -70; // Default offset for desktop screens

    // Check if the screen width is less than or equal to a certain value (e.g., 768px) for mobile screens
    if (window.innerWidth <= 768) {
        offset = -2; // Adjust the offset for mobile screens
    }

    headings.forEach(function(heading) {
        var link = document.querySelector("a[href=\'#" + heading.id + "\']");
        if (link) {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                var target = document.getElementById(heading.id);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - offset,
                        behavior: "smooth"
                    });

                    // Update the URL with the heading title
                    history.pushState({}, "", "#"+heading.id);
                }
            });
        }
    });
});

</script>
';
}



