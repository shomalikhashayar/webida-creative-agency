<?php

// Add styles
function load_css()
{

    wp_register_style(
        'quasar-style',
        get_template_directory_uri() . '/css/quasar.rtl.prod.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('quasar-style');

    wp_register_style(
        'material_ui',
        get_template_directory_uri() . '/css/css.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('material_ui');

    wp_register_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');

// Add js
function load_js()
{

    wp_enqueue_script('vue', get_template_directory_uri() . '/js/vue.global.js', array(), null, true);
    wp_enqueue_script('quasar', get_template_directory_uri() . '/js/quasar.umd.prod.js', array(), null, true);
    wp_enqueue_script('fa-quasar', get_template_directory_uri() . '/js/fa.umd.prod.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

// Register menus location
register_nav_menus(
    array('top-menu' => 'Top Menu Location', 'footer-menu' => 'Footer Menu Location')
);

// Access upload SVG files
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

//Jalali Calendar
require_once(get_template_directory() . '/assets/jalali-date/jdatetime.class.php');

function convert_to_persian_date($gregorian_date)
{
    $dateObj = new jDateTime(true, true, 'Asia/Tehran');
    return $dateObj->date("d F Y", strtotime($gregorian_date));
}


/*=============================================
=            BREADCRUMBS			            =
=============================================*/

function the_breadcrumb()
{
    $delimiter = '<q-icon name="arrow_left" class="q-mx-xs" size="md" color="primary"></q-icon>'; // Delimiter between breadcrumbs
    $home = 'وبیدا'; // Text for the 'Home' link
    $show_current = true; // Display the current page title in breadcrumbs
    $before = '<span class="current">'; // Tag before the current page
    $after = '</span>'; // Tag after the current page

    echo '<div class="row items-center">';

    global $post;

    $homeLink = get_bloginfo('url');
    echo '<a href="' . $homeLink . '"class="text-primary text-weight-500 no-decoration">' . '<q-icon name="o_home" class="q-mr-xs" size="sm" color="primary"></q-icon>' . $home . '</a>' . $delimiter;

    if (is_category() || is_single()) {
        $category = get_the_category();
        if ($category) {
            $cat_id = $category[0]->cat_ID;
            echo $before . '<a href="' . get_category_link($cat_id) . '" class="text-primary no-decoration">' . '<q-icon name="o_category" class="q-mr-xs" size="sm" color="primary"></q-icon>' . $category[0]->name . '</a>';
        }
        echo $after . $delimiter;

        if (is_single()) {
            echo $before . '<div class="text-secondary text-weight-500">' . '<q-icon name="o_article" class="q-mr-xs" size="sm" color="secondary"></q-icon>' . get_the_title() . '</div>' . $after;
        }
    } elseif (is_page() && !$post->post_parent) {
        echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '" class="text-primary no-decoration">' . get_the_title($page->ID) . '</a>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) {
            echo $crumb . $delimiter;
        }
        echo $before . get_the_title() . $after;
    } elseif (is_404()) {
        echo $before . 'Error 404' . $after;
    }

    if (get_query_var('paged')) {
        echo ' (' . __('Page', 'text_domain') . ' ' . get_query_var('paged') . ')';
    }

    echo '</div>';
}


//TOC
function webida_TOC()
{
    $content = get_the_content();
    $pattern = '/<h2(.*?)>(.*?)<\/h2>/';
    preg_match_all($pattern, $content, $matches);

    $headings = array();

    if (!empty($matches[0])) {
        foreach ($matches[2] as $index => $heading) {
            $id = sanitize_title($heading); // Generate an ID from the heading text
            $headings[] = array(
                'id' => $id,
                'text' => $heading,
            );
            $content = str_replace($matches[0][$index], '<h2 id="' . $id . '">' . $matches[2][$index] . '</h2>', $content);
        }
    }

    // Convert $headings to JSON
    $headings_json = json_encode($headings);

    // Output the JSON for Vue to use
    //Desktop screen
    echo '<div id="headings-json" style="display: none;">' . $headings_json . '</div>';
    echo '<div class="table-of-contents">';
    echo get_template_part('components/TableOfContents');

    foreach ($headings as $heading) {
        echo '
            <div class="column">
                <div class="row items-center link-on-hover q-mb-sm q-mx-sm">
                    <q-icon name="circle" size="8px" class="q-mr-sm text-secondary"></q-icon>
                    <a class="no-decoration text-secondary text-body2 no-letter-spacing" href="#' . $heading['id'] . '">' . $heading['text'] . '
                        <q-tooltip :delay="700" class="text-white bg-secondary q-py-sm q-px-md text-body2">
                                ' . $heading['text'] . '
                        </q-tooltip>
                    </a>
                </div>
            </div>
        ';
    }

    echo '</div>';
    echo '</div>';
    echo '</q-slide-transition>
    </q-card-section>
</q-card>';
    echo '</div>';

    echo $content;

    // Add JavaScript and CSS for smooth scrolling and offset
    echo '
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var headings = JSON.parse(document.getElementById("headings-json").textContent);
        var offset = -70; // Adjust the offset as needed

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







