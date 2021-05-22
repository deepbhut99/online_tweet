<!DOCTYPE html>
<?php if ($enable_rtl) : ?>
  <html dir="rtl">
<?php else : ?>
  <html lang="en">
<?php endif; ?>

<head>
  <title>Earnfinex | <?php if (isset($page_title)) : ?><?php echo $page_title ?> - <?php endif; ?><?php echo $this->settings->info->site_name ?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

  <link href="<?php echo base_url(); ?>scripts/libraries/mention/jquery.mentions.css" rel="stylesheet" type="text/css">
  

  <!-- new css file path -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/core.css">





  <!-- Styles -->
  <link href="<?php echo base_url(); ?>styles/client/themes/titan/main.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>styles/client/themes/titan/responsive.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>styles/client/responsive.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">



  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">


  <link href="<?php echo base_url(); ?>styles/client/elements.css" rel="stylesheet" type="text/css">
  <link rel=“stylesheet” href=“https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css”></i>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,500,550,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

  <link href="<?php echo base_url(); ?>styles/chat.css" rel="stylesheet" type="text/css">

  <!-- SCRIPTS -->
  <script type="text/javascript">
    var global_base_url = "<?php echo site_url('/') ?>";
    var global_hash = "<?php echo $this->security->get_csrf_hash() ?>";
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


  <script src="<?php echo base_url() ?>scripts/libraries/jquery.form.min.js"></script> <!-- processing forms ajax -->

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.12/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.12/datatables.min.js"></script> <!-- datatables -->

  <script src="<?php echo base_url(); ?>scripts/libraries/mention/jquery.mentions.js"></script> <!-- @mentions and #hastags -->


  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


  <script src="<?php echo base_url(); ?>scripts/libraries/jquery.jscroll.js"></script> <!-- infinite scroll -->

  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> <!-- text editor -->

  <script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.3.0"></script> <!-- for emoji -->

  <?php if (isset($datatable_lang) && !empty($datatable_lang)) : ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $.extend(true, $.fn.dataTable.defaults, {
          "language": {
            "url": "<?php echo $datatable_lang ?>"
          }
        });
      });
    </script>
  <?php endif; ?>

  <?php if (isset($fullcalendar_lang) && !empty($fullcalendar_lang)) : ?>
    <script src="<?php echo base_url() . $fullcalendar_lang ?>"></script>
  <?php endif; ?>

  <link href="<?php echo base_url(); ?>scripts/libraries/select2.min.css" rel="stylesheet" type="text/css">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo0l7EcNxwWoTYIgE3-p3J0m5_W844_Pg&libraries=places"></script>
  <script src="<?php echo base_url() ?>scripts/libraries/jquery.geocomplete.min.js"></script>
  <script src="<?php echo base_url() ?>scripts/libraries/select2.full.min.js"></script>

  <?php if (!$this->settings->info->disable_chat) : ?>
    <script src="<?php echo base_url() ?>scripts/custom/chat.js" type="text/javascript"></script>
    <script type="text/javascript">
      time_to_update = 5000;
    </script>
  <?php endif; ?>

  <link href="<?php echo base_url() ?>scripts/libraries/viewer/viewer.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>scripts/libraries/viewer/viewer.js"></script> <!-- Gallery viewer -->


  <!-- CODE INCLUDES -->
  <?php echo $cssincludes ?>

  <!-- Favicon: http://realfavicongenerator.net -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>images/favicon/favicon.ico" type="image/x-icon">
  <meta name="theme-color" content="#ffffff">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


</head>

