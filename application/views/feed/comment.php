<?php

if (isset($postAs)) {
    $imgurl = base_url() . "/" . $this->settings->info->upload_path_relative . "/" . $postAsImg;
} else {
    $imgurl = base_url() . "/" . $this->settings->info->upload_path_relative . "/default.png";
}

?>

<?php echo form_open_multipart(site_url("feed/post_comment/" . $post->ID), array("id" => "social-com-form-edit")) ?>


<div class="card is-new-content is-highlighted">
    <!-- Top tabs -->
    <div class="tabs-wrapper">


        <!-- Tab content -->
        <div class="tab-content">
            <!-- Compose form -->

            <div class="compose">
                <div class="compose-form">
                    <img src="<?php echo $imgurl ?>" class="user-icon-big" id="editor-poster-icon">
                    <div class="control">
                        <textarea name="content" class="editor-textarea" id="editor-textarea" placeholder="<?php if (isset($editor_placeholder)) : ?><?php echo $editor_placeholder ?><?php else : ?><?php echo lang("ctn_495") ?><?php endif; ?>"></textarea>
                    </div>
                </div>

                <div id="feed-upload" class="feed-upload">

                </div>

                <div id="options-summary" class="options-summary"></div>

                <div id="tag-suboption" class="is-autocomplete is-suboption is-hidden">
                    <!-- Tag friends suboption -->
                    <div id="tag-list" class="tag-list"></div>
                    <div class="control">
                        <div class="easy-autocomplete" style="width: 0px;"><input id="users-autocpl" type="text" class="input" placeholder="Who are you with?" autocomplete="off">
                            <div class="easy-autocomplete-container" id="eac-container-users-autocpl">
                                <ul></ul>
                            </div>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                        <div class="close-icon is-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- /Tag friends suboption -->

                <!-- Activities suboption -->
                <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="activities-autocpl-wrapper" class="control has-margin">
                        <div class="easy-autocomplete" style="width: 0px;"><input id="activities-autocpl" type="text" class="input" placeholder="What are you doing right now?" autocomplete="off">
                            <div class="easy-autocomplete-container" id="eac-container-activities-autocpl">
                                <ul></ul>
                            </div>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                        <div class="close-icon is-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </div>

                    <!-- Mood suboption -->
                    <div id="mood-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <div class="easy-autocomplete" style="width: 0px;"><input id="mood-autocpl" type="text" class="input is-subactivity" placeholder="How do you feel?" autocomplete="off">
                                <div class="easy-autocomplete-container" id="eac-container-mood-autocpl">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="input-block">
                                Feels
                            </div>
                            <div class="close-icon is-subactivity">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Drinking suboption child -->
                    <div id="drinking-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <div class="easy-autocomplete" style="width: 0px;"><input id="drinking-autocpl" type="text" class="input is-subactivity" placeholder="What are you drinking?" autocomplete="off">
                                <div class="easy-autocomplete-container" id="eac-container-drinking-autocpl">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="input-block">
                                Drinks
                            </div>
                            <div class="close-icon is-subactivity">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Eating suboption child -->
                    <div id="eating-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <div class="easy-autocomplete" style="width: 0px;"><input id="eating-autocpl" type="text" class="input is-subactivity" placeholder="What are you eating?" autocomplete="off">
                                <div class="easy-autocomplete-container" id="eac-container-eating-autocpl">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="input-block">
                                Eats
                            </div>
                            <div class="close-icon is-subactivity">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Reading suboption child -->
                    <div id="reading-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <div class="easy-autocomplete" style="width: 0px;"><input id="reading-autocpl" type="text" class="input is-subactivity" placeholder="What are you reading?" autocomplete="off">
                                <div class="easy-autocomplete-container" id="eac-container-reading-autocpl">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="input-block">
                                Reads
                            </div>
                            <div class="close-icon is-subactivity">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Watching suboption child -->
                    <div id="watching-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <div class="easy-autocomplete" style="width: 0px;"><input id="watching-autocpl" type="text" class="input is-subactivity" placeholder="What are you watching?" autocomplete="off">
                                <div class="easy-autocomplete-container" id="eac-container-watching-autocpl">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="input-block">
                                Watches
                            </div>
                            <div class="close-icon is-subactivity">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Travel suboption child -->
                    <div id="travel-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <div class="easy-autocomplete" style="width: 0px;"><input id="travel-autocpl" type="text" class="input is-subactivity" placeholder="Where are you going?" autocomplete="off">
                                <div class="easy-autocomplete-container" id="eac-container-travel-autocpl">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="input-block">
                                Travels
                            </div>
                            <div class="close-icon is-subactivity">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Activities suboption -->

                <!-- Location suboption -->
                <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="location-autocpl-wrapper" class="control is-location-wrapper has-margin">
                        <input id="location-autocpl" type="text" class="input pac-target-input" placeholder="Where are you now?" autocomplete="off">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="close-icon is-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Link suboption -->
                <div id="link-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="link-autocpl-wrapper" class="control is-location-wrapper has-margin">
                        <input id="link-autocpl" type="text" class="input" placeholder="Enter the link URL">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link-2">
                                <path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                        <div class="close-icon is-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- GIF suboption -->
                <div id="gif-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="gif-autocpl-wrapper" class="control is-gif-wrapper has-margin">
                        <input id="gif-autocpl" type="text" class="input" placeholder="Search a GIF to add" autofocus="">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                        <div class="close-icon is-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                        <div class="gif-dropdown">
                            <div class="inner">
                                <div class="gif-block">
                                    <img src="assets/img/demo/gif/1.gif" data-demo-src="assets/img/demo/gif/1.gif" alt="">
                                    <img src="assets/img/demo/gif/2.gif" data-demo-src="assets/img/demo/gif/2.gif" alt="">
                                    <img src="assets/img/demo/gif/3.gif" data-demo-src="assets/img/demo/gif/3.gif" alt="">
                                    <img src="assets/img/demo/gif/4.gif" data-demo-src="assets/img/demo/gif/4.gif" alt="">
                                </div>
                                <div class="gif-block">
                                    <img src="assets/img/demo/gif/5.gif" data-demo-src="assets/img/demo/gif/5.gif" alt="">
                                    <img src="assets/img/demo/gif/6.gif" data-demo-src="assets/img/demo/gif/6.gif" alt="">
                                    <img src="assets/img/demo/gif/7.gif" data-demo-src="assets/img/demo/gif/7.gif" alt="">
                                    <img src="assets/img/demo/gif/8.gif" data-demo-src="assets/img/demo/gif/8.gif" alt="">
                                </div>
                                <div class="gif-block">
                                    <img src="assets/img/demo/gif/9.gif" data-demo-src="assets/img/demo/gif/9.gif" alt="">
                                    <img src="assets/img/demo/gif/10.gif" data-demo-src="assets/img/demo/gif/10.gif" alt="">
                                    <img src="assets/img/demo/gif/11.gif" data-demo-src="assets/img/demo/gif/11.gif" alt="">
                                    <img src="assets/img/demo/gif/12.gif" data-demo-src="assets/img/demo/gif/12.gif" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Compose form -->

            <!-- General extended options -->
            <div id="extended-options" class="compose-options">
                <div class="columns is-multiline is-full">
                    <!-- Upload action -->
                    <div class="column is-6 is-narrower">
                        <div class="compose-option is-centered">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera">
                                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                <circle cx="12" cy="13" r="4"></circle>
                            </svg>
                            <span>Photo</span>
                            <input id="feed-upload-input-1" type="file" name="image_com_file[]" multiple="" accept=".png, .jpg, .jpeg" onchange="readURL(this)">
                        </div>
                    </div>
                    <div class="column is-6 is-narrower">
                        <div class="compose-option is-centered">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                            </svg>
                            <span>Video</span>
                            <input id="feed-upload-input-1" type="file" name="video_comm" multiple="" onchange="readURL(this)">
                        </div>
                    </div>
                    <!-- Mood action -->
                    <div class="column is-6 is-narrower">
                        <div id="extended-show-activities" class="compose-option is-centered">
                            <img src="assets/img/icons/emoji/emoji-1.svg" alt="">
                            <span>Mood/Activity</span>
                        </div>
                    </div>
                    <!-- Tag friends action -->
                    <div class="column is-6 is-narrower">
                        <div id="open-tag-suboption" class="compose-option is-centered">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                            </svg>
                            <span>Tag friends</span>
                        </div>
                    </div>
                    <!-- Post location action -->
                    <div class="column is-6 is-narrower">
                        <div id="open-location-suboption" class="compose-option is-centered">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Post location</span>
                        </div>
                    </div>
                    <!-- Share link action -->

                    <!-- Post GIF action -->

                </div>
            </div>
            <!-- /General extended options -->

            <!-- General basic options -->
            <div id="basic-options" class="compose-options is-hidden">
                <!-- Upload action -->
                <div class="compose-option">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <span>Media</span>
                    <input id="feed-upload-input-2" type="file" accept=".png, .jpg, .jpeg" onchange="readURL(this)">
                </div>
                <!-- Mood action -->
                <div id="show-activities" class="compose-option">
                    <img src="assets/img/icons/emoji/emoji-1.svg" alt="">
                    <span>Activity</span>
                </div>
                <!-- Expand action -->
                <div id="open-extended-options" class="compose-option">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                    </svg>
                </div>
            </div>
            <!-- /General basic options -->

            <!-- Hidden Options -->
            <div class="hidden-options">


                <!-- Friends list -->
                <div class="friends-list is-hidden">
                    <!-- Header -->
                    <div class="list-header">
                        <span>Send in a message</span>
                        <div class="actions">
                            <a id="open-compose-search" href="javascript:void(0);" class="search-trigger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </a>
                            <!-- Hidden filter input -->
                            <div id="compose-search" class="control is-hidden">
                                <input type="text" class="input" placeholder="Search People">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </span>
                            </div>
                            <a href="javascript:void(0);" class="is-inverted modal-trigger" data-modal="create-group-modal">Create group</a>
                        </div>
                    </div>
                    <!-- List body -->
                    <div class="list-body">

                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-3">
                                    <label for="checkbox-3"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="assets/img/avatars/dan.jpg" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                            <div class="friend-name">Dan Walker</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-4">
                                    <label for="checkbox-4"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="assets/img/avatars/daniel.jpg" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                            <div class="friend-name">Daniel Wellington</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-5">
                                    <label for="checkbox-5"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="assets/img/avatars/stella.jpg" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                            <div class="friend-name">Stella Bergmann</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-6">
                                    <label for="checkbox-6"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="assets/img/avatars/david.jpg" data-demo-src="assets/img/avatars/david.jpg" alt="">
                            <div class="friend-name">David Kim</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-7">
                                    <label for="checkbox-7"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="assets/img/avatars/nelly.png" data-demo-src="assets/img/avatars/nelly.png" alt="">
                            <div class="friend-name">Nelly Schwartz</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer buttons -->
            <div id="feed-coment">
                <button type="button" class="button is-solid primary-button raised" data-dismiss="modal"><?php echo lang("ctn_60") ?></button>
                <button type="submit" class="button is-solid primary-button raised" value="">Submit</button>

            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>