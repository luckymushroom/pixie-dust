<?php /* Smarty version Smarty-3.1.7, created on 2012-10-15 15:15:18
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/prices/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:387669596507c0c66550326-44704326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccec755410254f8fc0239337d4f2a73634d43f74' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/prices/index.tpl',
      1 => 1347615617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387669596507c0c66550326-44704326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prices' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507c0c6666a8b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507c0c6666a8b')) {function content_507c0c6666a8b($_smarty_tpl) {?><div class="page-header">
<h2>Market Prices</h2>
    <span id='result'></span>
</div>
<!-- ends here -->
<form name="prices" id="prices" method="post" action="<?php echo site_url('admin/prices/change_status');?>
">
<?php if (($_smarty_tpl->tpl_vars['prices']->value)){?>
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <td><input type="checkbox" id="checkall" value="check all"></td>
            <th>Name</th>
            <th>Weight</th>
            <th>Unit Price</th>
            <th>Date Posted</th>
            <th>Collector</th>
            <th>Location</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value){
$_smarty_tpl->tpl_vars['price']->_loop = true;
?>
        <tr>
            <td><input type="checkbox" id="input" name="status[]" value="<?php echo $_smarty_tpl->tpl_vars['price']->value->id;?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->product_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->crop_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['price']->value->crop_unit;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->crop_price;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->crop_date;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->username;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->location_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['price']->value->status=='live' ? 'Online' : 'Offline';?>
</td>
            <td>
                &nbsp;
                <a href='<?php echo site_url("admin/prices/view/".($_smarty_tpl->tpl_vars['price']->value->id));?>
' title="view"><i class="icon-eye-open"></i></a>
                &nbsp;
                <a href='<?php echo site_url("admin/prices/delete/".($_smarty_tpl->tpl_vars['price']->value->id));?>
' title="remove"><i class="icon-remove"></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<div class="page-footer">
    <div class="pull-left">
        <div class="btn-group">
            <input class="btn btn-small" name="submit" type="submit" value="Make Pending">
            <input class="btn btn-small" name="submit" type="submit" value="Take Online">
        </div>
    </div>
</div>
</form>
<?php }else{ ?>
    <legend align="center">Welcome, No Prices Collected Today.</legend>
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