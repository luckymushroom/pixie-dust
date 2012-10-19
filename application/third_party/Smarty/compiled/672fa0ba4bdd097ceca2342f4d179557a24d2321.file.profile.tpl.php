<?php /* Smarty version Smarty-3.1.7, created on 2012-09-20 15:24:41
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/settings/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:849190025505b0b092fa480-79409753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672fa0ba4bdd097ceca2342f4d179557a24d2321' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/settings/profile.tpl',
      1 => 1347981659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849190025505b0b092fa480-79409753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505b0b0942497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b0b0942497')) {function content_505b0b0942497($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="span8">
	<form id="edit-profile" class="form-horizontal" method="post" action="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/settings/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
	<fieldset>
		<legend>Your Profile</legend>
		<div class="control-group">
			<label class="control-label" for="input01">Name</label>
			<div class="controls">
				<input type="text" name="username" class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Phone</label>
			<div class="controls">
				<input type="text" name="phone" class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Email</label>
			<div class="controls">
				<input type="text" name="email" disabled class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="textarea">Biography</label>
			<div class="controls">
				<textarea class="input-xlarge" id="textarea" rows="4" name="biography"><?php echo $_smarty_tpl->tpl_vars['user']->value->biography;?>
</textarea>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Marital Status</label>
			<div class="controls">
				<input type="text" name="marital_status" class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->marital_status;?>
" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Date of Birth</label>
			<div class="controls">
				<input type="text" id="dp" name="date_of_birth" class="input-xlarge" id="input01"
				value="<?php echo $_smarty_tpl->tpl_vars['user']->value->date_of_birth ? $_smarty_tpl->tpl_vars['user']->value->date_of_birth : '1970-01-01';?>
" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Gender</label>
			<div class="controls">
			<label class="radio">
				<input type="radio" name="gender" value="Male" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender=='Male'){?> checked <?php }?> />
				Male
				</label>
				<label class="radio">
				<input type="radio" name="gender" value="Female" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender=='Female'){?> checked <?php }?>/>Female
			</label>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="optionsCheckbox">Public Profile</label>
			<div class="controls">
				<label class="radio">
				<input type="radio" name="is_public" value="1" <?php if (($_smarty_tpl->tpl_vars['user']->value->is_public)){?>checked<?php }?> />
				Public
				</label>
				<label class="radio">
				<input type="radio" name="is_public" value="0" <?php if (!($_smarty_tpl->tpl_vars['user']->value->is_public)){?>checked<?php }?>/>Private
			</label>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success">Save</button> <button class="btn">Cancel</button>
		</div>
	</fieldset>
	</form>
	</div>
	<div class="span4">
		<legend>Profile Pic</legend>
		<?php if ($_smarty_tpl->tpl_vars['user']->value->avatar!='default_avatar.jpg'){?>
			<img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/avatars/<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
" class="thumbnail">
		<?php }?>
		<br>
		<form class="well" action="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/settings/upload_photo/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="fileInput">Upload Profile Picture:</label>
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="user_avatar">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>
	</div>
	</div>
</div><?php }} ?>