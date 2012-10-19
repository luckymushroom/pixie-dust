<?php /* Smarty version Smarty-3.1.7, created on 2012-10-19 10:53:12
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:823554468507570a7b6b295-88595174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9b2acb9cf9547d52b803e89172275a67946a19' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/index.tpl',
      1 => 1350636792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '823554468507570a7b6b295-88595174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507570a7cf0c1',
  'variables' => 
  array (
    'seg_three' => 0,
    'weeknumber' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507570a7cf0c1')) {function content_507570a7cf0c1($_smarty_tpl) {?><!-- Page header -->
<div class="page-header">
        <div class="btn-group pull-right">
            <?php if ($_smarty_tpl->tpl_vars['seg_three']->value==='status'){?>
            <a href='<?php echo site_url("aggregator/posts");?>
' class="btn btn-small"><i class="icon-chevron-left"></i> All Posts</a>
            <?php }?>
            <a href='<?php echo site_url("aggregator/posts/status/approved");?>
' class="btn btn-small"><i class="icon-ok"></i> Approved</a>
            <a href='<?php echo site_url("aggregator/posts/status/rejected");?>
' class="btn btn-small"><i class="icon-remove"></i> Rejected</a>
        </div>
    <h2>Week: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['weeknumber']->value)===null||$tmp==='' ? date('W') : $tmp);?>
</h2>
</div>
<!-- ends here -->
<?php if (($_smarty_tpl->tpl_vars['posts']->value)){?>
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <th>Date Posted</th>
            <th>Farmer</th>
            <th>Name</th>
            <th>Total Weight</th>
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
            <td><?php echo date('Y-m-d H:i:s',strtotime($_smarty_tpl->tpl_vars['post']->value->created_at));?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_name;?>
</td>
            <form name="prices" id="prices" method="post" action='<?php echo site_url("aggregator/posts/edit/".($_smarty_tpl->tpl_vars['post']->value->id));?>
'>
            <td>
                <input type='text' class='input-small' name='approved_product_weight' value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->approved_product_weight)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['post']->value->product_weight : $tmp);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
'>
            </td>
            <td>
                <ul class="btn-group">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->approved_product_weight){?>
                <a class='btn btn-small' href="#"><i class='icon-lock'></i> Approved</a>
                <?php }else{ ?>
                <button type="submit" class="btn btn-small"><i class="icon-ok"></i> Accept</button>
                <?php }?>
                </ul>
            </td>
            </form>
        </tr>
        <?php } ?>
    </tbody>
</table>
</form>
<br><br>
<h3>Totals</h3>
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <th>Product</th>
            <th>Total Weight</th>
            <th>Not Accepted</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->total_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
</td>
            <td><?php echo ($_smarty_tpl->tpl_vars['post']->value->total_product_weight-$_smarty_tpl->tpl_vars['post']->value->total_weight);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php }else{ ?>
    <legend align="center">Welcome, No posts added yet.</legend>
<?php }?>

<!-- Script for checkboxes -->
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