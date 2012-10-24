<?php /* Smarty version Smarty-3.1.7, created on 2012-10-24 14:39:57
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/auth/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8227228495087e19dd40474-27746533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319ca5f3e15a85b29a6fc73197d32aac776a46b1' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/auth/login.tpl',
      1 => 1348063390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8227228495087e19dd40474-27746533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5087e19defe52',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5087e19defe52')) {function content_5087e19defe52($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class='page-header'>
    <a href="<?php echo site_url('auth/create_user');?>
" class="btn btn-small pull-right" title="Create Account">Create Account</a>
    <h3>Please Sign In</h3>
</div>

<!-- Login Form here -->
<form action="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
auth/login/" autocomplete="off" method="post">
    <?php echo form_input($_smarty_tpl->tpl_vars['email']->value);?>

    <?php echo form_input($_smarty_tpl->tpl_vars['password']->value);?>

    <label class="checkbox"><?php echo form_checkbox('remember','1',false);?>
Remember Me</label>
    <?php echo form_submit('submit','Sign In','class="btn btn-info"');?>

</form>
<a href="<?php echo site_url('auth/forgot_password');?>
" title="Forgotten Password?">Forgotten Password?</a>
<!-- Form ends here --><?php }} ?>