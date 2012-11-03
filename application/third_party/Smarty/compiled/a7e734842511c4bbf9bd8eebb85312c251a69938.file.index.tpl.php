<?php /* Smarty version Smarty-3.1.7, created on 2012-10-30 11:53:37
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/crop_reports/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2223891105075b76f58cfe8-90552364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7e734842511c4bbf9bd8eebb85312c251a69938' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/crop_reports/index.tpl',
      1 => 1351587216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2223891105075b76f58cfe8-90552364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075b76f6aca0',
  'variables' => 
  array (
    'locations' => 0,
    'location' => 0,
    'products' => 0,
    'product' => 0,
    'year' => 0,
    'month' => 0,
    'day' => 0,
    'to_year' => 0,
    'to_month' => 0,
    'to_day' => 0,
    'reports' => 0,
    'report' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075b76f6aca0')) {function content_5075b76f6aca0($_smarty_tpl) {?><div class="row-fluid">
<div class='page-header'>
    <div class='pull-right'>
        <div class='btn-group'>
            <a href="<?php echo site_url('admin/blog');?>
" class='btn btn-small'><i class='icon-bookmark'></i> Back to Blog</a>
        </div>
    </div>
    <h3>Crop Reports</h3>
</div>
</div>
<div class="row-fluid">
<div class="span3 well sidebar">
	<form class='form' method='post' action="<?php echo site_url('admin/crop_reports');?>
">
		<legend>Filter</legend>
		<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['location']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo form_dropdown('location',$_smarty_tpl->tpl_vars['locations']->value,$_tmp1);?>

		<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo form_dropdown('product',$_smarty_tpl->tpl_vars['products']->value,$_tmp2);?>

				<input name='year' type='text' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['year']->value)===null||$tmp==='' ? date('Y') : $tmp);?>
" class='input-text span4'>
				<input name='month' type='text' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['month']->value)===null||$tmp==='' ? date('m') : $tmp);?>
" class='input-text span3'>
				<input name='day' type='text' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['day']->value)===null||$tmp==='' ? date('d') : $tmp);?>
" class='input-text span2'>
				<span>(from)</span>

				<input name='to_year' type='text' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['to_year']->value)===null||$tmp==='' ? date('Y') : $tmp);?>
" class='input-text span4'>
				<input name='to_month' type='text' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['to_month']->value)===null||$tmp==='' ? date('m') : $tmp);?>
" class='input-text span3'>
				<input name='to_day' type='text' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['to_day']->value)===null||$tmp==='' ? date('d') : $tmp);?>
" class='input-text span2'>
				<span>(to)</span>

		<button type='submit' class='btn btn-small'>Filter</button>
	</form>
</div>

<div class="span9">
<table id='example' class='table table-bordered'>
	<thead>
		<tr>
			<th>Date</th>
			<th>User</th>
			<th>Crop</th>
			<th>Report</th>
			<th>Location</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['report']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['report']->key => $_smarty_tpl->tpl_vars['report']->value){
$_smarty_tpl->tpl_vars['report']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['report']->value->created_at;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['report']->value->last_name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['report']->value->product_name;?>
</td>
			<td><?php echo character_limiter($_smarty_tpl->tpl_vars['report']->value->remarks,70);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['report']->value->location_name;?>
</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</div><?php }} ?>