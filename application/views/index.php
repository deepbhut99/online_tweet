<div class="login-wrapper columns is-gapless">
  <!--Left Side (Desktop Only)-->
  <div class="column is-6 is-hidden-mobile hero-banner">
    <div class="hero is-fullheight is-login">
      <div class="hero-body">
        <div class="container">
          <div class="left-caption">


            <!-- pinal nu card -->

            <div class="card mt-5" id="card-login">
              <?php $users = $this->login_model->get_all_feed(1, 1);
              //  $sql = $this->db->last_query();
              //                       echo $sql;
              //                       exit(0);

              foreach ($users->result() as $rr) :


                $rr->content = $this->common->replace_user_tags($rr->content);
                $rr->content = $this->common->replace_hashtags($rr->content);
                $rr->content = $this->common->convert_smiles($rr->content);
                $script = '';


                // $sql = $this->db->last_query();
                // echo $sql;
                // exit(0);

              ?>
                <?php if (!empty($rr->share_id)) : ?>

                  <div id="feed-post-<?php echo $rr->ID ?>" class="card is-post">
                    <!-- Main wrap -->
                    <div class="content-wrap">
                      <!-- Post header -->
                      <div class="card-heading">
                        <!-- User meta -->
                        <div class="user-block">
                          <div class="image">
                            <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->avatar ?>" data-demo-src="<?php echo base_url() ?>/assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                          </div>
                          <div class="user-info">
                            <?php if (isset($rr->username)) : ?>
                              <p><?php echo $rr->first_name ?> <?php echo $rr->last_name ?></p>
                              <!-- <span class="time">July 26 2018, 01:03pm</span> -->
                            <?php endif; ?>
                          </div>
                        </div>
                        <!-- Right side dropdown -->
                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->

                      </div>
                      <!-- /Post header -->

                      <!-- Post body -->
                      <div class="card-body">
                        <?php

                        $s_id = $rr->share_id;
                        $page = intval($this->input->get("page"));


                        $rr_n = $this->login_model->get_single_feed($s_id, $page, 1);
                        ?>
                        <?php foreach ($rr_n->result() as $rrr) : ?>

                          <?php
                          $rrr->content = $this->common->replace_user_tags($rrr->content);
                          $rrr->content = $this->common->replace_hashtags($rrr->content);
                          $rrr->content = $this->common->convert_smiles($rrr->content);
                          $script = '';


                          ?>
                          <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                              <!-- Post header -->
                              <div class="card-heading">
                                <!-- User meta -->
                                <div class="user-block">
                                  <div class="image">
                                    <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->avatar ?>" data-demo-src="<?php echo base_url() ?>/assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                  </div>
                                  <div class="user-info">
                                    <?php if (isset($rrr->username)) : ?>
                                      <p><?php echo $rr->first_name ?> <?php echo $rrr->last_name ?></p>
                                      <!-- <span class="time">July 26 2018, 01:03pm</span> -->
                                    <?php endif; ?>
                                  </div>
                                </div>
                                <!-- Right side dropdown -->
                                <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->

                              </div>
                              <!-- /Post header -->

                              <!-- Post body -->
                              <div class="card-body">
                                <!-- Post body text -->
                                <div class="post-text">
                                  <?php echo $rrr->content ?>
                                  <?php if ($rrr->site_flag) : ?>
                                    <?php foreach ($sites->result() as $site) : ?>


                                      <div class="feed-url-spot clearfix">
                                        <div class="pull-left feed-url-spot-image">
                                          <?php if ($site->image) : ?>
                                            <img src="<?php echo $site->image ?>" width="100%">
                                          <?php endif; ?>
                                        </div>
                                        <p><a href="<?php echo $site->url ?>"><?php echo $site->title ?></a></p>
                                        <p><?php echo $site->description ?></p>
                                      </div>



                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                </div>

                                <?php if ($rrr->template == "event") : ?>
                                  <div class="editor-event">
                                    <span class="glyphicon glyphicon-calendar big-event-icon"></span>
                                    <p><strong><a href="<?php echo site_url("pages/view_event/" . $rrr->eventid) ?>"><?php echo $rr->event_title ?></a></strong></p>
                                    <p><?php echo $rr->event_description ?></p>
                                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $rrr->event_start ?> ~ <?php echo $rr->event_end ?> </p>
                                  </div>


                                <?php endif; ?>
                                <!-- Featured image -->
                                <?php
                                // Display all images in post
                                $images = $this->login_model->feed_image_multipost($rrr->ID);
                                $script .= '$(".album-images-' . $rrr->ID . '").viewer();';
                                // $sql = $this->db->last_query();
                                // 	echo $sql;
                                // 	exit(0);
                                ?>
                                <div class="post-image <?php echo $rrr->ID ?>">

                                  <?php foreach ($images->result() as $key => $rrrr) : ?>

                                    <?php $count = count($images->result_object)  ?>
                                    <?php if (!empty($rrrr->file_name) &&  $count == 1) : ?>
                                      <a data-fancybox="post1" data-lightbox-type="comments" data-thumb="" href="" data-demo-href="">
                                        <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrrr->file_name ?>" data-demo-src="" alt="<?php echo $rrrr->name . "<br>" . $rrrr->description ?>">
                                      </a>

                                      <!-- multi-post -->

                                    <?php elseif ($count > 1) : ?>

                                      <?php if (isset($rrrr->albumid)) : ?>
                                        <?php $rr->albumid = $rrrr->albumid;
                                        $rrr->album_name = $rrrr->album_name; ?>
                                      <?php endif; ?>
                                      <li class="album-image" id="album-image-share">
                                        <?php if (isset($rrrr->file_name)) : ?>
                                          <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrrr->file_name ?>" width="140" alt="<?php echo $rrrr->name . "<br>" . $rrrr->description ?>">
                                        <?php endif; ?>

                                      </li>
                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                  <?php if (isset($rrr->albumid)) : ?>

                                    <p class="small-text"><i><?php echo lang("ctn_523") ?>: <a href="<?php echo $url ?>"><?php echo $rrr->album_name ?></a></i></p>

                                  <?php endif; ?>


                                  <?php if (isset($rrr->videoid)) : ?>
                                    <div class="post-link is-video">
                                      <?php if (!empty($rrr->video_file_name)) : ?>

                                        <!-- Link image -->
                                        <div class="link-image">
                                          <video width="100%" controls>
                                            <?php if ($rrr->video_extension == ".mp4") : ?>
                                              <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->video_file_name ?>" type="video/mp4">
                                            <?php elseif ($rrr->video_extension == ".ogg" || $rrr->video_extension == ".ogv") : ?>
                                              <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->video_file_name ?>" type="video/ogg">
                                            <?php elseif ($rrr->video_extension == ".webm") : ?>
                                              <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->video_file_name ?>" type="video/webm">
                                            <?php endif; ?>
                                            <?php echo lang("ctn_501") ?>
                                          </video>

                                        </div>
                                        <!-- Link content -->
                                      <?php elseif (!empty($rrr->youtube_id)) : ?>
                                        <div class="link-content">
                                          <p><iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $rr->youtube_id ?>" frameborder="0" allowfullscreen></iframe></p>
                                        </div>

                                      <?php endif; ?>
                                    </div>



                                  <?php endif; ?>


                                </div>



                                <!-- video post -->
                              </div>
                              <!-- /Post body -->

                              <!-- Post footer -->
                              <div class="card-footer">
                                <!-- Followers avatars -->
                                <div class="likers-group">
                                </div>
                                <!-- Followers text -->
                                <div class="likers-text">
                                  <p>
                                  <p> and <?php echo $rrr->likes ?> more liked</p>
                                  </a>

                                  </p>

                                </div>
                                <!-- Post statistics -->
                                <div class="social-count">
                                  <div class="likes-count">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                      <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>

                                    <span class="span-like" id="feed-likes-share-<?php echo $rrr->ID ?>"> <?php echo $rrr->likes ?></span>


                                  </div>


                                  <div class="comments-count">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                      <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                    </svg>
                                    <span> <span id="feed-comments-share-<?php echo $rrr->ID ?>"> <?php echo $rrr->comments ?></span></span>

                                  </div>
                                  <div class="shares-count">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link-2">
                                      <path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path>
                                      <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                    <span><span id="feed-share-<?php echo $rrr->ID ?>"><?php echo $rrr->share_count ?></span></span>
                                  </div>


                                </div>
                              </div>
                              <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #2 comments -->

                            <!-- /Post #2 comments -->
                          </div>
                        <?php endforeach; ?>



                      </div>
                      <div class="card-footer">
                        <!-- Followers avatars -->
                        <div class="likers-group">
                        </div>
                        <!-- Followers text -->


                        <!-- Post statistics -->

                        <div class="social-count">
                          <div class="likes-count">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>

                            <span class="span-like" id="feed-likes-<?php echo $rr->ID ?>"> <?php echo $rr->likes ?></span>


                          </div>


                          <div class="comments-count">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                            <span> <span id="feed-comments-<?php echo $rr->ID ?>"> <?php echo $rr->comments ?></span></span>
                          </div>
                          <div class="shares-count">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link-2">
                              <path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path>
                              <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                            <span id="feed-share-<?php echo $rr->ID ?>"><?php echo $rr->share_count ?></span>
                          </div>


                        </div>
                      </div>

                    </div>



                  </div>






                <?php else : ?>
                  <div id="feed-post-login">
                    <div id="feed-post-1" class="card is-post">
                      <!-- Main wrap -->

                      <div class="content-wrap">
                        <!-- Post header -->
                        <div class="card-heading">
                          <!-- User meta -->
                          <div class="user-block">
                            <div class="image">
                              <img class="login-avtar" src="<?= base_url('images/favicon/favicon.ico') ?>" alt="" height="50" width="50">
                            </div>

                            <div class="user-info">
                              <?php if (isset($rr->username)) : ?>
                                <p><?php echo $rr->first_name ?> <?php echo $rr->last_name ?></p>
                                <!-- <span class="time">July 26 2018, 01:03pm</span> -->
                              <?php endif; ?>
                            </div>
                          </div>
                          <!-- Right side dropdown -->
                          <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->

                        </div>
                        <!-- /Post header -->

                        <!-- Post body -->
                        <div class="card-body">
                          <!-- Post body text -->
                          <div class="post-text">
                            <p><?php echo $rr->content ?></p>
                          </div>
                          <!-- Featured image -->


                          <?php
                          $images = $this->login_model->feed_image_multipost($rr->ID);
                          $script .= '$(".album-images-' . $rr->ID . '").viewer();';
                          // $sql = $this->db->last_query();
                          // echo $sql;
                          // exit(0);
                          ?>
                          <div class="post-image <?php echo $rr->ID ?>">

                            <?php foreach ($images->result() as $key => $rrr) : ?>

                              <?php $count = count($images->result_object)  ?>
                              <?php if (!empty($rrr->file_name) &&  $count == 1) : ?>
                                <a data-fancybox="post1" data-lightbox-type="comments" data-thumb="">
                                  <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->file_name ?>" data-demo-src="" alt="<?php echo $rrr->name . "<br>" . $rrr->description ?>">
                                </a>

                                <!-- multi-post -->

                              <?php elseif ($count > 1) : ?>

                                <?php if (isset($rrr->albumid)) : ?>
                                  <?php $rr->albumid = $rrr->albumid;
                                  $rr->album_name = $rrr->album_name; ?>
                                <?php endif; ?>
                                <li class="album-image-login">
                                  <?php if (isset($rrr->file_name)) : ?>
                                    <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rrr->file_name ?>" width="140" alt="<?php echo $rrr->name . "<br>" . $rrr->description ?>">
                                  <?php endif; ?>

                                </li>
                              <?php endif; ?>
                            <?php endforeach; ?>



                            <?php if (isset($rr->videoid)) : ?>
                              <div class="post-link is-video">
                                <?php if (!empty($rr->video_file_name)) : ?>

                                  <!-- Link image -->
                                  <div class="link-image">
                                    <video width="100%" controls>
                                      <?php if ($rr->video_extension == ".mp4") : ?>
                                        <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->video_file_name ?>" type="video/mp4">
                                      <?php elseif ($rr->video_extension == ".ogg" || $r->video_extension == ".ogv") : ?>
                                        <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->video_file_name ?>" type="video/ogg">
                                      <?php elseif ($rr->video_extension == ".webm") : ?>
                                        <source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->video_file_name ?>" type="video/webm">
                                      <?php endif; ?>
                                      <?php echo lang("ctn_501") ?>
                                    </video>

                                  </div>
                                  <!-- Link content -->
                                <?php elseif (!empty($r->youtube_id)) : ?>
                                  <div class="link-content">
                                    <p><iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $r->youtube_id ?>" frameborder="0" allowfullscreen></iframe></p>
                                  </div>

                                <?php endif; ?>
                              </div>



                            <?php endif; ?>


                          </div>
                        </div>
                        <!-- /Post body -->

                        <!-- Post footer -->
                        <div class="card-footer">
                          <!-- Followers avatars -->
                          <div class="likers-group">

                          </div>
                          <!-- Followers text -->
                          <div class="likers-text">

                          </div>
                          <!-- Post statistics -->
                          <div class="social-count">
                            <div class="likes-count">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                              </svg>

                              <span class="span-like" id="feed-likes-<?php echo $rr->ID ?>"> <?php echo $rr->likes ?></span>


                            </div>


                            <div class="comments-count">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                              </svg>
                              <span>
                                <p href="javascript:void(0)" onclick="load_comments(<?php echo $rr->ID ?>)"><span id="feed-comments-<?php echo $rr->ID ?>"> <?php echo $rr->comments ?></span></p>
                              </span>
                            </div>
                            <div class="shares-count">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link-2">
                                <path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                              </svg>
                              <span id="feed-share-<?php echo $rr->ID ?>"><?php echo $rr->share_count ?></span>
                            </div>

                          </div>
                        </div>
                        <!-- /Post footer -->
                      </div>
                    </div>

                  </div>
                <?php endif ?>
              <?php endforeach; ?>
              <!-- pinal card end -->

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--Right Side-->
  <div class="column is-6 center-block-e">
    <div class="hero form-hero is-fullheight">
      <?php if (!empty($message)) : ?>
        <script>
          $(function() {
            // Display a error toast, with a title
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "progressBar": true,
              "preventDuplicates": true,
              "positionClass": "toast-top-right",
              "onclick": null,
              "showDuration": "400",
              "hideDuration": "1000",
              "timeOut": "7000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
            toastr.error('<?php echo $message ?>')

          });
        </script>
      <?php endif; ?>

      <div class="login-page">
        <div class="login-page-header">
          <img src="<?php echo base_url() ?>uploads/imp/MicrosoftTeams-image.png" height="20" class='social-icon' />

        </div>
        <?php if (isset($_GET['redirect'])) : ?>
          <?php echo form_open(site_url("login/pro/" . urlencode($_GET['redirect']))) ?>
        <?php else : ?>
          <?php echo form_open(site_url("login/pro")) ?>
        <?php endif; ?>
        <div class="field">
          <div class="control">
            <input type="text" class="input" placeholder="Enter your email address" name="email" id="email_w">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input type="password" class="input" placeholder="Enter your password" name="pass" id="pass_w">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-solid primary-button raised is-rounded is-fullwidth">Login</button>
          </div>
        </div>
        <div class="section forgot-password">
          <div class="has-text-centered">
            <a href="<?php echo site_url("login/forgotpw") ?>">Forgot password?</a>
          </div>
          <div class="has-text-centered">
            <a href="<?php echo site_url("register") ?>"><?php echo lang("ctn_305") ?></a>
          </div>
        </div>

        <?php if (!$this->settings->info->disable_social_login) : ?>
          <div class="text-center decent-margin-top">
            <?php if (!empty($this->settings->info->twitter_consumer_key) && !empty($this->settings->info->twitter_consumer_secret)) : ?>
              <div class="btn-group">
                <a href="<?php echo site_url("login/twitter_login") ?>" class="btn btn-default">
                  <img src="<?php echo base_url() ?>images/social/twitter.png" height="20" class='social-icon' />
                  Twitter</a>
              </div>
            <?php endif; ?>
            <?php if (!empty($this->settings->info->facebook_app_id) && !empty($this->settings->info->facebook_app_secret)) : ?>
              <div class="btn-group">
                <a href="<?php echo site_url("login/facebook_login") ?>" class="btn btn-default">
                  <img src="<?php echo base_url() ?>images/social/facebook.png" height="20" class='social-icon' />
                  Facebook</a>
              </div>
            <?php endif; ?>

            <?php if (!empty($this->settings->info->google_client_id) && !empty($this->settings->info->google_client_secret)) : ?>
              <div class="btn-group">
                <a href="<?php echo site_url("login/google_login") ?>" class="btn btn-default">
                  <img src="<?php echo base_url() ?>images/social/google.png" height="20" class='social-icon' />
                  Google</a>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <!--<hr>-->

        <?php echo form_close() ?>

      </div>


    </div>
  </div>