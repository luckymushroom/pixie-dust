<?php /* Smarty version Smarty-3.1.7, created on 2012-10-15 15:19:38
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/settings/manage_tips.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057810286507c0d5e03f866-61613467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39825c1c5659086ff6dccead277d8ba32cda0afc' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/settings/manage_tips.tpl',
      1 => 1350307177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057810286507c0d5e03f866-61613467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507c0d5e11a1d',
  'variables' => 
  array (
    'tips' => 0,
    'tip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507c0d5e11a1d')) {function content_507c0d5e11a1d($_smarty_tpl) {?><div class='page-header'><h2>Manage Tips</h2></div>
<?php if (($_smarty_tpl->tpl_vars['tips']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['tip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tip']->key => $_smarty_tpl->tpl_vars['tip']->value){
$_smarty_tpl->tpl_vars['tip']->_loop = true;
?>
    	<blockquote>
    		<p><?php echo $_smarty_tpl->tpl_vars['tip']->value->tip;?>
</p>
    		<small><?php echo $_smarty_tpl->tpl_vars['tip']->value->username;?>
 <?php echo twitter_time_format($_smarty_tpl->tpl_vars['tip']->value->created_at);?>
</small>
    	</blockquote>
    <?php } ?>
<?php }else{ ?>
	<blockquote>
		<p>No tips just yet, lets wait and see if the farmers will start sharing...</p>
		<small>Someone famous</small>
	</blockquote>
<?php }?>
<?php }} ?>