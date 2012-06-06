<h1>Settings</h1>
<form class="form-horizontal" action="<?=site_url('settings/update_settings');?>" method="post">
	<fieldset>
		<legend>Configure you Settings</legend>
		<div class="control-group">
			<label class="control-label">Notifications</label>
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" name="sms" value="1" <?php echo ($sms) ? 'checked' : '' ; ?>>
					SMS
				</label>
				<label class="checkbox">
					<input type="checkbox" name="email" value="1" <?php echo ($email) ? 'checked' : '';?>>
					Email
				</label>

				<p class="help-block">Get notification for new items.</p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Notification Email</label>
			<div class="controls">
				<input type"email" name="email" placeholder="<?=$user->email;?>" disabled>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Account Type</label>
			<div class="controls">
				<input type"text" name="account" placeholder="Free Account" disabled>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success">Save</button>
			<button type="submit" class="btn">Cancel</button>
		</div>
	</fieldset>
</form>