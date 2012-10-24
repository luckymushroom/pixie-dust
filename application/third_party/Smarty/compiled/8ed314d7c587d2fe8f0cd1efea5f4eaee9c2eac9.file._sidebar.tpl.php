<?php /* Smarty version Smarty-3.1.7, created on 2012-10-24 14:38:57
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7839537025087e1611e9e33-73315661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed314d7c587d2fe8f0cd1efea5f4eaee9c2eac9' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/_sidebar.tpl',
      1 => 1350628562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7839537025087e1611e9e33-73315661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'weeks' => 0,
    'weeknumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5087e16125c7b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5087e16125c7b')) {function content_5087e16125c7b($_smarty_tpl) {?><form class='form' method='post' action='<?php echo current_url();?>
'>
<legend>Filter</legend>
<div class="control-group">
    <label class="control-label">
        Harvest Week
    </label>
    <div class='controls'>
        <?php echo form_dropdown('weeknumber',$_smarty_tpl->tpl_vars['weeks']->value,$_smarty_tpl->tpl_vars['weeknumber']->value);?>

    </div>
</div>

<div class='control-group'>
    <div class='controls'>
        <input type='submit' value='filter' class='btn btn-small'>
    </div>
</div>
</form><?php }} ?>