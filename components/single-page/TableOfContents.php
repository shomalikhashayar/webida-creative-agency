<?php $content = get_the_content();
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
echo '<q-card bordered class="no-shadow q-radius-sm q-my-lg" style="border: 2px solid var(--q-webida-secondary) !important;">
    <q-card-section class="row items-center justify-between text-secondary text-weight-600 text-body2 no-letter-spacing">
        <div class="row items-center"><q-icon size="lg" name="format_quote" color="primary" class="q-mr-xs"></q-icon>
            <span>دسترسی سریع به عناوین مقاله</span>
        </div>
        <q-btn @click="toggleTOC = !toggleTOC" round dense flat unelevated icon="expand_more" color="secondary"></q-btn>
    </q-card-section>
    <q-card-section class="q-pa-none">
        <q-slide-transition v-show="toggleTOC">
            <div class="q-px-md">
                <div class="q-pb-md">';


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
    var offset = -95; // Default offset for desktop screens

    // Check if the screen width is less than or equal to a certain value (e.g., 768px) for mobile screens
    if (window.innerWidth <= 768) {
        offset = -120; // Adjust the offset for mobile screens
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
' ?>