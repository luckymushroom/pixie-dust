<?php /* Smarty version Smarty-3.1.7, created on 2012-09-26 15:27:42
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/posts/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1976412282506302cee987e3-51523146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4580a4f3f5d948b52437a0f874237878369cb66b' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/posts/index.tpl',
      1 => 1348067655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976412282506302cee987e3-51523146',
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
  'unifunc' => 'content_506302cf05815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506302cf05815')) {function content_506302cf05815($_smarty_tpl) {?><div class="page-header">
    <div class="pull-right">
        <div class="btn-group">
            <a href="<?php echo site_url('farmer/posts/create_new');?>
" class="btn btn-small"><i class="icon-plus-sign"></i> New</a>
            <a class="btn btn-small" href="<?php echo base_url();?>
posts/">All</a>
            <a class="btn btn-small" href="<?php echo base_url();?>
posts/live">Live</a>
            <a class="btn btn-small" href="<?php echo base_url();?>
posts/pending">Pending</a>
    </div>
    </div>
    <h2>Your Produce</h2>
</div>
<?php if (($_smarty_tpl->tpl_vars['posts']->value)){?>
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <th>Last Updated</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Unit Price</th>
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
            <td><?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['post']->value->date_updated));?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
</td>
            <td>KES <?php echo $_smarty_tpl->tpl_vars['post']->value->unit_price;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->post_status;?>
</td>
            <td>
                <a href='<?php echo site_url("farmer/posts/edit/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' title="edit"><i class="icon-pencil "></i></a>
                &nbsp;
                <a href='<?php echo site_url("farmer/posts/delete/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' title="delete" class="delete"><i class="icon-trash "></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
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