<?php /* Smarty version Smarty-3.1.7, created on 2012-10-11 20:19:14
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/farm/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125346972550757064672ae6-69306252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44cd777f8504f0c7eca9fa61044e646840630444' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/farm/details.tpl',
      1 => 1349979553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125346972550757064672ae6-69306252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075706470c40',
  'variables' => 
  array (
    'user_session' => 0,
    'farm' => 0,
    'counties' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075706470c40')) {function content_5075706470c40($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="page-header">
    <div class="btn-group pull-right">
        <a href='<?php echo site_url("aggregator/users/".($_smarty_tpl->tpl_vars['user_session']->value)."/".($_smarty_tpl->tpl_vars['farm']->value->user_id));?>
' class='btn btn-small'><i class='icon-chevron-left'>
        </i> Profile</a>
        <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/farm/details/<?php echo $_smarty_tpl->tpl_vars['farm']->value->user_id;?>
" class='btn btn-small'>
            <i class='icon-th-large'></i> Farm Details</a>
        <a href='<?php echo site_url("aggregator/farm/crops/".($_smarty_tpl->tpl_vars['farm']->value->user_id));?>
' class='btn btn-small'><i class='icon-leaf'></i> Planted</a>
        <a href=<?php echo site_url("aggregator/farm/crops/".($_smarty_tpl->tpl_vars['farm']->value->user_id)."/harvested");?>
 class='btn btn-small'>Harvested</a>
    </div>
    <h2>Farm Details</h2>
</div>
<!-- Page header ends here -->
<form action='<?php echo site_url("aggregator/farm/update_farm/".($_smarty_tpl->tpl_vars['farm']->value->id));?>
' method="post" class="form-horizontal well">
    <fieldset>
        <div class="control-group">
            <label class="control-label">County</label>
            <div class="controls">
                <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['farm']->value->county_id)===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo form_dropdown('county_id',$_smarty_tpl->tpl_vars['counties']->value,$_tmp1);?>

            </div><!-- / controls-->
        </div><!-- / county -->
        <div class="control-group">
            <label class="control-label">Division</label>
            <div class="controls">
                <input type="text" name="division" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['farm']->value->division)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Your Division">
            </div><!-- / controls-->
        </div><!-- / division -->

        <div class="control-group">
            <label class="control-label">Location</label>
            <div class="controls">
                <input type="text" name="location" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['farm']->value->location)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Your Location">
            </div><!-- / controls-->
        </div><!-- / location -->

        <div class="control-group">
            <label class="control-label">Sub-Location</label>
            <div class="controls">
                <input type="text" name="sub_location" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['farm']->value->sub_location)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Sub Location">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="control-group">
            <label class="control-label">Village</label>
            <div class="controls">
                <input type="text" name="village" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['farm']->value->village)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Village { if applicable }">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="control-group">
            <label class="control-label">Size of Shamba</label>
            <div class="controls">
                <input type="text" name="acres" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['farm']->value->acres)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Size of Shamba in acres">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="controls">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
        </div>
    </fieldset>
</form><?php }} ?>