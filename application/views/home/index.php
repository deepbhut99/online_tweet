<div class="stories-wrapper is-home">

  <!-- /html/partials/pages/stories/stories-sidebar.html -->
  <div class="stories-sidebar is-active">
    <div class="stories-sidebar-inner">
      <div class="user-block">
        <a class="close-stories-sidebar is-hidden">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </a>
        <div class="avatar-wrap">
          <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $this->user->info->avatar ?>" data-demo-src="" data-user-popover="0" alt="">


          <?php if ($this->user->info->avatar = "1") : ?>
            <div class="badge-online">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
          <?php else : ?>
            <div class="badge-offline">
             
            </div>
          <?php endif ?>

        </div>
        <h4>
          <a href="<?php echo site_url("profile/" . $this->user->info->username) ?>"><?php echo $this->user->info->first_name ?> <?php echo $this->user->info->last_name ?></a>
        </h4>
        <p><?php echo $this->user->info->country ?></p>
        <div class="user-stats">
          <div class="stat-block">
            <?php $fri_count = $this->user->info->friends;
            $fri_new = $this->common->get_fri_count($fri_count); ?>
            <span>Friends
            </span>
            <span><?php echo $fri_new; ?></span>
          </div>
          <div class="stat-block">
            <span>Profile Viewer</span>
            <span><?php echo $this->user->info->profile_view ?></span>
          </div>
        </div>
      </div>
      <div class="user-menu">
        <div class="user-menu-inner has-slimscroll">
          <div class="menu-block">
            <ul>
              <li <?php if ($type == 0) : ?>class="is-active" <?php endif; ?>>
                <a href="<?php echo site_url("home") ?>">
                 
                  <span><?php echo lang("ctn_481") ?></span>
                </a>
              </li>
              <!-- 1 num -->
              <li>
                <a href="<?php echo site_url("profile/" . $this->user->info->username) ?>">
                  
                  <span><?php echo lang("ctn_200") ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url("chat") ?>">
                 
                  <span><?php echo lang("ctn_482") ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url("point_system") ?>">
                  
                  <span><?php echo lang("ctn_171") ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url("user_settings") ?>">
                  
                  <span><?php echo lang("ctn_156") ?></span>
                </a>
              </li>
            </ul>
          </div>



          <div class="separator"></div>

          <div class="menu-block">
            <ul>
              <li>
                <a href="<?php echo site_url("profile/albums/" . $this->user->info->ID) ?>">
                  <i data-feather="send"></i>
                  <span><?php echo lang("ctn_483") ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url("pages/your") ?>">
                  <i data-feather="bar-chart-2"></i>
                  <span><?php echo lang("ctn_484") ?></span>
                </a>
              </li>
              <li <?php if ($type == 2) : ?>class="is-active" <?php endif; ?>>
                <a href="<?php echo site_url("home/index/2") ?>">
                  <i data-feather="settings"></i>
                  <span><?php echo lang("ctn_485") ?></span>
                </a>
              </li>
            </ul>
          </div>


          <?php if ($this->common->has_permissions(array("admin", "admin_members", "admin_payment", "admin_settings", "post_admin", "page_admin"), $this->user)) : ?>

            <div class="separator"></div>

            <div class="menu-block">
              <p class="sidebar-title"><?php echo lang("ctn_35") ?></p>
              <ul>
              <?php endif; ?>
              <?php if ($this->common->has_permissions(array("admin", "admin_members", "admin_payment", "admin_settings"), $this->user)) : ?>

                <li>
                  <a href="<?php echo site_url("admin") ?>">
                    
                    <span><?php echo lang("ctn_35") ?></span>
                  </a>
                </li>

              <?php endif; ?>
              <?php if ($this->common->has_permissions(array("admin", "post_admin"), $this->user)) : ?>
                <li <?php if ($type == 4) : ?>class="active" <?php endif; ?>>
                  <a href="<?php echo site_url("home/index/4") ?>">
                    
                    <span><?php echo lang("ctn_486") ?></span>
                  </a>
                </li>
              <?php endif; ?>
              <?php if ($this->common->has_permissions(array("admin", "page_admin"), $this->user)) : ?>
                <li href="<?php echo site_url("pages/all") ?>">
                  <a>
                   
                    <span><?php echo lang("ctn_487") ?></span>
                  </a>
                </li>
              <?php endif; ?>
              <?php if ($this->common->has_permissions(array("admin", "admin_members", "admin_payment", "admin_settings", "post_admin", "page_admin"), $this->user)) : ?>

              </ul>

            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Stories -->
  <div class="inner-wrapper">
    <a class="mobile-sidebar-trigger is-story-post is-home-v2">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </a>

    <!-- Story -->
    <div class="story-post-wrapper">
      <div class="story-post">
        <?php include(APPPATH . "views/feed/editor.php"); ?>

        <div id="home_posts">
        </div>
      </div>
    </div>

    <!--Story post sidebar-->
    <div class="story-post-sidebar">
      <div class="header">
        <h2><?php echo lang("ctn_527") ?></h2>
      </div>

      <div class="related-posts">
        <?php foreach ($users->result() as $r) : ?>
          <!--Related post-->
          <a href="<?php echo site_url("profile/" . $r->username) ?>" class="related-post">
            <img class="post-image" src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->avatar ?>" data-demo-src="" alt="">
            <div class="meta">
              <h3><?php echo $r->username ?> </h3>

              <div class="user-line">
                <span><?php echo $r->first_name ?> <?php echo $r->last_name ?></span>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="header">
        <h2><?php echo lang("ctn_528") ?></h2>
      </div>

      <div class="related-posts">
        <?php foreach ($pages->result() as $r) : ?>
          <?php
          if (!empty($r->slug)) {
            $slug = $r->slug;
          } else {
            $slug = $r->ID;
          } ?>
          <!--Related post-->
          <a href="<?php echo site_url("pages/view/" . $slug) ?>" <?php echo $r->name ?> class="related-post">
            <img class="post-image" src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->profile_avatar ?>" data-demo-src="" alt="">
            <div class="meta">
              <h3><?php echo $r->name ?></h3>

              <div class="user-line">
                <span><?php echo $r->members ?> Members</span>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
      <div class="header">
        <h2><?php echo lang("ctn_488") ?></h2>
      </div>
      <div class="related-posts">
        <?php if (isset($sidebar)) : ?>
          <?php echo $sidebar ?>
        <?php endif; ?>
        <?php include(APPPATH . "views/client/friends_bar.php") ?>
      </div>


    </div>

  </div>
