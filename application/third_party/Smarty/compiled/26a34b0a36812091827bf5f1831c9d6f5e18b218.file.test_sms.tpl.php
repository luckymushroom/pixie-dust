<?php /* Smarty version Smarty-3.1.7, created on 2012-10-11 18:10:47
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/sms/test_sms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3726353355076ef87302fc5-72515705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a34b0a36812091827bf5f1831c9d6f5e18b218' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/sms/test_sms.tpl',
      1 => 1349119033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3726353355076ef87302fc5-72515705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uri_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5076ef873b6bf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5076ef873b6bf')) {function content_5076ef873b6bf($_smarty_tpl) {?><form action="<?php echo site_url('sms');?>
" class="form-inline well" method="post">
	<legend>Price Test</legend>
<input type="hidden" id="redirect_url" required name="redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['uri_string']->value;?>
">
	<input type="text" name="source" value="254722286084" placeholder="">
	<input type="hidden" name="destination" value="3555" placeholder="">
	<input type="text" name="message" value="price maize nairobi" placeholder="">
	<input type="text" name="network" value="Safaricom Short Code" placeholder="">
	<input type="submit" value="Price SMS" name="send sms" class="btn btn-primary">
</form>
<form action="<?php echo site_url('sms');?>
" class="form-inline well" method="post">
	<legend>Join Test</legend>
	<input type="hidden" id="redirect_url" required name="redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['uri_string']->value;?>
">
	<input type="text" name="source" value="254722286084" placeholder="">
	<input type="hidden" name="destination" value="3555" placeholder="">
	<input type="text" name="message" value="join john doe nairobi" placeholder="">
	<input type="text" name="network" value="Safaricom Short Code" placeholder="">
	<input type="submit" value="Join SMS" name="send sms" class="btn btn-primary">
</form>
<form action="<?php echo site_url('sms');?>
" class="form-inline well" method="post">
	<legend>Sell Test</legend>
	<input type="hidden" id="redirect_url" required name="redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['uri_string']->value;?>
">
	<input type="text" name="source" value="254722286084" placeholder="">
	<input type="hidden" name="destination" value="3555" placeholder="">
	<input type="text" name="message" value="sell maize 200kgs kes3200" placeholder="">
	<input type="text" name="network" value="Safaricom Short Code" placeholder="">
	<input type="submit" value="Sell SMS" name="send sms" class="btn btn-primary">
</form>

<form action="<?php echo site_url('sms/send_sms');?>
" class="form well" method="post">
	<legend>Bulk Test</legend>
	<input type="hidden" id="redirect_url" required name="redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['uri_string']->value;?>
">
	<input type="text" name="source" value="254712502130" placeholder=""><br>
	<input type="hidden" name="destination" value="3555" placeholder="">
	<textarea name="message">Good night love. Powered by your Man.</textarea><br>
	<input type="hidden" name="network" value="Safaricom Short Code">
	<input type="submit" value="Bulk SMS" name="send sms" class="btn btn-primary">
</form><?php }} ?>