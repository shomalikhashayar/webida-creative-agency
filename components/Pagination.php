<div class="pagination flex justify-center items-center q-gutter-sm" style="margin-bottom:90px">

    <?php
    $paginate_links = paginate_links(
        array(
            'prev_next' => false,
            'type' => 'array',
        )
    );

    if ($paginate_links) {
        foreach ($paginate_links as $link) {
            if (strpos($link, 'current') !== false) {
                echo "<q-btn dense round unelevated class='text-white bg-primary'>$link</q-btn>";
            } else {
                echo "<q-btn dense round unelevated>$link</q-btn>";
            }
        }
    }
    ?>

</div>