</div>






<script type="text/javascript">
  var global_page = 0;
  var hide_prev = 0;



  $(document).ready(function() {
    load_posts();

  });

  function load_posts_wrapper() {
    load_posts();
  }





  <?php if ($type == 0) : ?>

    function load_posts() {
      $.ajax({
        url: global_base_url + 'feed/load_home_posts',
        type: 'GET',
        data: {},
        success: function(msg) {
          $('#home_posts').html(msg);
          $('#home_posts').jscroll({
            nextSelector: '.load_next'
          });

        }
      })
    }
  <?php elseif ($type == 1) : ?>

    function load_posts() {
      $.ajax({
        url: global_base_url + 'feed/load_hashtag_posts',
        type: 'GET',
        data: {
          hashtag: "<?php echo $hashtag ?>",
        },
        success: function(msg) {
          $('#home_posts').html(msg);
          $('#home_posts').jscroll({
            nextSelector: '.load_next'
          });
        }
      })
    }
  <?php elseif ($type == 2) : ?>

    function load_posts() {
      $.ajax({
        url: global_base_url + 'feed/load_saved_posts',
        type: 'GET',
        data: {},
        success: function(msg) {
          $('#home_posts').html(msg);
          $('#home_posts').jscroll({
            nextSelector: '.load_next'
          });
        }
      })
    }
  <?php elseif ($type == 3) : ?>
    var commentid = <?php echo $commentid ?>;
    var replyid = <?php echo $replyid ?>;

    function load_posts() {
      $.ajax({
        url: global_base_url + 'feed/load_single_post/<?php echo $postid ?>',
        type: 'GET',
        data: {},
        success: function(msg) {
          $('#home_posts').html(msg);
          if (commentid > 0) {
            // Load comment up
            load_single_comment(<?php echo $postid ?>, commentid, replyid);
          }
        }
      })
    }
  <?php elseif ($type == 4) : ?>

    function load_posts() {
      $.ajax({
        url: global_base_url + 'feed/load_all_posts',
        type: 'GET',
        data: {},
        success: function(msg) {
          $('#home_posts').html(msg);
          $('#home_posts').jscroll({
            nextSelector: '.load_next'
          });
        }
      })
    }
  <?php endif; ?>
</script>