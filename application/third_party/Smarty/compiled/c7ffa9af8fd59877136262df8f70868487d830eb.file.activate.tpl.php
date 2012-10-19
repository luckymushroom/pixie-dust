<?php /* Smarty version Smarty-3.1.7, created on 2012-09-26 11:52:39
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/auth/email/activate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18984742235062d067dae3a2-84467917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ffa9af8fd59877136262df8f70868487d830eb' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/auth/email/activate.tpl',
      1 => 1346163198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18984742235062d067dae3a2-84467917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identity' => 0,
    'id' => 0,
    'activation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5062d067e34f9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5062d067e34f9')) {function content_5062d067e34f9($_smarty_tpl) {?><html>
<body>
	<h1>Activate account for <?php echo $_smarty_tpl->tpl_vars['identity']->value;?>
</h1>
	<p>Please click this link to <?php echo anchor("auth/activate/".($_smarty_tpl->tpl_vars['id']->value)."/".($_smarty_tpl->tpl_vars['activation']->value),'Activate Your Account');?>
.</p>
</body>
</html><?php }} ?>