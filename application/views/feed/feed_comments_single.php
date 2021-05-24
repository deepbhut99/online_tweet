<?php foreach ($com as $r) : ?>
  <?php
  $r->comment  = $this->common->replace_user_tags($r->comment);
  $r->comment  = $this->common->replace_hashtags($r->comment);
  $r->comment  = $this->common->convert_smiles($r->comment);
  $script = '';


  ?>
  <div id="feed-post-com-<?php echo $r->ID ?>" class="card is-post">
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
        $images = $this->feed_model->feed_item_com_m_pi($r->imageid);
        $script .= '$(".album-images-' . $r->ID . '").viewer();';
        // $sql = $this->db->last_query();
        // 	echo $sql;
        // 	exit(0);
        ?>
        <div class="post-image <?php echo $r->ID ?>">
          <?php foreach ($images->result() as $key => $rr) : ?>

            <?php $count = count($images->result_object)  ?>
            <?php if (!empty($rr->file_name) &&  $count == 1) : ?>
              <a data-fancybox="post1" data-lightbox-type="comments" data-thumb="" href="" data-demo-href="">
                <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->file_name ?>" data-demo-src="" alt="<?php echo $rr->name . "<br>" . $rr->description ?>">
              </a>

              <!-- multi-post -->

            <?php elseif ($count > 1) : ?>

              <?php if (isset($rr->albumid)) : ?>
                <?php $r->albumid = $rr->albumid;
                $r->album_name = $rr->album_name; ?>
              <?php endif; ?>
              <li class="album-image">
                <?php if (isset($rr->file_name)) : ?>
                  <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->file_name ?>" width="140" alt="<?php echo $rr->name . "<br>" . $rr->description ?>">
                <?php endif; ?>

              </li>
            <?php endif; ?>
          <?php endforeach; ?>
          <?php if (isset($r->albumid)) : ?>
            <p class="small-text"><i><?php echo lang("ctn_523") ?>: <a href="<?php echo $url ?>"><?php echo $r->album_name ?></a></i></p>
          <?php endif; ?>
          <?php
          // Display all images in post
          $video = $this->feed_model->feed_item_com_m_pv($r->videoid);
          // $sql = $this->db->last_query();
          // 	echo $sql;
          // 	exit(0);
          ?>
          <?php if (isset($r->videoid)) : ?>
            <?php foreach ($video->result() as $key => $rrr) : ?>
              <?php if (!empty($rrr->file_name)) : ?>
                <div class="post-link is-video">
                  <!-- Link image -->
                  <div class="link-image">
                    <video width="100%" controls>
                      <?php if ($rrr->extension == ".mp4") : ?>
                        <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->file_name ?>" type="video/mp4">
                      <?php elseif ($rrr->extension == ".ogg" || $r->extension == ".ogv") : ?>
                        <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->file_name ?>" type="video/ogg">
                      <?php elseif ($rrr->extension == ".webm") : ?>
                        <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->file_name ?>" type="video/webm">
                      <?php endif; ?>
                      <?php echo lang("ctn_501") ?>
                    </video>

                  </div>
                  <!-- Link content -->
                <?php elseif (!empty($rrr->youtube_id)) : ?>
                  <div class="link-content">
                    <p><iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $rrr->youtube_id ?>" frameborder="0" allowfullscreen></iframe></p>
                  </div>
                </div>
              <?php endif; ?>

            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <!-- video post -->
      </div>
      <div class="card-footer" id="card-f-com">
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
          <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" onclick="load_comment_replies(<?php echo $r->ID ?>)">

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