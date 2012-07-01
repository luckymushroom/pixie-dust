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
            <label class="control-label">Email:</label>
            <div class="controls"><?php echo form_input($email);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Phone:</label>
            <div class="controls">
                  <?php echo form_input($phone);?></div>
            </div>

            <div class="control-group">
            <label class="control-label">Password:</label>
            <div class="controls"><?php echo form_input($password);?></div>
            </div>

            <div class='form-actions'>
                  <a href="<?=site_url('auth/login');?>" class="btn btn-warning" title="Sign In">Cancel</a>
                  <?php echo form_submit('submit', 'Create User','class="btn btn-success"');?>
            </div>
      <?php echo form_close();?>
</div>