<body class="is-white">

  <!-- navigationpanal -->

  <div id="main-navbar" class="navbar is-inline-flex is-transparent no-shadow is-hidden-mobile">
    <div class="container is-fluid">
      <div class="navbar-brand">
        <?php if ($this->settings->info->logo_option) : ?>
          <a class="navbar-brand-two" href="<?php echo site_url() ?>" title="<?php echo $this->settings->info->site_name ?>"><img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $this->settings->info->site_logo ?>" width="123" height="32"></a>
        <?php else : ?>
          <a class="navbar-brand" href="<?php echo site_url() ?>" title="">
            <img src="<?= base_url('images/favicon/logo.svg') ?>" class="h-60px mt-n5 head-logo">
          </a>
        <?php endif; ?>
      </div>
      <div class="navbar-menu">
        <div class="navbar-end">
          <ul class="nav navbar-nav">
            <li>
              <?php echo form_open(site_url(), array("class" => "navbar-form")) ?>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo lang("ctn_76") ?> ..." id="search-complete">
              </div>
              <?php echo form_close() ?>
            </li>
            <?php if ($this->user->loggedin) : ?>
              <li><a href="#" data-target="#" onclick="load_notifications()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="noti-menu-drop"><span class="glyphicon glyphicon-bell notification-icon"></span><?php if ($this->user->info->noti_count > 0) : ?><span class="badge notification-badge small-text"><?php echo $this->user->info->noti_count ?></span><?php endif; ?></a>

                <ul class="dropdown-menu" aria-labelledby="noti-menu-drop">
                  <li>
                    <div class="notification-box-title">
                      <?php echo lang("ctn_412") ?> <?php if ($this->user->info->noti_count > 0) : ?><span class="badge click" id="noti-click-unread" onclick="load_notifications_unread()"><?php echo $this->user->info->noti_count ?></span><?php endif; ?>
                    </div>
                    <div id="notifications-scroll">
                      <div id="loading_spinner_notification">
                        <span class="glyphicon glyphicon-refresh" id="ajspinner_notification"></span>
                      </div>
                    </div>
                    <div class="notification-box-footer">
                      <a href="<?php echo site_url("home/notifications") ?>"><?php echo lang("ctn_414") ?></a>
                    </div>
                  </li>
                </ul>
              </li>
              <li><a href="#" data-target="#" onclick="load_chats()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="email-menu-drop"><span class="glyphicon glyphicon-envelope notification-icon"></span><span class="badge notification-badge small-text" id="chat-noti"></span></a>

                <ul class="dropdown-menu" aria-labelledby="email-menu-drop">
                  <li>
                    <div class="notification-box-title">
                      <?php echo lang("ctn_489") ?> - <a href="<?php echo site_url("chat") ?>"><?php echo lang("ctn_482") ?></a>
                    </div>
                    <div id="chat-scroll">
                      <div id="loading_spinner_email">
                        <span class="glyphicon glyphicon-refresh" id="ajspinner_email"></span>
                      </div>
                    </div>
                    <div class="notification-box-footer">
                      <a href="#" id="chat-click-more" onclick="load_chat_page()"><?php echo lang("ctn_490") ?></a>
                    </div>
                  </li>
                </ul>

              </li>
              <li class="user_bit"><img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/default.png" class="user_avatar"> <a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php if ($this->settings->info->user_display_type) : ?>
                    <?php echo $this->user->info->first_name ?> <?php echo $this->user->info->last_name ?>
                  <?php else : ?>
                    <?php echo $this->user->info->username ?>
                  <?php endif; ?></a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="<?php echo site_url("profile/" . $this->user->info->username) ?>"><?php echo lang("ctn_491") ?></a></li>
                  <li><a href="<?php echo site_url("pages/your") ?>"><?php echo lang("ctn_492") ?></a></li>
                  <li><a href="<?php echo site_url("profile/friends/" . $this->user->info->ID) ?>"><?php echo lang("ctn_493") ?></a></li>
                  <li><a href="<?php echo site_url("user_settings") ?>"><?php echo lang("ctn_156") ?></a></li>
                  <?php if ($this->common->has_permissions(array("admin", "admin_members", "admin_payment", "admin_settings"), $this->user)) : ?>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo site_url("admin") ?>"><?php echo lang("ctn_157") ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <li><a href="<?php echo site_url("login/logout/" . $this->security->get_csrf_hash()) ?>"><?php echo lang("ctn_149") ?></a></li>
            <?php else : ?>
              <li><a href="<?php echo site_url("login") ?>"><?php echo lang("ctn_150") ?></a></li>
              <li><a href="<?php echo site_url("register") ?>"><?php echo lang("ctn_151") ?></a></li>
            <?php endif; ?>
          </ul>
        </div>

      </div>
    </div>
  </div>
  <nav class="navbar mobile-navbar is-hidden-desktop" aria-label="main navigation">
    <!-- Brand -->
    <div class="navbar-brand">
      <?php if ($this->settings->info->logo_option) : ?>
        <a class="navbar-brand-two" href="<?php echo site_url() ?>" title="<?php echo $this->settings->info->site_name ?>"><img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $this->settings->info->site_logo ?>" width="123" height="32"></a>
      <?php else : ?>
        <a class="navbar-brand" href="<?php echo site_url() ?>" title="<?php echo $this->settings->info->site_name ?>"><?php echo $this->settings->info->site_name ?></a>
      <?php endif; ?>


      <!-- Mobile menu toggler icon -->

    </div>
    <!-- Navbar mobile menu -->
    <div class="navbar-menu">
      <!-- Account -->

    </div>
    <div class="navbar-burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="navbar-menu">
      <!-- Account -->
      <div class="navbar-item has-dropdown is-active">
        <div class="navbar-link">
        <img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $this->user->info->avatar ?>" data-demo-src="" data-user-popover="0" alt="">
         <span class="is-heading"> <a href="<?php echo site_url("profile/" . $this->user->info->username) ?>"><?php echo $this->user->info->first_name ?> <?php echo $this->user->info->last_name ?></a>
       </span>
        </div>

        <!-- Mobile Dropdown -->
        <div class="navbar-dropdown">
        <a href="<?php echo site_url() ?>" class="navbar-item is-flex is-mobile-icon">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
              </svg>Home</span>
          </a>
          <a href="<?php echo site_url("profile/" . $this->user->info->username) ?>" class="navbar-item is-flex is-mobile-icon">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>Profile</span>
          </a>

        
          <a href="<?php echo site_url("user_settings") ?>" class="navbar-item is-flex is-mobile-icon">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
              </svg>Settings</span>
          </a>
          <a href="<?php echo site_url("login/logout/" . $this->security->get_csrf_hash()) ?>" class="navbar-item is-flex is-mobile-icon">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
              </svg><?php echo lang("ctn_149") ?></span>
          </a>
        </div>
      </div>

      <!-- More -->
      
    </div>
  </nav>

  <!-- navigation panal end -->

  <div class="view-wrapper is-full">


    <?php include(APPPATH . "views/client/client_links.php") ?>
    <!-- Container -->
    <div id="main-feed" class="container">
      <?php $gl = $this->session->flashdata('globalmsg'); ?>
      <?php if (!empty($gl)) : ?>
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
							toastr.error('<?php echo $gl ?>')
             
						});
					</script>
      <?php endif; ?>



      <?php echo $content ?>


    </div>


  </div>

  <?php include(APPPATH . "views/client/chat.php"); ?>


  <!-- SCRIPTS -->
  <script src="<?php echo base_url(); ?>scripts/custom/global.js"></script>
  <script src="<?php echo base_url(); ?>scripts/libraries/jquery.nicescroll.min.js"></script>

  <!-- new SCRIPT for theme -->

  <!-- Core js -->


  <!-- Page and UI related js -->


  <!-- Components js -->
  <script src="<?php echo base_url(); ?>assets/js/widgets.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/autocompletes.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/modal-uploader.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popovers-users.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popovers-pages.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/go-live.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/touch.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/tour.js"></script>


  <!-- END FOR NEW SRCIPT -->




  <script type="text/javascript">
    $.widget.bridge('uitooltip', $.ui.tooltip);
  </script>

  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <?php if (isset($datetimepicker) && !empty($datetimepicker)) : ?>
    <script type="text/javascript">
      jQuery.datetimepicker.setLocale('<?php echo $datetimepicker ?>');
    </script>
  <?php endif; ?>
  <script type="text/javascript">
    $(document).ready(function() {

      // Get sidebar height
      resize_layout();

      $('.nav-sidebar li').on('shown.bs.collapse', function() {
        $(this).find(".glyphicon-menu-right")
          .removeClass("glyphicon-menu-right")
          .addClass("glyphicon-menu-down");
        resize_layout();
      });
      $('.nav-sidebar li').on('hidden.bs.collapse', function() {
        $(this).find(".glyphicon-menu-down")
          .removeClass("glyphicon-menu-down")
          .addClass("glyphicon-menu-right");
        resize_layout();
      });

      function resize_layout() {
        var sb_h = $('.sidebar').height();
        var mc_h = $('#main-content').height();
        var w_h = $(window).height();
        $('.sidebar').height($(window).height());
        if (sb_h > mc_h) {
          $('#main-content').css("min-height", sb_h + 50 + "px");
        }
        if (w_h > mc_h) {
          $('#main-content').css("min-height", (w_h - (51 + 30)) + "px");
        }
      }
    });
  </script>
</body>

  </html>