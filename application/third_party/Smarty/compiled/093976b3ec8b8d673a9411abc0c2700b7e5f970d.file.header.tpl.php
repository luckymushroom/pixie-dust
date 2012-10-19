<?php /* Smarty version Smarty-3.1.7, created on 2012-09-25 12:24:39
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1822139567506185ec97f1e6-99522587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093976b3ec8b8d673a9411abc0c2700b7e5f970d' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/aggregator/posts/header.tpl',
      1 => 1348568666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822139567506185ec97f1e6-99522587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_506185ec99d2c',
  'variables' => 
  array (
    'seg_three' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506185ec99d2c')) {function content_506185ec99d2c($_smarty_tpl) {?><div class="btn-group pull-right">
    <?php if ($_smarty_tpl->tpl_vars['seg_three']->value!=''){?>
    <a href='<?php echo site_url("aggregator/posts");?>
' class="btn btn-small"><i class="icon-chevron-left"></i> All Posts</a>
    <?php }?>
    <a href='<?php echo site_url("aggregator/posts/status/approved");?>
' class="btn btn-small"><i class="icon-ok"></i> Approved</a>
    <a href='<?php echo site_url("aggregator/posts/status/rejected");?>
' class="btn btn-small"><i class="icon-remove"></i> Rejected</a>
</div>
<h2>Posts: Week <?php echo date('W');?>
</h2>
<?php }} ?>