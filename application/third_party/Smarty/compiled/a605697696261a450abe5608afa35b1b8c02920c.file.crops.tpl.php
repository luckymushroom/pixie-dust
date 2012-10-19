<?php /* Smarty version Smarty-3.1.7, created on 2012-10-19 13:30:45
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/farm/crops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78647166850769c22ccee54-27074529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a605697696261a450abe5608afa35b1b8c02920c' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/farm/crops.tpl',
      1 => 1350646226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78647166850769c22ccee54-27074529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50769c2307a83',
  'variables' => 
  array (
    'user_session' => 0,
    'user_id' => 0,
    'crops' => 0,
    'crop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50769c2307a83')) {function content_50769c2307a83($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="page-header">
    <div class="btn-group pull-right">
        <a href='<?php echo site_url("aggregator/users/".($_smarty_tpl->tpl_vars['user_session']->value)."/".($_smarty_tpl->tpl_vars['user_id']->value));?>
' class='btn btn-small'><i class='icon-chevron-left'>
        </i> Profile</a>
        <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/farm/details/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" class='btn btn-small'>
            <i class='icon-th-large'></i> Farm Details</a>
        <a href='<?php echo site_url("aggregator/farm/crops/".($_smarty_tpl->tpl_vars['user_id']->value));?>
' class='btn btn-small'><i class='icon-leaf'></i> Planted</a>
        <a href=<?php echo site_url("aggregator/farm/crops/".($_smarty_tpl->tpl_vars['user_id']->value)."/harvested");?>
 class='btn btn-small'>Harvested</a>
    </div>
    <h2>Farm Details</h2> <a href='<?php echo site_url("aggregator/farm/create_new/".($_smarty_tpl->tpl_vars['user_id']->value));?>
' title="Add New" class="btn btn-small">Add New</a>
</div>
<!-- Page header ends here -->

<table class='table table-bordered' id='example'>
    <thead>
        <tr>
            <th>Crops</th>
            <th>Week</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['crop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['crops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['crop']->key => $_smarty_tpl->tpl_vars['crop']->value){
$_smarty_tpl->tpl_vars['crop']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['crop']->value->product_name;?>
</td>
            <td><?php echo date('W',strtotime($_smarty_tpl->tpl_vars['crop']->value->created_at));?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['crop']->value->harvested ? 'Harvested' : 'Planted';?>
</td>
            <td>
                <ul class="btn-group">
                    <a href="" title="Update" class='btn btn-small'>Update</a>
                    <a href='<?php echo site_url("aggregator/farm/destroy/".($_smarty_tpl->tpl_vars['crop']->value->id)."/".($_smarty_tpl->tpl_vars['crop']->value->user_id));?>
' title="Update" class='btn btn-small'><i class='icon-remove'></i></a>
                </ul>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Modal window for new crop item -->
<?php }} ?>