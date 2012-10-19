<?php /* Smarty version Smarty-3.1.7, created on 2012-10-15 15:15:26
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/bulk_sms/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2005732574507c0c6e985126-52094117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40b3ffe4f4b26e46bb06b6d84d3573e2c63db3e' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/bulk_sms/index.tpl',
      1 => 1347966639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2005732574507c0c6e985126-52094117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'numbers' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507c0c6ea56ce',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507c0c6ea56ce')) {function content_507c0c6ea56ce($_smarty_tpl) {?><div class="page-header">
    <h3>Phone Numbers List</h3>
</div>
<table class='table table-bordered' id='example1'>
<thead>
    <th>Number</th>
    <th>Entries</th>
    <th>Actions</th>
</thead>
<tbody>
    <?php  $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['number']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['numbers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['number']->key => $_smarty_tpl->tpl_vars['number']->value){
$_smarty_tpl->tpl_vars['number']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['number']->value->number;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['number']->value->entries;?>
</td>
        <td>
            <a href='<?php echo site_url("admin/bulk_sms/thread/".($_smarty_tpl->tpl_vars['number']->value->number));?>
' class='btn btn-small'><i class='icon-eye-open'></i></a>
            <a href='<?php echo site_url("admin/bulk_sms/add_to_bulk/".($_smarty_tpl->tpl_vars['number']->value->number));?>
' class='btn btn-small'><i class='icon-plus'></i></a>
        </td>
    </tr>
    <?php } ?>
</tbody>
</table>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#example1').dataTable( {
            "sScrollY": "300px",
            "sDom": "frtiS",
            "bDeferRender": true
        } );
    });
</script><?php }} ?>