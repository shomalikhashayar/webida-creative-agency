<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div class="breadcrumb q-my-lg">
            <div>
                <?php

                $delimiter = '<q-icon name="arrow_left" size="20px" color="primary"></q-icon>'; // Delimiter between breadcrumbs
                $home = "وبیدا"; // Text for the 'Home' link
                $show_current = true; // Display the current page title in breadcrumbs
                $before = '<span style="font-size:14px;" class="line-height-xs current">'; // Tag before the current page
                $after = "</span>"; // Tag after the current page
        
                echo '<div class="items-center link-on-hover">'; // Removed the "row" class
        
                global $post;

                $homeLink = get_bloginfo("url");
                echo '<a href="' . $homeLink . '" class="text-primary no-decoration link-on-hover items-center">' . '<q-icon name="o_home" class="q-mr-xs" size="20px" color="primary"></q-icon>' . $home . "</a>" . $delimiter;

                echo $before . '<a href="' . $homeLink . '/blog/" class="text-primary no-decoration items-center">' . '<q-icon name="o_local_library" class="q-mr-xs" size="20px" color="primary"></q-icon>' . 'بلاگ' . "</a>" . $after . $delimiter;

                if (is_single()) {
                    // Get the categories associated with the post
                    $categories = get_the_category($post->ID);

                    if ($categories) {
                        $category = $categories[0]; // Get the first category
        
                        echo $before . '<a href="' . get_category_link($category->term_id) . '" class="text-primary no-decoration items-center">' . '<q-icon name="o_category" class="q-mr-xs" size="xs" color="primary"></q-icon>' . $category->name . "</a>" . $after . $delimiter;
                    }

                    // Display an icon and wrap the post title in a <span> with items-center class
                    echo $before . '<q-icon name="o_article" class="q-mr-xs" size="xs" color="secondary"></q-icon><span class="text-secondary items-center">' . get_the_title() . '</span>' . $after;
                }

                echo "</div>";

                ?>
            </div>

        </div>
    <?php endwhile; endif; ?>