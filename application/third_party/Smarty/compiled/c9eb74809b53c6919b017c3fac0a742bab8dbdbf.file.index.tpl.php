<?php /* Smarty version Smarty-3.1.7, created on 2012-09-20 12:41:18
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/orders/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:663934561505ae4be763407-28223314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9eb74809b53c6919b017c3fac0a742bab8dbdbf' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/orders/index.tpl',
      1 => 1348129685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663934561505ae4be763407-28223314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505ae4be8cc89',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505ae4be8cc89')) {function content_505ae4be8cc89($_smarty_tpl) {?><div class='page-header'>
	<div class="btn-toolbar pull-right">
	<div class="btn-group">
		<a href="<?php echo base_url('market');?>
" title="Buy a Product on MFarm" class='btn btn-small'>
			<i class='icon-chevron-left'></i>
			Marketplace</a>
		<a class="btn btn-small" href="<?php echo site_url('orders/status/live');?>
">Live</a>
		<a class="btn btn-small" href="<?php echo site_url('orders/status/pending');?>
">Pending</a>
	</div>
</div>
<h2>Orders</h2>
</div>
<table class="table table-bordered table-striped table-condensed" id="example">
    <thead>
        <tr>
            <th>Date Posted</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Unit Price</th>
            <th>Buyer</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
        <tr>
            <td><?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['order']->value->created_at));?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->product_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->product_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->weight_unit;?>
</td>
            <td>KES <?php echo $_smarty_tpl->tpl_vars['order']->value->unit_price;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->buyer_contact;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->post_status;?>
</td>
            <td>
                <a href='<?php echo site_url("farmer/orders/edit/".($_smarty_tpl->tpl_vars['order']->value->id));?>
' title="edit"><i class="icon-pencil "></i></a>
                &nbsp;
                <a href='<?php echo site_url("farmer/orders/delete/".($_smarty_tpl->tpl_vars['order']->value->id));?>
' title="delete" class="delete"><i class="icon-trash "></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>