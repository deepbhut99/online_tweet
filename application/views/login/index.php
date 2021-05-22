<div class="login-wrapper columns is-gapless">
  <!--Left Side (Desktop Only)-->
  <div class="column is-6 is-hidden-mobile hero-banner">
    <div class="hero is-fullheight is-login">
      <div class="hero-body">
        <div class="container">
          <div class="left-caption">


            <!-- pinal nu card -->
            <div class="card mt-5">
              <div class="card-body pb-0">
                <?php $users = $this->login_model->get_login_feed(1, 1);


                foreach ($users->result() as $rr) :
                  $rr->content = $this->common->replace_user_tags($rr->content);
                  $rr->content = $this->common->replace_hashtags($rr->content);
                  $rr->content = $this->common->convert_smiles($rr->content);
                  $script = '';


                  // $sql = $this->db->last_query();
                  // echo $sql;
                  // exit(0);

                ?>

                  <div class="d-flex">
                    <div>
                      <img class="login-avtar" src="<?= base_url('images/favicon/favicon.ico') ?>" alt="" height="50" width="50">
                    </div>
                    <div class="p-1">
                      <?php if (isset($rr->username)) : ?>
                        <h6><?php echo $rr->first_name ?> <?php echo $rr->last_name ?></h6>
                      <?php endif; ?>

                    </div>

                  </div>
                  <p><?php echo $rr->content ?></p>
                  <?php
                  // Display all images in post
                  $images = $this->login_model->feed_image_multipost($rr->ID);
                  $script .= '$(".album-images-' . $rr->ID . '").viewer();';
                  // $sql = $this->db->last_query();
                  // 	echo $sql;
                  // 	exit(0);
                  ?>
                  <div class="post-image <?php echo $rr->ID ?>">

                    <?php foreach ($images->result() as $key => $rrr) : ?>

                      <?php $count = count($images->result_object)  ?>
                      <?php if (!empty($rrr->file_name) &&  $count == 1) : ?>
                        <a data-fancybox="post1" data-lightbox-type="comments" data-thumb="" href="" data-demo-href="">
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
                <?php endforeach; ?>
              </div>
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
      <div class="account-wrapper pt-1" style="padding:25px 0;">
        <div class="account-body">
          <p class="logo">
          <img src="<?php echo base_url() ?>uploads/imp/MicrosoftTeams-image.png" height="20" class='social-icon' />
          </p>
          <form id="data_form" autocomplete="off" method="POST" class="account-form">
            <?php
            if ($this->session->flashdata('error_session')) {
            ?>
              <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('error_session'); ?>
              </div>
            <?php } ?>

            <?php
            if ($this->session->flashdata('success_message')) {
            ?>
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span style="color: white;"><?php echo $this->session->flashdata('success_message'); ?></span>
              </div>
            <?php } ?>
            <span style="color:red;font-weight: bold" id="errorMessageOnline"></span>
            <div class="form-group">
              <label for="sign-up"><?= lang('user_name') ?></label>
              <input class="inputhght" name="username" id="username" type="text" value="<?= $this->session->flashdata("username") ?>" autocomplete="off" placeholder="<?= lang('uname') ?>">
              <span id="error_user" class="errorSpan"></span>
            </div>
            <div class="form-group tow">
              <label for="pass"><?= lang('l_password') ?></label>
              <input class="inputhght" style="height: 45px;" type="password" name="password" id="lpassword" autocomplete="new-password" value="<?= $this->session->flashdata("password") ?>" placeholder="<?= lang('entr_pwd') ?>">
              <div class="group2">
                <i id="icon" class="fa fa-eye-slash"></i>
              </div>
              <span id="error_pass" class="errorSpan"></span>
              <span class="sign-in-recovery"><?= lang('frgt_pwd') ?><a style="color: #c99728;" href="<?= base_url('login/forgot-password') ?>"><?= lang('rcvr_pwd') ?></a></span>
            </div>
            <div class="form-group text-center">
              <button style="background: #c99728; outline: none !important;" type="submit" id="login_btn_Online" class="mt-2 mb-2"><span><b><?= lang('log_in') ?></b></span></button>
            </div>
          </form>
        </div>

        <div class="account-header pb-0">
          <span class="d-block mt-15"><?= lang('dont_hv_acc') ?><a style="color: #c99728;" href="<?= base_url('signup') ?>"><?= lang('sign_up_here') ?></a></span>
        </div>
      </div>


    </div>
  </div>




  <div class="login-page">
        <div class="login-page-header">
          <?php echo lang("ctn_304") ?> <?php echo $this->settings->info->site_name ?>

        </div>
        <?php if (isset($_GET['redirect'])) : ?>
          <?php echo form_open(site_url("login/pro/" . urlencode($_GET['redirect']))) ?>
        <?php else : ?>
          <?php echo form_open(site_url("login/pro")) ?>
        <?php endif; ?>
        <div class="input-group">
          <span class="input-group-addon white-form-bg"><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" name="email" class="form-control" placeholder="<?php echo lang("ctn_303") ?>">
        </div><br />

        <div class="input-group">
          <span class="input-group-addon white-form-bg"><span class="glyphicon glyphicon-lock"></span></span>
          <input type="password" name="pass" class="form-control" placeholder="<?php echo lang("ctn_180") ?>">
        </div>
        <p class="decent-margin"><input type="submit" class="btn btn-primary form-control" value="<?php echo lang("ctn_184") ?>"></p>
        <p class="decent-margin"><a href="<?php echo site_url("login/forgotpw") ?>"><?php echo lang("ctn_181") ?></a></p>

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
        <hr>
        <p class="decent-margin"><a href="<?php echo site_url("register") ?>" class="btn btn-success form-control"><?php echo lang("ctn_305") ?></a></p>
        <?php echo form_close() ?>

      </div>