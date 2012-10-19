<?php /* Smarty version Smarty-3.1.7, created on 2012-09-25 14:13:28
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/user_posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3466644095061948ac11762-80079442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c43efaf80edb6d0b0fe7206cf75aa10f9ffb35' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/user_posts.tpl',
      1 => 1348575207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3466644095061948ac11762-80079442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5061948acc8c9',
  'variables' => 
  array (
    'user_session' => 0,
    'seg_four' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5061948acc8c9')) {function content_5061948acc8c9($_smarty_tpl) {?><!-- Page header -->
<div class="page-header">
        <div class="btn-group pull-right">
            <a href='<?php echo site_url("aggregator/users/".($_smarty_tpl->tpl_vars['user_session']->value));?>
' class="btn btn-small">
                <i class="icon-chevron-left"></i> All Farmers
            </a>
            <a href='<?php echo site_url("aggregator/posts/user_posts/".($_smarty_tpl->tpl_vars['seg_four']->value));?>
' class="btn btn-small"><i class="icon-inbox"></i> Posts</a>
            <a href='<?php echo site_url("aggregator/posts/user_posts/".($_smarty_tpl->tpl_vars['seg_four']->value)."/approved");?>
' class="btn btn-small"><i class="icon-ok"></i> Approved</a>
            <a href='<?php echo site_url("aggregator/posts/user_posts/".($_smarty_tpl->tpl_vars['seg_four']->value)."/rejected");?>
' class="btn btn-small"><i class="icon-remove"></i> Rejected</a>
        </div>
    <h2>Posts: Week <?php echo date('W');?>
</h2>
</div>
<!-- ends here -->
<form name="prices" id="prices" method="post" action="<?php echo site_url('posts/change_status');?>
">
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
            <td><?php echo date('Y-m-d H:i:s',strtotime($_smarty_tpl->tpl_vars['post']->value->date_created));?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->product_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
</td>
            <td>
                <ul class="btn-group">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->post_status=='approved'||$_smarty_tpl->tpl_vars['post']->value->post_status=='rejected'){?>
                <a class='btn btn-small' href="#"><i class='icon-lock'></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->post_status;?>
</a>
                <?php }else{ ?>
                <a class="btn btn-small" href='<?php echo site_url("aggregator/posts/edit/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' title="edit">
                    <i class="icon-pencil"></i></a>
                 <a class="btn btn-small" href='<?php echo site_url("aggregator/posts/approve/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' title="approve">
                    <i class="icon-ok"></i></a>
                <a class="btn btn-small" href='<?php echo site_url("aggregator/posts/decline/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' title="decline">
                    <i class="icon-remove"></i></a>
                <?php }?>
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
    <legend align="center">Welcome, No posts here.</legend>
<?php }?>
<?php }} ?>