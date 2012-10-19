<?php /* Smarty version Smarty-3.1.7, created on 2012-09-20 16:28:56
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/auth/create_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358826468505b1a188a5f75-44358743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab40dd205693f2603716314ed334a0fdb240bc5' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/auth/create_user.tpl',
      1 => 1347656393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358826468505b1a188a5f75-44358743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first_name' => 0,
    'last_name' => 0,
    'email' => 0,
    'phone' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505b1a189095a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b1a189095a')) {function content_505b1a189095a($_smarty_tpl) {?><legend>Create Account</legend>
<?php echo form_open('auth/create_user',array('class'=>'form','autocomplete'=>'off'));?>

      <div class="control-group">
      <label class="control-label">First Name:</label>
      <div class="controls"><?php echo form_input($_smarty_tpl->tpl_vars['first_name']->value);?>
</div>
      </div>

      <div class="control-group">
      <label class="control-label">Last Name:</label>
      <div class="controls"><?php echo form_input($_smarty_tpl->tpl_vars['last_name']->value);?>
</div>
      </div>

      <div class="control-group">
      <label class="control-label">Email:</label>
      <div class="controls"><?php echo form_input($_smarty_tpl->tpl_vars['email']->value);?>
</div>
      </div>

      <div class="control-group">
      <label class="control-label">Phone:</label>
        <div class="controls">
            <div class="input-prepend">
            <span class="add-on">+254</span>
                <?php echo form_input($_smarty_tpl->tpl_vars['phone']->value);?>

            </div>
        </div>
      </div>

      <div class="control-group">
      <label class="control-label">Password:</label>
      <div class="controls"><?php echo form_input($_smarty_tpl->tpl_vars['password']->value);?>
</div>
      </div>

      <div class='form-actions'>
            <a href="<?php echo site_url('auth/login');?>
" class="btn btn-warning" title="Sign In">Cancel</a>
            <?php echo form_submit('submit','Create User','class="btn btn-success"');?>

      </div>
<?php echo form_close();?>

<?php }} ?>