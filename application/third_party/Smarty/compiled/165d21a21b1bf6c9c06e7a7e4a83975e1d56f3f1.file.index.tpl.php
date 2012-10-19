<?php /* Smarty version Smarty-3.1.7, created on 2012-10-10 19:58:16
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/dashboard/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14537395935075b738280ad5-66980267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '165d21a21b1bf6c9c06e7a7e4a83975e1d56f3f1' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/dashboard/index.tpl',
      1 => 1345834737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14537395935075b738280ad5-66980267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'tips' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075b73835f63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075b73835f63')) {function content_5075b73835f63($_smarty_tpl) {?><div class="hero-unit">
	<h1>Welcome to Mfarm</h1>
</div>
<hr>
<div class="row-fluid">
	<div class="span2">
	  <h4>Total Posts</h4>
	  <p><a href="<?php echo site_url('/posts/');?>
" class="badge"><?php echo count($_smarty_tpl->tpl_vars['posts']->value);?>
</a></p>
	</div>
	<div class="span2">
	  <h4>Users Today</h4>
	  <p><a href="users.html" class="badge">8</a></p>
	</div>
	<div class="span2">
	  <h4>Orders</h4>
	  <p><a href="users.html" class="badge">2</a></p>
	</div>
	<div class="span2">
	  <h4>Tips</h4>
	  <p><a href="<?php echo site_url('/settings/tips/');?>
" class="badge"><?php echo count($_smarty_tpl->tpl_vars['tips']->value);?>
</a></p>
	</div>
	<div class="span2">
	  <h4>Planted</h4>
	  <p><a href="<?php echo site_url('/settings/tips/');?>
" class="badge"><?php echo count($_smarty_tpl->tpl_vars['tips']->value);?>
</a></p>
	</div>
	<div class="span2">
	  <h4>Reports</h4>
	  <p><a href="<?php echo site_url('/settings/tips/');?>
" class="badge"><?php echo count($_smarty_tpl->tpl_vars['tips']->value);?>
</a></p>
	</div>
</div><?php }} ?>