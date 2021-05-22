<div class="container">
	
	<!--Container-->
	<div class="login-container">
		<div class="columns is-vcentered">
			<div class="column is-6 image-column">
				<!--Illustration-->
				<img class="light-image login-image" src="assets/img/illustrations/login/login.svg" alt="">
				<img class="dark-image login-image" src="assets/img/illustrations/login/login-dark.svg" alt="">
			</div>
			<div class="column is-6">

				<div class="login-page-header">
					<img src="<?php echo base_url() ?>uploads/imp/MicrosoftTeams-image.png" height="20" class='social-icon' />
				</div>
				<?php if (!empty($fail)) : ?>
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
							toastr.error('<?php echo $fail ?>')
						});
					</script>
				<?php endif; ?>
				<?php echo form_open(site_url("register"), array("class" => "form-horizontal")) ?>
				<!--Form-->
				<div class="login-form">
					<div class="form-panel">
						<div class="field">
							<label>Full Name</label>
							<div class="control">
								<input type="text" class="input" name="first_name" id="name-in" placeholder="Enter your first name" value="<?php if (isset($first_name)) echo $first_name ?>">
								<input type="text" class="input" name="last_name" id="name-in" placeholder="Enter your last name" value="<?php if (isset($last_name)) echo $last_name ?>">

							</div>
						</div>
						<div class="field">
							<label>Email</label>
							<div class="control">
								<input type="text" class="input" placeholder="Enter your email address" id="email-in" name="email" value="<?php if (isset($email)) echo $email; ?>">
							</div>
						</div>
						<div class="field">
							<label>Username</label>
							<div class="control">
								<input type="text" class="input" placeholder="Enter your email address" id="username" name="username" value="<?php if (isset($username)) echo $username; ?>">
								<div id="username_check"></div>
							</div>
						</div>
						<div class="field">
							<label>Password</label>
							<div class="control">
								<input type="password" class="input" placeholder="Enter your password" id="password-in" name="password">
							</div>
						</div>
						<div class="field">
							<label>Confirm Password</label>
							<div class="control">
								<input type="password" class="input" placeholder="Enter your password" id="cpassword-in" name="password2">
							</div>
						</div>

					</div>

					<?php foreach ($fields->result() as $r) : ?>
						<div class="form-group">

							<label for="name-in" class="col-md-3 label-heading"><?php echo $r->name ?> <?php if ($r->required) : ?>*<?php endif; ?></label>
							<div class="col-md-9">
								<?php if ($r->type == 0) : ?>
									<input type="text" class="form-control" id="name-in" name="cf_<?php echo $r->ID ?>" value="<?php if (isset($_POST['cf_' . $r->ID])) echo $_POST['cf_' . $r->ID] ?>">
								<?php elseif ($r->type == 1) : ?>
									<textarea name="cf_<?php echo $r->ID ?>" rows="8" class="form-control"><?php if (isset($_POST['cf_' . $r->ID])) echo $_POST['cf_' . $r->ID] ?></textarea>
								<?php elseif ($r->type == 2) : ?>
									<?php $options = explode(",", $r->options); ?>
									<?php if (count($options) > 0) : ?>
										<?php foreach ($options as $k => $v) : ?>
											<div class="form-group"><input type="checkbox" name="cf_cb_<?php echo $r->ID ?>_<?php echo $k ?>" value="1" <?php if (isset($_POST['cf_cb_' . $r->ID . "_" . $k])) echo "checked" ?>> <?php echo $v ?></div>
										<?php endforeach; ?>
									<?php endif; ?>
								<?php elseif ($r->type == 3) : ?>
									<?php $options = explode(",", $r->options); ?>
									<?php if (count($options) > 0) : ?>
										<?php foreach ($options as $k => $v) : ?>
											<div class="form-group"><input type="radio" name="cf_radio_<?php echo $r->ID ?>" value="<?php echo $k ?>" <?php if (isset($_POST['cf_radio_' . $r->ID]) && $_POST['cf_radio_' . $r->ID] == $k) echo "checked" ?>> <?php echo $v ?></div>
										<?php endforeach; ?>
									<?php endif; ?>
								<?php elseif ($r->type == 4) : ?>
									<?php $options = explode(",", $r->options); ?>
									<?php if (count($options) > 0) : ?>
										<select name="cf_<?php echo $r->ID ?>" class="form-control">
											<?php foreach ($options as $k => $v) : ?>
												<option value="<?php echo $k ?>" <?php if (isset($_POST['cf_' . $r->ID]) && $_POST['cf_' . $r->ID] == $k) echo "selected" ?>><?php echo $v ?></option>
											<?php endforeach; ?>
										</select>
									<?php endif; ?>
								<?php endif; ?>
								<span class="help-text"><?php echo $r->help_text ?></span>
							</div>
						</div>
					<?php endforeach; ?>


					<?php if (!$this->settings->info->disable_captcha) : ?>
						<div class="form-group">

							<label for="name-in" class="col-md-3 label-heading"><?php echo lang("ctn_220") ?></label>
							<div class="col-md-9">
								<p><?php echo $cap['image'] ?></p>
								<input type="text" class="form-control" id="captcha-in" name="captcha" placeholder="<?php echo lang("ctn_306") ?>" value="">
							</div>
						</div>
					<?php endif; ?>
					<?php if ($this->settings->info->google_recaptcha) : ?>
						<div class="form-group">

							<label for="name-in" class="col-md-3 label-heading"><?php echo lang("ctn_220") ?></label>
							<div class="col-md-9">
								<div class="g-recaptcha" data-sitekey="<?php echo $this->settings->info->google_recaptcha_key ?>"></div>
							</div>
						</div>
					<?php endif ?>
					<div class="control">
						<button type="submit" name="s" onload="myFunction()" class="button is-solid primary-button raised is-rounded is-fullwidth">Register</button>
					</div>

					<div class="account-link has-text-centered">
						<a href="<?php echo site_url("login") ?>">You already have an account? Sign Up</a>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>