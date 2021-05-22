<div class="container">
	<div class="row">
		<div class="col-md-5 center-block-e">

			<div class="login-page-header">
				<?php echo lang("ctn_174") ?>
			</div>
			<div class="login-page-z" id="for_pass">
				<p> <?php echo lang("ctn_175") ?></p>

				<?php echo form_open(site_url("login/forgotpw_pro/")) ?>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" name="email" class="form-control">
				</div><br />
				<div class="field">
					<div class="control">
						<button type="submit" class="button is-solid primary-button raised is-rounded is-fullwidth">Submit</button>
					</div>
				</div>
				<?php echo form_close() ?>

				<p class="decent-margin align-center"><a href="<?php echo site_url("login") ?>"> <?php echo lang("ctn_177") ?></a></p>
			</div>

		</div>
	</div>
</div>