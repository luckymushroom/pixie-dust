<div class="tabbable tabs-right">
	<ul class="nav nav-pills">
		<li class="active"><a href="#1" data-toggle="tab">Profile</a></li>
		<li><a href="#2" data-toggle="tab">Photo</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="1">
	<form id="edit-profile" class="form-horizontal well" method="post" action="<?=base_url();?>settings/profile">
	<fieldset>
		<legend>Your Profile</legend>
		<div class="control-group">
			<label class="control-label" for="input01">Name</label>
			<div class="controls">
				<input type="text" name="username" class="input-xlarge" id="input01" value="<?=$user->username;?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Phone</label>
			<div class="controls">
				<input type="text" name="phone" class="input-xlarge" id="input01" value="<?=$user->phone;?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Email</label>
			<div class="controls">
				<input type="text" name="email" disabled class="input-xlarge" id="input01" value="<?=$user->email;?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="textarea">Biography</label>
			<div class="controls">
				<textarea class="input-xlarge" id="textarea" rows="4" name="biography"><?=$user->biography;?></textarea>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Marital Status</label>
			<div class="controls">
				<input type="text" id="dp" name="marital_status" class="input-xlarge" id="input01" value="<?=$user->marital_status;?>" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Date of Birth</label>
			<div class="controls">
				<input type="text" id="dp" name="date_of_birth" class="input-xlarge" id="input01" value="<?=$user->date_of_birth;?>" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Gender</label>
			<div class="controls">
			<label class="radio">
				<input type="radio" name="gender" value="Male" <?php if ($user->gender == 'Male'){ echo 'checked'; } ?> />
				Male
				</label>
				<label class="radio">
				<input type="radio" name="gender" value="Female" <?php if ($user->gender == 'Female'){ echo 'checked'; } ?>/>Female
			</label>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="optionsCheckbox">Public Profile</label>
			<div class="controls">
				<label class="radio">
				<input type="radio" name="public" value="1" <?php if ($user->is_public){ echo 'checked'; } ?> />
				Public
				</label>
				<label class="radio">
				<input type="radio" name="public" value="0" <?php if (!$user->is_public){ echo 'checked'; } ?>/>Private
			</label>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success">Save</button> <button class="btn">Cancel</button>
		</div>
	</fieldset>
	</form>
	</div>
	<div class="tab-pane" id="2">
		<legend>Profile Pic</legend>
		<?php if ($user->avatar != 'default_avatar.jpg'): ?>
			<img src="<?=base_url();?>media/avatars/<?=$user->avatar;?>" alt="<?=$user->avatar;?>" class="thumbnail">
		<?php endif ?>
		<br>
		<form class="well" action="<?=base_url();?>settings/upload_photo" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="fileInput">Upload Profile Picture:</label>
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="user_avatar">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>
	</div>
	</div>
</div>