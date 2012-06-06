<div class="span10">
      <h2>Create Account</h2>
      <legend>Please enter the users information below.</legend>
      <?php echo form_open("auth/create_user",array('class'=>'form-horizontal well','autocomplete'=>'off'));?>
            <div class="control-group">
            <label class="control-label">First Name:</label>
            <div class="controls"><?php echo form_input($first_name);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Last Name:</label>
            <div class="controls"><?php echo form_input($last_name);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Company:</label>
            <div class="controls"><?php echo form_input($company);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Email:</label>
            <div class="controls"><?php echo form_input($email);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Phone:</label>
            <div class="controls">
                  <?php echo form_input($phone1);?>- <?php echo form_input($phone2);?>- <?php echo form_input($phone3);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Password:</label>
            <div class="controls"><?php echo form_input($password);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Confirm Password:</label>
            <div class="controls"><?php echo form_input($password_confirm);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Account Type:</label>
            <div class="controls">
                  <label class="radio"><input type="radio" name="group" value="2" checked placeholder="">Farmer</label>
                  <label class="radio"><input type="radio" name="group" value="3" placeholder="">Buyer</label>
            </div>
            </div>

            <div class='form-actions'>
                  <?php echo form_submit('submit', 'Create User','class="btn btn-success"');?>
                  <a href="<?=site_url();?>" class="btn btn-warning" title="Sign In">Sign In</a>
            </div>
      <?php echo form_close();?>
</div>