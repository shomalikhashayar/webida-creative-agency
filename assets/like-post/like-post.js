jQuery(document).ready(function ($) {
  $(".like").click(function () {
    var rel = $(this).attr("rel");

    var data = {
      data: rel,
      action: "like_callback",
    };

    $.ajax({
      type: "GET",
      dataType: "json",
      url: ajaxurl,
      data: data,
      success: function (response) {
        // console.log(response.likes);
        // console.log(response.status);

        // Update the like count in the span with class 'like-count'
        var likeCountSpan = $(".like-count");
        if (response.status == true) {
          likeCountSpan.text(response.likes);
          $(".like[rel=" + rel + "]").addClass("liked");
        } else {
          likeCountSpan.text(response.likes);
          $(".like[rel=" + rel + "]").removeClass("liked");
        }
      },
      error: function () {
        console.log("Error occurred during the AJAX request.");
      }
    });
  });
});
