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
                        <textarea name="comment" class="editor-textarea" id="editor-textarea" placeholder="<?php if (isset($editor_placeholder)) : ?><?php echo $editor_placeholder ?><?php else : ?><?php echo lang("ctn_495") ?><?php endif; ?>"></textarea>
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
                            <input type="file" class="form-control" name="image_file1">
                        </div>
                    </div>
                    <div class="column is-6 is-narrower">
                        <div class="compose-option is-centered">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                            </svg>
                            <span>Photo</span>
                            <input type="file" class="form-control" name="video_file">
                        </div>
                    </div>


                    <!-- Mood action -->

                    <!-- Share link action -->

                    <!-- Post GIF action -->

                </div>
            </div>

            <!-- Footer buttons -->
            <div id="feed-coment">
                <button type="button" class="button is-solid primary-button raised" data-dismiss="modal"><?php echo lang("ctn_60") ?></button>
                <button type="submit" class="button is-solid primary-button raised" value="Post">Submit</button>

            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>