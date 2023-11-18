<a class="no-decoration" href="<?php the_permalink(); ?>">
  <q-card bordered style="width:260px; min-height:280px"
    class="on-hover-primary-1 full-height column justify-between post-card q-radius-sm no-shadow q-pa-md">

    <q-card-section class="q-pa-none">
      <?php if (has_post_thumbnail()): ?>
        <q-img class="q-mb-sm q-radius-xs" src="<?php the_post_thumbnail_url('smallest'); ?>" :ratio="4/3" alt=""
          height="130px"></q-img>
      <?php endif ?>
      <div class="row justify-between">
        <div style="margin-top:5px;" class="col text-weight-600 text-dark no-letter-spacing text-caption">
          <?php
          $post_date = get_the_date('Y-m-d');
          $persian_date = convert_to_persian_date($post_date);
          echo $persian_date;
          ?>
        </div>
        <div class="col-8">
          <div class="row q-gutter-xs items-center justify-end">
            <?php
            $categories = get_the_category();
            if ($categories) {
              foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                $category_name = esc_html($category->name);

                echo '<q-badge class="text-weight-600 text-caption-sm q-pa-sm q-radius-md" label="' . $category_name . '" color="primary" text-color="white"></q-badge>';
              }
            }
            ?>
          </div>
        </div>
      </div>
      <h3 class="text-body3 no-decoration text-weight-700 text-grey-8">
        <?php the_title(); ?>
      </h3>
    </q-card-section>
    <q-card-section class="q-pa-none">
      <div class="row items-center justify-between">
        <div class="text-weight-600 text-dark no-letter-spacing text-caption">
          <?php the_author(); ?>
        </div>
        <div class="row q-gutter-x-sm items-center">
          <div class="row q-gutter-x-xs items-center">
            <span class="text-dark">
              <?php $like_count = get_post_meta(get_the_ID(), 'like_count', true);
              ?>
              <span class="like-count" data-post-id="<?php the_ID(); ?>">
                <?php
                $like_count = get_post_meta(get_the_ID(), 'like_count', true);
                echo esc_html($like_count !== '' ? $like_count : '0'); // Display 0 if no likes
                ?>
              </span>
              <q-icon name="o_favorite" class="text-primary" size="xs"></q-icon>
          </div>
          <div class="row q-gutter-x-xs items-center">
            <span class="text-dark">{{ comment }}</span>
            <q-icon name="o_notes" class="text-dark" size="xs"></q-icon>
          </div>
        </div>
      </div>
    </q-card-section>
  </q-card>
</a>

<script>
  // Your JavaScript code for handling the like button
  // like-button.js

  document.addEventListener('DOMContentLoaded', function () {
    var likeBtns = document.querySelectorAll('.like-btn');

    likeBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var postID = this.getAttribute('data-post-id');
        if (!hasLiked(postID)) {
          handleLike(postID);
          setLikedCookie(postID);
        } else {
          alert('You have already liked this post.');
        }
      });
    });

    function handleLike(postID) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
          if (this.status === 200) {
            var likeCount = document.querySelector('.like-count');
            likeCount.textContent = this.responseText;
          } else {
            console.error('There was a problem with the request.');
          }
        }
      };

      xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send('action=handle_like&post_id=' + postID);
    }

    function hasLiked(postID) {
      var likedPosts = getLikedPosts(); // Get liked posts from the cookie
      return likedPosts.includes(postID);
    }

    function setLikedCookie(postID) {
      var likedPosts = getLikedPosts();
      likedPosts.push(postID);
      document.cookie = 'likedPosts=' + JSON.stringify(likedPosts) + '; path=/;';
    }

    function getLikedPosts() {
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        if (cookie.startsWith('likedPosts=')) {
          return JSON.parse(cookie.substring('likedPosts='.length, cookie.length));
        }
      }
      return [];
    }
  });

</script>