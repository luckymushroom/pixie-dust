<?php /* Smarty version Smarty-3.1.7, created on 2012-10-11 19:46:34
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/users/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18942566695076f01124cf39-20478071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e69ee7e2467ba832c4ed0ed6e6c5672a217553' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/users/show.tpl',
      1 => 1349977590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18942566695076f01124cf39-20478071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5076f01139d1c',
  'variables' => 
  array (
    'user_session' => 0,
    'seg_four' => 0,
    'farmer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5076f01139d1c')) {function content_5076f01139d1c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="page-header">
    <div class="btn-group pull-right">
        <a href='<?php echo site_url("aggregator/users/".($_smarty_tpl->tpl_vars['user_session']->value));?>
' class='btn btn-small'><i class='icon-chevron-left'></i> All Profiles</a>
        <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/farm/details/<?php echo $_smarty_tpl->tpl_vars['seg_four']->value;?>
" class='btn btn-small'><i class='icon-th-large'></i> Farm Details</a>
        <a href="#" class='btn btn-small'><i class='icon-leaf'></i> Planted</a>
        <a href="#" class='btn btn-small'>Harvested</a>
    </div>
    <h2>Profile</h2>
</div>
<div class="span3">
    <?php if ($_smarty_tpl->tpl_vars['farmer']->value->avatar!='default_avatar.jpg'){?>
        <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/avatars/<?php echo $_smarty_tpl->tpl_vars['farmer']->value->avatar;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['farmer']->value->avatar;?>
" class="thumbnail">
    <?php }?>
    <br>
    <form action="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/users/upload_photo/<?php echo $_smarty_tpl->tpl_vars['user_session']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['farmer']->value->id;?>
" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="fileInput">Upload Profile Picture:</label>
                <div class="controls">
                    <input class="input-file" id="fileInput" type="file" name="user_avatar">
                </div>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary btn-small">Save changes</button>
                <button class="btn btn-small">Cancel</button>
            </div>
        </fieldset>
    </form>
</div>
<div class="span6">
    <form class="form-horizontal" method="post" action='<?php echo site_url("aggregator/users/update/".($_smarty_tpl->tpl_vars['user_session']->value)."/".($_smarty_tpl->tpl_vars['farmer']->value->id));?>
'>
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="input01">Name</label>
            <div class="controls">
                <input type="text" name="username" class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['farmer']->value->username;?>
" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Phone</label>
            <div class="controls">
                <input type="text" name="phone" class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['farmer']->value->phone;?>
" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Email</label>
            <div class="controls">
                <input type="text" name="email" disabled class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['farmer']->value->email;?>
" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="textarea">Biography</label>
            <div class="controls">
                <textarea class="input-xlarge" id="textarea" rows="4" name="biography"><?php echo $_smarty_tpl->tpl_vars['farmer']->value->biography;?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="textarea">Marital Status</label>
            <div class="controls">
                <input type="text" name="marital_status" class="input-xlarge" id="input01" value="<?php echo $_smarty_tpl->tpl_vars['farmer']->value->marital_status;?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="textarea">Date of Birth</label>
            <div class="controls">
                <input type="text" id="dp" name="date_of_birth" class="input-xlarge" id="input01"
                value="<?php echo $_smarty_tpl->tpl_vars['farmer']->value->date_of_birth ? $_smarty_tpl->tpl_vars['farmer']->value->date_of_birth : '1970-01-01';?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="textarea">Gender</label>
            <div class="controls">
            <label class="radio">
                <input type="radio" name="gender" value="Male" <?php if ($_smarty_tpl->tpl_vars['farmer']->value->gender=='Male'){?> checked <?php }?> />
                Male
                </label>
                <label class="radio">
                <input type="radio" name="gender" value="Female" <?php if ($_smarty_tpl->tpl_vars['farmer']->value->gender=='Female'){?> checked <?php }?>/>Female
            </label>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Public Profile</label>
            <div class="controls">
                <label class="radio">
                <input type="radio" name="is_public" value="1" <?php if (($_smarty_tpl->tpl_vars['farmer']->value->is_public)){?>checked<?php }?> />
                Public
                </label>
                <label class="radio">
                <input type="radio" name="is_public" value="0" <?php if (!($_smarty_tpl->tpl_vars['farmer']->value->is_public)){?>checked<?php }?>/>Private
            </label>
            </div>
        </div>
        <div class="controls">
            <button type="submit" class="btn btn-success btn-small">Update Profile</button>
            <button class="btn btn-small">Cancel</button>
        </div>
    </fieldset>
    </form>
</div><?php }} ?>