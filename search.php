<?php get_header(); ?>

<body <?php body_class(); ?>>
    <q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">>
        <div class="container">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>
                <?php
                // Check if there are search results
                $query = new WP_Query(
                    array(
                        's' => get_search_query(), // Get the search query
                        'post_type' => 'post', // Limit search to posts only
                        'posts_per_page' => -1, // Retrieve all matching posts
                        'post_status' => 'publish', // Retrieve only published posts
                        'orderby' => 'title', // Order results by title
                        'order' => 'ASC', // Order results in ascending order
                        'fields' => 'ids', // Retrieve only post IDs for performance
                        'sentence' => true, // Enable sentence-like searching
                        'search_title_only' => true, // Search only in post titles
                    )
                );


                if ($query->have_posts()):
                    ?>
                    <div class="container">
                        <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
                            <?php echo "نتایج جستجو برای: " . get_search_query(); ?>
                        </h1>

                        <?php
                        // Loop through the search results
                        while ($query->have_posts()):
                            $query->the_post();
                            // Display the post content or use template parts
                            // Example: the_title(), the_content(), or using template parts
                            // Example with template part:
                            // get_template_part('components/shared/PostCard');
                        endwhile;
                        ?>

                        <?php
                        // Include the template parts for post cards and pagination here, within the container
                        // Displaying post cards
                        get_template_part('components/shared/PostCard');

                        // Displaying pagination
                        get_template_part('components/shared/Pagination');
                        ?>

                    </div>
                    <?php
                else:
                    // If no results found, display a message
                    get_template_part('components/search/desktop/NothingFound');
                endif;
                wp_reset_postdata(); // Reset the query
                ?>
            </q-page>

        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
        <div class="container">
            <?php get_template_part('/layouts/mobile/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>
                <?php
                // Check if there are search results
                $query = new WP_Query(
                    array(
                        's' => get_search_query(), // Get the search query
                        'post_type' => 'post', // Limit search to posts only
                        'posts_per_page' => -1, // Retrieve all matching posts
                        'post_status' => 'publish', // Retrieve only published posts
                        'orderby' => 'title', // Order results by title
                        'order' => 'ASC', // Order results in ascending order
                        'fields' => 'ids', // Retrieve only post IDs for performance
                        'sentence' => true, // Enable sentence-like searching
                        'search_title_only' => true, // Search only in post titles
                    )
                );


                if ($query->have_posts()):
                    ?>
                    <div class="container">
                        <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
                            <?php echo "نتایج جستجو برای: " . get_search_query(); ?>
                        </h1>

                        <?php
                        // Loop through the search results
                        while ($query->have_posts()):
                            $query->the_post();
                            // Display the post content or use template parts
                            // Example: the_title(), the_content(), or using template parts
                            // Example with template part:
                            // get_template_part('components/shared/PostCard');
                        endwhile;
                        ?>

                        <?php
                        // Include the template parts for post cards and pagination here, within the container
                        // Displaying post cards
                        get_template_part('components/shared/PostCard');

                        // Displaying pagination
                        get_template_part('components/shared/Pagination');
                        ?>

                    </div>
                    <?php
                else:
                    // If no results found, display a message
                    get_template_part('components/search/mobile/NothingFound');
                endif;
                wp_reset_postdata(); // Reset the query
                ?>
            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>