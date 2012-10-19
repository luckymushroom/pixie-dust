<?php /* Smarty version Smarty-3.1.7, created on 2012-09-26 15:27:52
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/farm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:686028114506302d8927589-98328915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da85acb90fec6937a0a5d7d6f2e616c0b85f2598' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/farm/index.tpl',
      1 => 1347981410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '686028114506302d8927589-98328915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aggregator' => 0,
    'user_session' => 0,
    'username' => 0,
    'seg_three' => 0,
    'counties' => 0,
    'county_id' => 0,
    'division' => 0,
    'location' => 0,
    'sub_location' => 0,
    'village' => 0,
    'acres' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_506302d8a713f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506302d8a713f')) {function content_506302d8a713f($_smarty_tpl) {?><div class="page-header">
    <?php if ($_smarty_tpl->tpl_vars['aggregator']->value){?>
    <div class="pull-right">
        <div class="btn-group">
            <a href='<?php echo site_url("users/".($_smarty_tpl->tpl_vars['user_session']->value)."/farmers");?>
' class="btn">
                <i class="icon-user"></i>
                Profiles
            </a>
            <a href="#" class="btn"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
            <button class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href='<?php echo site_url("settings/profile/".($_smarty_tpl->tpl_vars['seg_three']->value));?>
'><i class="pull-right icon-eye-open"></i> Profile</a>
                </li>
                <li>
                    <a href='<?php echo site_url("users/".($_smarty_tpl->tpl_vars['seg_three']->value)."/posts");?>
'><i class="pull-right icon-download"></i> Posts</a>
                </li>
            </ul>
        </div>
    </div>
    <?php }?>
    <h3>Shamba Location</h3>
</div>
<form action="<?php echo site_url('farm/details');?>
" method="post" class="form-horizontal well">
    <fieldset>
        <div class="control-group">
            <label class="control-label">County</label>
            <div class="controls">
                <?php echo form_dropdown('county_id',$_smarty_tpl->tpl_vars['counties']->value,$_smarty_tpl->tpl_vars['county_id']->value);?>

            </div><!-- / controls-->
        </div><!-- / county -->
        <div class="control-group">
            <label class="control-label">Division</label>
            <div class="controls">
                <input type="text" name="division" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['division']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Your Division">
            </div><!-- / controls-->
        </div><!-- / division -->

        <div class="control-group">
            <label class="control-label">Location</label>
            <div class="controls">
                <input type="text" name="location" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['location']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Your Location">
            </div><!-- / controls-->
        </div><!-- / location -->

        <div class="control-group">
            <label class="control-label">Sub-Location</label>
            <div class="controls">
                <input type="text" name="sub_location" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sub_location']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Sub Location">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="control-group">
            <label class="control-label">Village</label>
            <div class="controls">
                <input type="text" name="village" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['village']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Village { if applicable }">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="control-group">
            <label class="control-label">Size of Shamba</label>
            <div class="controls">
                <input type="text" name="acres" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['acres']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Size of Shamba in acres">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="controls">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
        </div>
    </fieldset>
</form><?php }} ?>