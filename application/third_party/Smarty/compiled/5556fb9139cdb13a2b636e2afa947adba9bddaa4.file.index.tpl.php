<?php /* Smarty version Smarty-3.1.7, created on 2012-09-21 11:52:55
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/products/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:471534735505c2ae76ac419-35454814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5556fb9139cdb13a2b636e2afa947adba9bddaa4' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/products/index.tpl',
      1 => 1347964745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471534735505c2ae76ac419-35454814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505c2ae7787b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c2ae7787b4')) {function content_505c2ae7787b4($_smarty_tpl) {?><div class='page-header'>
	<div class='pull-right'>
		<div class='btn-group'>
			<a href="<?php echo site_url('products/add_product');?>
" class='btn'><i class='icon-plus'></i> Add Product</a>
			<a href="<?php echo site_url('products/add_category');?>
" class='btn'><i class='icon-list-alt'></i> Categories</a>
			<button class="btn dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="pull-right icon-plus"></i> Add Category</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i> List Categories</a>
				</li>
			</ul>
		</div>
	</div>
	<h2>Products</h2>
</div>
<table id='example' class='table table-bordered table-striped'>
<thead>
	<th>Name</th>
	<th>Alias</th>
	<th>Online</th>
	<th>Action</th>
</thead>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value->product_name;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value->product_alias;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value->deleted ? 'inActive' : 'Active';?>
</td>
		<td>
			<a href="<?php echo site_url("admin/products/view/".($_smarty_tpl->tpl_vars['row']->value->id));?>
"><i class="icon-eye-open"></i></a>
			<a href='<?php echo site_url("admin/products/delete/".($_smarty_tpl->tpl_vars['row']->value->id));?>
'><i class="pull-right icon-remove"></i></a>
		</td>
	</tr>
<?php } ?>
</table><?php }} ?>