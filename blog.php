<?php
/*
Template Name: Blog
*/
get_header();
?>

<body <?php body_class(); ?>>
    <q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
        <div class="container">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page class="container">
                <?php
                // Get the current page object
                $current_page = get_queried_object();
                if ($current_page) {
                    $page_title = $current_page->post_title; // Get the page title
                    echo "<h1>$page_title</h1>"; // Display the page title here
                }
                ?>
                <div class="post-container q-my-xl">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post', // Fetch posts
                        'posts_per_page' => 12, // Display 12 posts per page
                        'orderby' => 'date', // Order by date
                        'order' => 'DESC', // Show newest posts first
                        'paged' => $paged // Pagination
                    );

                    $blog_posts = new WP_Query($args);

                    if ($blog_posts->have_posts()):
                        while ($blog_posts->have_posts()):
                            $blog_posts->the_post(); ?>
                            <?php get_template_part('components/shared/desktop/PostCard'); ?>
                        <?php endwhile; ?>


                        <?php
                        wp_reset_postdata(); // Reset the post data
                    endif;
                    ?>
                </div>
                <!-- Pagination -->
                <div class="pagination flex justify-center items-center q-gutter-sm q-mb-xl">
                    <?php
                    $paginate_links = paginate_links(
                        array(
                            'total' => $blog_posts->max_num_pages,
                            'current' => $paged,
                            'prev_next' => false, // Change this to false to remove previous and next links
                            'type' => 'array',
                        )
                    );

                    if ($paginate_links) {
                        foreach ($paginate_links as $link) {
                            // Extract the URL from the link using regular expressions
                            preg_match('/href=["\']([^"\']+)["\']/', $link, $matches);
                            $url = $matches[1] ?? ''; // Get the URL from the first match
                    
                            if (strpos($link, 'current') !== false) {
                                // If the link is the current page, style it as active
                                echo "<q-btn dense round unelevated class='text-white bg-primary'>$link</q-btn>";
                            } else {
                                // Wrap the button in an anchor tag with the link URL
                                echo "<q-btn href=\"$url\" dense round unelevated>$link</q-btn>";
                            }
                        }
                    }
                    ?>
                </div>
            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>
</body>