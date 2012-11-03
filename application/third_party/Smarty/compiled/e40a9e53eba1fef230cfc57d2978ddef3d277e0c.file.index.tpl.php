<?php /* Smarty version Smarty-3.1.7, created on 2012-10-30 11:50:51
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/blog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5764830025075b76d596521-76691046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40a9e53eba1fef230cfc57d2978ddef3d277e0c' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/blog/index.tpl',
      1 => 1350908530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5764830025075b76d596521-76691046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075b76d6aebb',
  'variables' => 
  array (
    'blogs' => 0,
    'blog' => 0,
    'blog_categories' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075b76d6aebb')) {function content_5075b76d6aebb($_smarty_tpl) {?><div class='page-header'>
    <div class='pull-right'>
        <div class='btn-group'>
            <a data-toggle="modal" href="#new_category" class='btn btn-small'><i class='icon-plus-sign'></i> New Category</a>
            <a data-toggle="modal" href="#list_category" class='btn btn-small'><i class='icon-eye-open'></i> View Categories</a>
            <a href="<?php echo site_url('admin/crop_reports');?>
" class='btn btn-small'><i class='icon-bookmark'></i>
             Crop Reports</a>
        </div>
    </div>
    <h3>Blog Posts</h3>
</div>
<div class="row">
    <div class="span3">
      <div class="project thumbnail new-project">
          <h1><a href="<?php echo site_url('admin/blog/add_post');?>
">+</a></h1>
      </div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
    <div class="span3">
        <div class="project thumbnail">
            <h5><a href='<?php echo site_url("admin/blog/".($_smarty_tpl->tpl_vars['blog']->value->id)."/edit");?>
'><?php echo character_limiter($_smarty_tpl->tpl_vars['blog']->value->title,20);?>
</a></h5>
            <p class="sub"><?php echo character_limiter($_smarty_tpl->tpl_vars['blog']->value->intro,129);?>
</p>
            <span class="label">
                created: <?php echo date('F, d Y',strtotime($_smarty_tpl->tpl_vars['blog']->value->created_at));?>

            </span>
            <br>
            <span class="label">
                updated: <?php echo date('F, d Y',strtotime($_smarty_tpl->tpl_vars['blog']->value->updated_at));?>

            </span>
        </div>
    </div>
    <?php } ?>
</div>



<!-- Add Category -->
<div id="new_category" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Add Blog Category:</h3>
    </div>
    <div class="modal-body">
        <form action="<?php echo site_url('admin/blog/add_category');?>
" method="post" class='form form-vertical well'>
            <input type="hidden" id="order-id" required name="post_id" value="">
            <label class='control-label'>Category Name</label>
            <input type="text" name="title" class="input-xlarge" value="" placeholder="" required>
    </div>
    <div class="modal-footer">
        <input type="submit" value="Save Changes" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>

<!-- List Category -->
<div id="list_category" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>List Blog Categories:</h3>
    </div>
    <div class="modal-body">
        <table class="table table-bordered">
            <thead>
            <th>Category Name</th>
            <th>Actions</th>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value->title;?>
</td>
                    <td>
                        <a href='<?php echo site_url("admin/blog/delete_category/".($_smarty_tpl->tpl_vars['row']->value->id));?>
' id='delete'><i class='icon-remove'></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class='modal-footer'>
        <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
</div><?php }} ?>