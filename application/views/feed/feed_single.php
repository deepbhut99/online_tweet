<?php
$r->content = $this->common->replace_user_tags($r->content);
$r->content = $this->common->replace_hashtags($r->content);
$r->content = $this->common->convert_smiles($r->content);
$script = '';

if ($r->post_as == "page") {
	$r->avatar = $r->page_avatar;
	$r->first_name = $r->page_name;
	$r->last_name = "";
	if (!empty($r->page_slug)) {
		$slug = $r->page_slug;
	} else {
		$slug = $r->pageid;
	}
	$url = site_url("pages/view/" . $slug);
} else {
	$url = site_url("profile/" . $r->username);
}
?>
<!-- new feed wrapper -->
<div id="feed-post-<?php echo $r->ID ?>" class="card is-post">
	<!-- Main wrap -->
	<div class="content-wrap">
		<!-- Post header -->
		<div class="card-heading">
			<!-- User meta -->
			<div class="user-block">
				<div class="image">
					<img src="<?php echo base_url() ?>/<?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->avatar ?>" data-demo-src="<?php echo base_url() ?>/assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
				</div>
				<div class="user-info">
					<?php if (isset($r->p_username)) : ?>
						<a href="<?php echo site_url("profile/" . $r->p_username) ?>"><?php echo $r->p_first_name ?> <?php echo $r->p_last_name ?></a>
						<span class="time">July 26 2018, 01:03pm</span>

						<?php if ($r->user_flag) : ?> - <?php echo lang("ctn_517") ?>
							<?php $users = $this->feed_model->get_feed_users($r->ID); ?>
							<?php $c = $users->num_rows();
							$v = 0; ?>

							<?php foreach ($users->result() as $user) : ?>
								<?php $v++; ?>
								<a href="<?php echo site_url("profile/" . $user->username) ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></a><?php if ($v == ($c - 1) && $c > 0) : ?> <?php echo lang("ctn_302") ?><?php elseif ($c == $v) : ?><?php else : ?>, <?php endif; ?>
							<?php endforeach; ?>

						<?php endif; ?>
						</p>

					<?php else : ?>
						<?php // User is posting on a page 
						?>
						<?php if (isset($r->page_name) && $r->post_as != "page") : ?>
							<p><a href="<?php echo $url ?>"><?php echo $r->first_name ?> <?php echo $r->last_name ?></a> <span class="glyphicon glyphicon-circle-arrow-right"></span> <a href="<?php echo site_url("pages/view/" . $r->pageid) ?>"><?php echo $r->page_name ?></a></p>

							<p class="feed-timestamp"><?php echo $this->common->get_time_string_simple($this->common->convert_simple_time($r->timestamp)) ?>
								<?php if ($r->location) : ?>- <?php echo lang("ctn_516") ?> <a href="https://www.google.com/maps/place/<?php echo urlencode($r->location) ?>"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $r->location ?></a><?php endif; ?>
							<?php if ($r->user_flag) : ?> <?php echo lang("ctn_517") ?>
								<?php $users = $this->feed_model->get_feed_users($r->ID); ?>
								<?php $c = $users->num_rows();
								$v = 0; ?>
								<?php foreach ($users->result() as $user) : ?>
									<?php $v++; ?>
									<a href="<?php echo site_url("profile/" . $user->username) ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></a><?php if ($v == ($c - 1) && $c > 0) : ?> <?php echo lang("ctn_302") ?><?php elseif ($c == $v) : ?><?php else : ?>, <?php endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>
							</p>
						<?php else : ?>
							<?php // Normal post 
							?>
							<p><a href="<?php echo $url ?>"><?php echo $r->first_name ?> <?php echo $r->last_name ?></a>
								<?php if ($r->user_flag) : ?> <?php echo lang("ctn_517") ?>
									<?php $users = $this->feed_model->get_feed_users($r->ID); ?>
									<?php $c = $users->num_rows();
									$v = 0; ?>
									<?php foreach ($users->result() as $user) : ?>
										<?php $v++; ?>
										<a href="<?php echo site_url("profile/" . $user->username) ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></a><?php if ($v == ($c - 1) && $c > 0) : ?> <?php echo lang("ctn_302") ?><?php elseif ($c == $v) : ?><?php else : ?>, <?php endif; ?>
									<?php endforeach; ?>
								<?php endif; ?>
							</p>
							<p class="feed-timestamp"><?php echo $this->common->get_time_string_simple($this->common->convert_simple_time($r->timestamp)) ?> <?php if ($r->location) : ?>- <?php echo lang("ctn_516") ?> <a href="https://www.google.com/maps/place/<?php echo urlencode($r->location) ?>"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $r->location ?></a><?php endif; ?> </p>
						<?php endif; ?>


					<?php endif; ?>



				</div>
			</div>
			<!-- Right side dropdown -->
			<!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
			<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
				<div class="feed-header-dropdown">
					<div class="btn-group">
						<span class="glyphicon glyphicon-chevron-down faded-icon dropdown-toggle click" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)" onclick="save_post(<?php echo $r->ID ?>)" id="save_post_<?php echo $r->ID ?>"><?php if (!isset($r->savepostid)) : ?><?php echo lang("ctn_518") ?></a><?php else : ?><?php echo lang("ctn_519") ?><?php endif; ?></li>
							<li><a href="javascript:void(0)" onclick="subscribe_post(<?php echo $r->ID ?>)" id="subscribe_post_<?php echo $r->ID ?>"><?php if (!isset($r->subid)) : ?><?php echo lang("ctn_520") ?></a><?php else : ?><?php echo lang("ctn_521") ?><?php endif; ?></li>
							<?php if ($r->userid == $this->user->info->ID || ($r->pageid > 0 && $r->post_as == "page" && isset($r->roleid) && $r->roleid == 1) || $this->common->has_permissions(array("admin", "post_admin"), $this->user)) : ?>
								<li><a href="javascript:void(0)" onclick="delete_post(<?php echo $r->ID ?>)"><?php echo lang("ctn_522") ?></a></li>
								<li><a href="javascript:void(0);" onclick="edit_post(<?php echo $r->ID ?>)"><?php echo lang("ctn_55") ?></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Post header -->

		<!-- Post body -->
		<div class="card-body">
			<!-- Post body text -->
			<div class="post-text">
				<?php echo $r->content ?>
				<?php if ($r->site_flag) : ?>
					<?php $sites = $this->feed_model->get_feed_urls($r->ID); ?>
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

			<?php if ($r->template == "event") : ?>
				<div class="editor-event">
					<span class="glyphicon glyphicon-calendar big-event-icon"></span>
					<p><strong><a href="<?php echo site_url("pages/view_event/" . $r->eventid) ?>"><?php echo $r->event_title ?></a></strong></p>
					<p><?php echo $r->event_description ?></p>
					<p><span class="glyphicon glyphicon-time"></span> <?php echo $r->event_start ?> ~ <?php echo $r->event_end ?> </p>
				</div>


			<?php endif; ?>
			<!-- Featured image -->
			<?php
			// Display all images in post
			$images = $this->feed_model->feed_image_multipost($r->ID);
			$script .= '$(".album-images-' . $r->ID . '").viewer();';
			// $sql = $this->db->last_query();
			// 	echo $sql;
			// 	exit(0);
			?>
			<div class="post-image <?php echo $r->ID ?>">
				<?php foreach ($images->result() as $rr) : ?>

					<?php $count = count($images->result_object)  ?>
					<?php if (!empty($rr->file_name) &&  $count == 1) : ?>
						<a data-fancybox="post1" data-lightbox-type="comments" data-thumb="" href="" data-demo-href="">
							<img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $rr->file_name ?>" data-demo-src="" alt="<?php echo $rr->name . "<br>" . $rr->description ?>">
						</a>

						<!-- multi-post -->

					<?php elseif ($count > 2) : ?>
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


				<?php if (isset($r->videoid)) : ?>
					<div class="post-link is-video">
						<?php if (!empty($r->video_file_name)) : ?>

							<!-- Link image -->
							<div class="link-image">
								<video width="100%" controls>
									<?php if ($r->video_extension == ".mp4") : ?>
										<source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->video_file_name ?>" type="video/mp4">
									<?php elseif ($r->video_extension == ".ogg" || $r->video_extension == ".ogv") : ?>
										<source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->video_file_name ?>" type="video/ogg">
									<?php elseif ($r->video_extension == ".webm") : ?>
										<source src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $r->video_file_name ?>" type="video/webm">
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







				<div class="like-wrapper" id="<?php echo $r->ID ?>">
					<a class="like-button <?php if (isset($r->likeid)) : ?>is-active<?php endif; ?>" id="like-button-<?php echo $r->ID ?>" onclick="like_feed_post(<?php echo $r->ID ?>)">
						<i class="mdi mdi-heart not-liked bouncy"></i>
						<i class="mdi mdi-heart is-liked bouncy"></i>
						<span class="like-overlay"></span>
					</a>
				</div>




				<div class="fab-wrapper is-share">
					<a href="javascript:void(0);" class="small-fab share-fab modal-trigger" onclick="load_comments(<?php echo $r->ID ?>)" data-modal="share-modal">

						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
							<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
						</svg>


					</a>
				</div>

				<!-- <div class="fab-wrapper is-comment">
					<a href="javascript:void(0);" class="small-fab">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link-2">
							<path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path>
							<line x1="8" y1="12" x2="16" y2="12"></line>
						</svg>
					</a>
				</div> -->
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
					<a href="#" onclick="get_post_likes(<?php echo $r->ID ?>)">
						<p> and <?php echo $r->likes ?> more liked</p>
					</a>

				</p>

			</div>
			<!-- Post statistics -->
			<div class="social-count">
				<div class="likes-count">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
						<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
					</svg>

					<span class="span-like" id="feed-likes-<?php echo $r->ID ?>"> <?php echo $r->likes ?></span>


				</div>

				<!-- <div class="shares-count">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
				
					<span>9</span>
				</div>
				<div class="comments-count">
					<i data-feather="message-circle"></i>
					<span>3</span>
				</div> -->
			</div>
		</div>

		<!-- for comment  -->

		<!-- /Post footer -->
	</div>
	<div class="feed-comment-area" id="feed-comment-<?php echo $r->ID ?>">


	</div>
	<!-- /Main wrap -->

	<!-- Post #1 Comments -->
	<div class="comments-wrap is-hidden">
		<!-- Header -->
		<div class="comments-heading">
			<h4>Comments
				<small>(8)</small>
			</h4>
			<div class="close-comments">
				<i data-feather="x"></i>
			</div>
		</div>
		<!-- /Header -->

		<!-- Comments body -->
		<div class="comments-body has-slimscroll">

			<!-- Comment -->
			<div class="media is-comment">
				<!-- User image -->
				<div class="media-left">
					<div class="image">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
					</div>
				</div>
				<!-- Content -->
				<div class="media-content">
					<a href="#">Dan Walker</a>
					<span class="time">28 minutes ago</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.</p>
					<!-- Actions -->
					<div class="controls">
						<div class="like-count">
							<i data-feather="thumbs-up"></i>
							<span>4</span>
						</div>
						<div class="reply">
							<a href="#">Reply</a>
						</div>
						<div class="edit">
							<a href="#">Edit</a>
						</div>
					</div>

					<!-- Nested Comment -->
					<div class="media is-comment">
						<!-- User image -->
						<div class="media-left">
							<div class="image">
								<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4" alt="">
							</div>
						</div>
						<!-- Content -->
						<div class="media-content">
							<a href="#">David Kim</a>
							<span class="time">15 minutes ago</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							<!-- Actions -->
							<div class="controls">
								<div class="like-count">
									<i data-feather="thumbs-up"></i>
									<span>0</span>
								</div>
								<div class="reply">
									<a href="#">Reply</a>
								</div>
							</div>
						</div>
						<!-- Right side dropdown -->
						<div class="media-right">
							<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="more-vertical"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="x"></i>
												<div class="media-content">
													<h3>Hide</h3>
													<small>Hide this comment.</small>
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>Report this comment.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Nested Comment -->

				</div>
				<!-- Right side dropdown -->
				<div class="media-right">
					<!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
					<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
						<div>
							<div class="button">
								<i data-feather="more-vertical"></i>
							</div>
						</div>
						<div class="dropdown-menu" role="menu">
							<div class="dropdown-content">
								<a class="dropdown-item">
									<div class="media">
										<i data-feather="x"></i>
										<div class="media-content">
											<h3>Hide</h3>
											<small>Hide this comment.</small>
										</div>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<div class="media">
										<i data-feather="flag"></i>
										<div class="media-content">
											<h3>Report</h3>
											<small>Report this comment.</small>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Comment -->

			<!-- Comment -->
			<div class="media is-comment">
				<!-- User image -->
				<div class="media-left">
					<div class="image">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
					</div>
				</div>
				<!-- Content -->
				<div class="media-content">
					<a href="#">Rolf Krupp</a>
					<span class="time">9 hours ago</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Exercitation ullamco laboris consequat.</p>
					<!-- Actions -->
					<div class="controls">
						<div class="like-count">
							<i data-feather="thumbs-up"></i>
							<span>2</span>
						</div>
						<div class="reply">
							<a href="#">Reply</a>
						</div>
					</div>

					<!-- Nested Comment -->
					<div class="media is-comment">
						<!-- User image -->
						<div class="media-left">
							<div class="image">
								<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
							</div>
						</div>
						<!-- Content -->
						<div class="media-content">
							<a href="#">Elise Walker</a>
							<span class="time">8 hours ago</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							<!-- Actions -->
							<div class="controls">
								<div class="like-count">
									<i data-feather="thumbs-up"></i>
									<span>0</span>
								</div>
								<div class="reply">
									<a href="#">Reply</a>
								</div>
							</div>
						</div>
						<!-- Right side dropdown -->
						<div class="media-right">
							<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="more-vertical"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="x"></i>
												<div class="media-content">
													<h3>Hide</h3>
													<small>Hide this comment.</small>
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>Report this comment.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Nested Comment -->

					<!-- Nested Comment -->
					<div class="media is-comment">
						<!-- User image -->
						<div class="media-left">
							<div class="image">
								<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
							</div>
						</div>
						<!-- Content -->
						<div class="media-content">
							<a href="#">Rolf Krupp</a>
							<span class="time">7 hours ago</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							<!-- Actions -->
							<div class="controls">
								<div class="like-count">
									<i data-feather="thumbs-up"></i>
									<span>1</span>
								</div>
								<div class="reply">
									<a href="#">Reply</a>
								</div>
							</div>
						</div>
						<!-- Right side dropdown -->
						<div class="media-right">
							<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="more-vertical"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="x"></i>
												<div class="media-content">
													<h3>Hide</h3>
													<small>Hide this comment.</small>
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>Report this comment.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Nested Comment -->

					<!-- Nested Comment -->
					<div class="media is-comment">
						<!-- User image -->
						<div class="media-left">
							<div class="image">
								<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
							</div>
						</div>
						<!-- Content -->
						<div class="media-content">
							<a href="#">Elise Walker</a>
							<span class="time">6 hours ago</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							<!-- Actions -->
							<div class="controls">
								<div class="like-count">
									<i data-feather="thumbs-up"></i>
									<span>0</span>
								</div>
								<div class="reply">
									<a href="#">Reply</a>
								</div>
							</div>
						</div>
						<!-- Right side dropdown -->
						<div class="media-right">
							<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="more-vertical"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="x"></i>
												<div class="media-content">
													<h3>Hide</h3>
													<small>Hide this comment.</small>
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>Report this comment.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Nested Comment -->

				</div>
				<!-- Right side dropdown -->
				<div class="media-right">
					<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
						<div>
							<div class="button">
								<i data-feather="more-vertical"></i>
							</div>
						</div>
						<div class="dropdown-menu" role="menu">
							<div class="dropdown-content">
								<a class="dropdown-item">
									<div class="media">
										<i data-feather="x"></i>
										<div class="media-content">
											<h3>Hide</h3>
											<small>Hide this comment.</small>
										</div>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<div class="media">
										<i data-feather="flag"></i>
										<div class="media-content">
											<h3>Report</h3>
											<small>Report this comment.</small>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Comment -->

			<!-- Comment -->
			<div class="media is-comment">
				<!-- User image -->
				<div class="media-left">
					<div class="image">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">
					</div>
				</div>
				<!-- Content -->
				<div class="media-content">
					<a href="#">Lana Henrikssen</a>
					<span class="time">10 hours ago</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
					<!-- Comment actions -->
					<div class="controls">
						<div class="like-count">
							<i data-feather="thumbs-up"></i>
							<span>5</span>
						</div>
						<div class="reply">
							<a href="#">Reply</a>
						</div>
					</div>
				</div>
				<!-- Right side dropdown -->
				<div class="media-right">
					<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
						<div>
							<div class="button">
								<i data-feather="more-vertical"></i>
							</div>
						</div>
						<div class="dropdown-menu" role="menu">
							<div class="dropdown-content">
								<a class="dropdown-item">
									<div class="media">
										<i data-feather="x"></i>
										<div class="media-content">
											<h3>Hide</h3>
											<small>Hide this comment.</small>
										</div>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<div class="media">
										<i data-feather="flag"></i>
										<div class="media-content">
											<h3>Report</h3>
											<small>Report this comment.</small>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Comment -->

		</div>
		<!-- /Comments body -->

		<!-- Comments footer -->
		<div class="card-footer">
			<div class="media post-comment has-emojis">
				<!-- Comment Textarea -->
				<div class="media-content">
					<div class="field">
						<p class="control">
							<textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
						</p>
					</div>
					<!-- Additional actions -->
					<div class="actions">
						<div class="image is-32x32">
							<img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" data-user-popover="0" alt="">
						</div>
						<div class="toolbar">
							<div class="action is-auto">
								<i data-feather="at-sign"></i>
							</div>
							<div class="action is-emoji">
								<i data-feather="smile"></i>
							</div>
							<div class="action is-upload">
								<i data-feather="camera"></i>
								<input type="file">
							</div>
							<a class="button is-solid primary-button raised">Post Comment</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Comments footer -->
	</div>
	<!-- /Post #1 Comments -->
</div>
<?php if (!empty($script)) : ?>
	<script type="text/javascript">
		$(document).ready(function() {
			<?php echo $script ?>
		});
	</script>
<?php endif; ?>