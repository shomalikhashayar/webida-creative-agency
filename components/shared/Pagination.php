<div class="pagination flex justify-center items-center q-gutter-sm q-mb-xl">

    <?php
    $paginate_links = paginate_links(
        array(
            'prev_next' => false,
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