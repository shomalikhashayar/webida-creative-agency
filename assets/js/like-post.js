document.addEventListener('DOMContentLoaded', function() {
  var likeBtns = document.querySelectorAll('.like-btn');

  likeBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
          var postID = this.getAttribute('data-post-id');
          var currentState = this.getAttribute('data-state');

          if (currentState === 'like') {
              handleLike(postID, 1); // Like action
              this.setAttribute('data-state', 'unlike');
          } else {
              handleLike(postID, -1); // Unlike action
              this.setAttribute('data-state', 'like');
          }
      });
  });

  function handleLike(postID, action) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
          if (this.readyState === XMLHttpRequest.DONE) {
              if (this.status === 200) {
                  var likeCount = document.querySelector('.like-count[data-post-id="' + postID + '"]');
                  if (likeCount) {
                      likeCount.textContent = this.responseText;
                  }
              } else {
                  console.error('There was a problem with the request.');
              }
          }
      };

      xhr.open('POST', ajax_object.ajax_url); // Use the WordPress AJAX URL
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
      xhr.send('action=handle_toggle_like&post_id=' + encodeURIComponent(postID) + '&action_type=' + encodeURIComponent(action));
  }

  // Fetch like count for posts that haven't been liked yet
  var notLikedPosts = document.querySelectorAll('.like-count[data-like-status="not-liked"]');
  notLikedPosts.forEach(function(post) {
      var postID = post.getAttribute('data-post-id');
      handleLike(postID, 0); // Set action_type as 0 to fetch the like count
  });
});
