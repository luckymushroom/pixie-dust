<?php /* Smarty version Smarty-3.1.7, created on 2012-09-20 15:24:39
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/posts/aggregated.tpl" */ ?>
<?php /*%%SmartyHeaderCode:792463050505b0b07c7ff45-07501454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d66717cc1f75fa7c3e2551072cdb201ce6e32c' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/posts/aggregated.tpl',
      1 => 1347455076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792463050505b0b07c7ff45-07501454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_session' => 0,
    'username' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505b0b07d958a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b0b07d958a')) {function content_505b0b07d958a($_smarty_tpl) {?><div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href='<?php echo site_url("/users/".($_smarty_tpl->tpl_vars['user_session']->value)."/farmers");?>
' class="btn btn-success">
				<i class="icon-chevron-left icon-white"></i> 
				Farmers
			</a>
			<button class="btn btn-success">
				<i class="icon-print icon-white"></i> Save Page As
			</button>
			<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="pull-right icon-eye-open"></i> HTML</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i> PDF</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i>Spreadsheet</a>
				</li>
			</ul>
		</div>
	</div>
	<h2>Posts: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h2>
</div>
<!-- Page header -->
<!-- ends here -->
<form name="prices" id="prices" method="post" action="<?php echo site_url('posts/change_status');?>
">
<?php if (($_smarty_tpl->tpl_vars['posts']->value)){?>
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<th>Date Posted</th>
			<th>Name</th>
			<th>Total Weight</th>
			<th>Entries</th>
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
			<td><?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['post']->value->date_created));?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->total_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['post']->value->entries;?>
</td>
			<td>
				<ul class="btn-group">
				<a class="btn" href='<?php echo base_url("admin/posts/".($_smarty_tpl->tpl_vars['post']->value->product_id)."/products/".($_smarty_tpl->tpl_vars['user_session']->value)."/users");?>
' title="edit"><i class="icon-eye-open"></i></a>
				<a class="btn" href="#" title="take online"><i class="icon-chevron-up"></i></a>
				<a class="btn" href="#" title="take offline"><i class="icon-chevron-down"></i></a>
				</ul>
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
	<legend align="center">Welcome, No posts added yet.</legend>
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