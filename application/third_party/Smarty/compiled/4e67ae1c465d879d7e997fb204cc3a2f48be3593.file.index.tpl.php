<?php /* Smarty version Smarty-3.1.7, created on 2012-10-24 14:41:18
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/dashboard/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20772001785087e1eedba992-93219889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e67ae1c465d879d7e997fb204cc3a2f48be3593' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/dashboard/index.tpl',
      1 => 1347979222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20772001785087e1eedba992-93219889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'posts' => 0,
    'tips' => 0,
    'orders' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5087e1eee4ec5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5087e1eee4ec5')) {function content_5087e1eee4ec5($_smarty_tpl) {?><div class="hero-unit">
	<h1>Welcome to Mfarm</h1>
</div>
<hr>
<div class="row-fluid">
<span class ="label label-info"> <?php echo count($_smarty_tpl->tpl_vars['users']->value);?>
 users</span>
<span class ="label label-info"> <?php echo count($_smarty_tpl->tpl_vars['posts']->value);?>
 posts</span>
<span class ="label label-info"> <?php echo count($_smarty_tpl->tpl_vars['tips']->value);?>
 tips</span>
<span class ="label label-info"> <?php echo count($_smarty_tpl->tpl_vars['orders']->value);?>
 orders</span>
</div><?php }} ?>