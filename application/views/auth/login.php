<div class="span5 offset3">
<!-- Login Form here -->
<h2>Login In</h2>
<legend>Have an Account? Sign In Here</legend>
<form action="<?=base_url();?>auth/login" autocomplete="off" method="post" class="well" id="login">
	<input type="text" name="email" value="<?=set_value('email');?>" placeholder="Email" rel="popover" data-content="Enter your email address." data-original-title="Email" required="required" class="input-xlarge">
    <input type="password" name="password" value="" placeholder="Password" class="input-xlarge"  rel="popover" data-content="Quickly,Nobody is looking enter password." data-original-title="Password" required>
    <label class="checkbox"><?php echo form_checkbox('remember', '1', FALSE);?>Remember Me</label>
    <?php echo form_submit('submit', 'Sign In','class="btn btn-primary"');?>
</form>
<a href="<?=site_url('auth/forgot_password');?>" title="Forgotten Password?">Forgotten Password?</a>

</div><!-- / yield -->