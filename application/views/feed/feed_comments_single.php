
<?php foreach ($com as $r) : ?>
  <?php
  $r->comment = $this->common->replace_user_tags($r->comment);
  ?>
  <!-- <div class="feed-comment-m clearfix" id="feed-comment-area-<?php echo $r->ID ?>">
    <div class="feed-comment-m-part1">
      <a href="#">
        <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->avatar ?>" class="user-icon">
      </a>
    </div>
    <div class="feed-comment-m-part2">
      <a href=""><?php echo $r->first_name ?> <?php echo $r->last_name ?></a> <?php echo $r->comment ?>
      <div class="comment-like-wrapper" id="<?php echo $r->ID ?>">
        <a class="comment-like-button <?php if ($r->commentlikeid) : ?>is-active<?php endif; ?>" id="comment-like-button-<?php echo $r->ID ?>" onclick="like_comment(<?php echo $r->ID ?>)">
          <i class="mdi mdi-heart bouncy"></i>

          <span class="like-overlay"></span>
        </a>

      </div>

      <div class="comment-item-for-re">
        <p class="small-text">
          <span class="" id="comment-like-<?php echo $r->ID ?>"><?php if ($r->likes > 0) : ?><span class="glyphicon glyphicon-thumbs-up" id=""></span> <?php echo $r->likes ?><?php endif; ?></span> <a href="javascript: void(0)" onclick="load_comment_replies(<?php echo $r->ID ?>)"><?php echo lang("ctn_480") ?> <span id="feed-reply-comments-<?php echo $r->ID ?>"><?php if ($r->replies > 0) : ?>(<?php echo $r->replies ?>)<?php endif ?></span></a> 
 <?php if ($r->userid == $this->user->info->ID || ($this->common->has_permissions(array("admin", "post_admin"), $this->user))) : ?>- <a href="javascript: void(0)" onclick="delete_comment(<?php echo $r->ID ?>)">Delete</a><?php endif; ?> - <?php echo $this->common->get_time_string_simple($this->common->convert_simple_time($r->timestamp)) ?>
        </p>
      </div>
      <div id="feed-comment-reply-<?php echo $r->ID ?>" class="feed-comment-reply">
        <?php echo lang("ctn_515") ?>
      </div>
    </div>
  </div> -->
  <div id="feed-post-com-<?php echo $r->ID ?>" class="card is-post" >
    <!-- Main wrap -->
    <div class="content-wrap">
      <!-- Post header -->
      <div class="card-heading" id="card-body">
        <!-- User meta -->
        <div class="user-block">
          <div class="image">
            <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->avatar ?>" data-demo-src="<?php echo base_url() ?>/assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
          </div>
          <div class="user-info">

            <a href=""><?php echo $r->first_name ?> <?php echo $r->last_name ?></a>

            <p class="feed-timestamp"><?php echo $this->common->get_time_string_simple($this->common->convert_simple_time($r->timestamp)) ?>
            </p>

          </div>
        </div>
      </div>
      <div class="card-body" id="card-body">
        <!-- Post body text -->
        <div class="post-text">
          <?php echo $r->comment ?>

        </div>


        <!-- Featured image -->
        <?php
        // Display all images in post
        // $images = $this->feed_model->feed_image_multipost($r->ID);
        // $script .= '$(".album-images-' . $r->ID . '").viewer();';
        // $sql = $this->db->last_query();
        // 	echo $sql;
        // 	exit(0);
        ?>
        <div class="post-image <?php echo $r->ID ?>">








        </div>



        <!-- video post -->
      </div>
      <div class="card-footer">
        <!-- Followers avatars -->
        <div class="likers-group">
        </div>
        <?php if ($r->userid == $this->user->info->ID || ($this->common->has_permissions(array("admin", "post_admin"), $this->user))) : ?>
        <div class="fab-wrapper is-share">
          <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" onclick="delete_comment(<?php echo $r->ID ?>)" data-modal="share-modal">
          <img src="<?php echo base_url() ?>assets/img/products/delete.svg">
          </a>
        </div>
        <?php endif; ?> 
       


        <div class="like-wrapper like-wrapper-com" id="<?php echo $r->ID ?>">
          <a class="like-button <?php if (isset($r->likes)) : ?>is-active<?php endif; ?>" id="like-button-<?php echo $r->ID ?>" onclick="like_feed_post(<?php echo $r->ID ?>)">
            <i class="mdi mdi-heart not-liked bouncy"></i>
            <i class="mdi mdi-heart is-liked bouncy"></i>
            <span class="like-overlay"></span>
          </a>
          <p class="span-like" id="feed-likes-<?php echo $r->commentlikeid ?>"> <?php echo $r->likes ?></p>



        </div>




        <div class="fab-wrapper is-comment" id="comment-msg">
          <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" onclick="load_comments(<?php echo $r->ID ?>)">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
            

          </a>
          <p id="feed-comments-<?php echo $r->ID ?>"> <?php echo $r->replies ?></p>
        </div>
        
       
      </div>
    </div>
    <div class="feed-comment-area" id="feed-comment-<?php echo $r->ID ?>">
    </div>
  </div>

<?php endforeach; ?>
<?php if ($post->comments > 5 && (isset($hide_prev) && !$hide_prev)) : ?>



<a href="javascript: void(0)" onclick="load_previous_comments(<?php echo $post->ID ?>, <?php echo $page + 5 ?>, this)" class="small-text"><?php echo lang("ctn_514") ?></a>
<?php endif; ?>