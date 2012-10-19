<?php /* Smarty version Smarty-3.1.7, created on 2012-10-15 12:00:18
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/settings/all_tips.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1414697375507bde728297a9-60190572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c37c6e87e114ab315e8244aa130cb853061c5f5' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/settings/all_tips.tpl',
      1 => 1350295214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414697375507bde728297a9-60190572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507bde7293a47',
  'variables' => 
  array (
    'tips' => 0,
    'tip' => 0,
    'user_session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507bde7293a47')) {function content_507bde7293a47($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><ul class="nav nav-pills">
	<li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
admin/settings/tips">My Tips</a></li>
	<li class="active"><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
admin/settings/all_tips">All Tips</a></li>
</ul>
<h2><legend>All Tips</legend></h2>
<p><a class="btn btn-success" data-toggle="modal" href="#myModal">Give A Tip</a></p>
<br>
<?php if (($_smarty_tpl->tpl_vars['tips']->value)){?>
<?php  $_smarty_tpl->tpl_vars['tip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tips']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tip']->key => $_smarty_tpl->tpl_vars['tip']->value){
$_smarty_tpl->tpl_vars['tip']->_loop = true;
?>
	<blockquote>
	<?php if ($_smarty_tpl->tpl_vars['tip']->value->user_id==$_smarty_tpl->tpl_vars['user_session']->value){?>
		<a href='<?php echo site_url("admin/settings/delete_tip/".($_smarty_tpl->tpl_vars['tip']->value->id));?>
' class="close close-tip" onclick="return confirm('Are you sure you want to delete?')">×</a>
	<?php }?>
	  <p><?php echo $_smarty_tpl->tpl_vars['tip']->value->tip;?>
</p>
	  <small><?php echo $_smarty_tpl->tpl_vars['tip']->value->username;?>
 <?php echo twitter_time_format($_smarty_tpl->tpl_vars['tip']->value->created_at);?>
</small>
	</blockquote>
<?php } ?>
<?php }else{ ?>
	<blockquote>
	  <p>You have not yet posted any farming tips. Start posting by clicking on the new tip button above</p>
	  <small>M-Farm LTD.</small>
	</blockquote>
<?php }?>

<!-- Modal window here -->
<div class="modal hide fade" id="myModal">
  <form action="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
admin/settings/tips" method="post">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Share Farming Tip</h3>
  </div>
  <div class="modal-body">
  	<div id="" class="control-group">
		<div id="" class="controls">
			<label class="control-label">Share A Tip:</label>
			<textarea name="tip" class="input-xlarge span5" rows="5"><?php echo set_value('tip');?>
</textarea>
		</div><!-- /controls-->
	</div><!-- /control-group -->
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal" >Close</a>
    <input type="submit" class="btn btn-success" value="Save changes"/>
  </div>
  </form>
</div><?php }} ?>