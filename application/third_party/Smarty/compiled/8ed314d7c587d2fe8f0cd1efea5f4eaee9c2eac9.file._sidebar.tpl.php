<?php /* Smarty version Smarty-3.1.7, created on 2012-10-19 08:36:04
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:378264449507570a7cf8cf8-69351184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '378264449507570a7cf8cf8-69351184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507570a7d898b',
  'variables' => 
  array (
    'weeks' => 0,
    'weeknumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507570a7d898b')) {function content_507570a7d898b($_smarty_tpl) {?><form class='form' method='post' action='<?php echo current_url();?>
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