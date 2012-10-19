<?php /* Smarty version Smarty-3.1.7, created on 2012-10-10 19:58:18
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/posts/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12428698445075b73aee61f8-04380435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '522cb93fa5336a2ccb5245e833d6691e5d3aef0d' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/posts/index.tpl',
      1 => 1348732577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12428698445075b73aee61f8-04380435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075b73b0f307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075b73b0f307')) {function content_5075b73b0f307($_smarty_tpl) {?><div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href="<?php echo site_url('admin/posts/create_new');?>
" class="btn btn-small"><i class="icon-plus-sign"></i> New Post</a>
			<a class="btn btn-small" href="<?php echo site_url('admin/posts/');?>
">All</a>
			<a class="btn btn-small" href="<?php echo site_url('admin/posts/status/live');?>
">Live</a>
			<a class="btn btn-small" href="<?php echo site_url('admin/posts/status/pending');?>
">Pending</a>
		</div>
	</div>
	<h2>Your Produce</h2>
</div>

<form name="prices" id="prices" method="post" action="<?php echo site_url('admin/posts/change_status');?>
">
<?php if (($_smarty_tpl->tpl_vars['posts']->value)){?>
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<td><input type="checkbox" id="checkall" value="check all"></td>
			<th>Date Posted</th>
			<th>Name</th>
			<th>Weight</th>
			<th>Unit Price</th>
			<th>Farmer</th>
			<th>Phone</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		<tr>
			<td><input type="checkbox" id="input" name="status[]" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"></td>
			<td><?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['post']->value->created_at));?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
</td>
			<td>KES <?php echo $_smarty_tpl->tpl_vars['post']->value->unit_price;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->phone;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->post_status;?>
</td>
			<td>
				<a href='<?php echo site_url("admin/posts/edit/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' class='btn btn-small' title="edit">
					<i class="icon-pencil "></i></a>
				<a href='<?php echo site_url("admin/posts/delete_post/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' class='btn btn-small' title="delete" class="delete">
					<i class="icon-trash "></i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<div class="page-footer">
	<div class="pull-left">
		<div class="btn-group">
			<input class="btn" name="submit" type="submit" value="Make Pending">
			<input class="btn" name="submit" type="submit" value="Take Online">
		</div>
	</div>
</div>
</form>
<?php }else{ ?>
	<legend align="center">Welcome, To add a new post click on New Post above.</legend>
<?php }?>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#checkall').toggle(function(){
        $('input:checkbox').attr('checked','checked');
        $(this).val('uncheck all')
    },function(){
        $('input:checkbox').removeAttr('checked');
        $(this).val('check all');
    });
});
</script><?php }} ?>