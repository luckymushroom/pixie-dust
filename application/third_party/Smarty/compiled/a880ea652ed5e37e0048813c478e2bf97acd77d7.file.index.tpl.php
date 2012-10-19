<?php /* Smarty version Smarty-3.1.7, created on 2012-09-26 15:27:40
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/products/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268704393506302cc65ed57-54368087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a880ea652ed5e37e0048813c478e2bf97acd77d7' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/products/index.tpl',
      1 => 1348130904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268704393506302cc65ed57-54368087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'selection' => 0,
    'select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_506302cc7e078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506302cc7e078')) {function content_506302cc7e078($_smarty_tpl) {?><h1>Products</h1>
<fieldset>
	<legend>Click to Select Crop You Grow</legend>
</fieldset>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<a href="<?php echo site_url("farmer/products/add_crop_setting/".($_smarty_tpl->tpl_vars['product']->value->id));?>
" title="Add Crop <?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
"><span class="badge" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->category_id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</span></a>
<?php } ?>
<br><br>
<legend>Your Crop Selection</legend>
<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value){
$_smarty_tpl->tpl_vars['select']->_loop = true;
?>
	<a href="<?php echo site_url("farmer/products/delete_crop_setting/".($_smarty_tpl->tpl_vars['select']->value->id));?>
" title="Remove Crop <?php echo $_smarty_tpl->tpl_vars['select']->value->product_name;?>
"><span class="badge" data-id="<?php echo $_smarty_tpl->tpl_vars['select']->value->category_id;?>
"><?php echo $_smarty_tpl->tpl_vars['select']->value->product_name;?>
</span>
<?php } ?><?php }} ?>