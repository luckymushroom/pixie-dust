<?php /* Smarty version Smarty-3.1.7, created on 2012-09-21 12:20:27
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/blog/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1118116607505c3080a88514-44387482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce4b19324f2e553b9c0f0dec30cdc5dbca71260' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/blog/edit.tpl',
      1 => 1348219226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118116607505c3080a88514-44387482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505c3080b150d',
  'variables' => 
  array (
    'post' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c3080b150d')) {function content_505c3080b150d($_smarty_tpl) {?><div class="row">
	<div class="span8 offset1">
	<form action='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->id)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo site_url("admin/blog/edit/".$_tmp1);?>
' method='post'>
	<div class='page-header'>
		<div class='btn-group pull-right'>
			<a href="<?php echo site_url('admin/blog/');?>
" class='btn btn-small'><i class='icon-chevron-left'></i> Back to Posts</a>
			<input type='submit' value='update post' class='btn btn-small btn-warning'>
		</div>
		<h3>Publish Post</h3></div>
		
		<div class="control-group">
			<div class="controls">
				<select name="status">
					<option <?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->status)===null||$tmp==='' ? 0 : $tmp) ? '' : 'selected';?>
 value='0'>draft</option>
					<option <?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->status)===null||$tmp==='' ? 0 : $tmp) ? 'selected' : '';?>
 value='1'>live</option>
				</select>
			</div>
		</div>

		<div class='page-header'>
			<input type="text" name="title" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->title)===null||$tmp==='' ? '' : $tmp);?>
' class="input-xlarge span8" id="input01" placeholder='Title'>
		</div>

		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='intro' id="textarea" rows="5" placeholder='Intro/Excerpt'>
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->intro)===null||$tmp==='' ? '' : $tmp);?>

				</textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='body' id="textarea1" rows="24" placeholder='Body/Content'>
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->body)===null||$tmp==='' ? '' : $tmp);?>

				</textarea>
			</div>
		</div>

		<div class="control-group">
			<div class="controls">
				<?php echo form_dropdown('blog_category_id',$_smarty_tpl->tpl_vars['categories']->value,'1');?>

			</div>
		</div>

		<div class='controls'>
			<input type='submit' value='update post' class='btn btn-success'>
		</div>
	</form>
	</div>
	<div class="span3">
		<?php if (((($tmp = @$_smarty_tpl->tpl_vars['post']->value->image)===null||$tmp==='' ? '' : $tmp))){?>
		<div class='page-header'><h4>Blog Photo (200X230)</h4></div>
			<ul class="thumbnails">
				<li class="span2">
					<div class="thumbnail">
		      			<a href='<?php echo site_url("admin/blog/delete_photo/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' onclick="return confirm('Are you sure you want to delete this Photo?')" title="Delete Photo">
		      			<img src='<?php echo site_url("media/blog_photos/".($_smarty_tpl->tpl_vars['post']->value->image));?>
' alt="" rel="popover" data-content="Click to Delete photo" data-original-title="Info" data-placement="bottom">
		      			</a>
		    		</div>
				</li>
			</ul><!-- / -->
		<?php }else{ ?>
		<div class='page-header'><h4>Upload blog photo(200X230)</h4></div>
		<!-- Upload form here -->
		<form class="form-inline" action='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->id)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo site_url("admin/blog/upload_photo/".$_tmp2);?>
' method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="photo">
					</div>
				</div>
				<div class="controls">
					<button type="submit" class="btn btn-small btn-primary">Upload Photo</button>
				</div>
			</fieldset>
		</form>
		<?php }?>
	</div>
</div><?php }} ?>