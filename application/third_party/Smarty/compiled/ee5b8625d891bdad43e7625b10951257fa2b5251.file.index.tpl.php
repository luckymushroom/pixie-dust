<?php /* Smarty version Smarty-3.1.7, created on 2012-09-20 15:24:46
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmers/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134245129505b0b0ebb32b7-54660134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5b8625d891bdad43e7625b10951257fa2b5251' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmers/index.tpl',
      1 => 1347453636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2134245129505b0b0ebb32b7-54660134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'farmers' => 0,
    'farmer' => 0,
    'aggregator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_505b0b0ec683a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b0b0ec683a')) {function content_505b0b0ec683a($_smarty_tpl) {?><div class="page-header">
<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
</div>
<div class="row-fluid">
<?php if ($_smarty_tpl->tpl_vars['farmers']->value){?>
<ul class="thumbnails">
<?php  $_smarty_tpl->tpl_vars['farmer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['farmer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['farmers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['farmer']->key => $_smarty_tpl->tpl_vars['farmer']->value){
$_smarty_tpl->tpl_vars['farmer']->_loop = true;
?>
    <li class="span3">
      <div class="thumbnail">
      <img src='<?php echo site_url("media/avatars/".($_smarty_tpl->tpl_vars['farmer']->value->avatar));?>
' alt="">
      <div class="caption">
		  <h4><?php echo $_smarty_tpl->tpl_vars['farmer']->value->username;?>
</h4>
      	<div class='btn-group'>
          <a href='<?php echo site_url("users/".($_smarty_tpl->tpl_vars['farmer']->value->id)."/posts");?>
' class="btn"> <i class='icon-inbox' title='posts'></i></a>
          <a href='<?php echo site_url("farm/details/".($_smarty_tpl->tpl_vars['farmer']->value->id));?>
' class="btn"> <i class='icon-tasks' title='farm details'></i></a>
          <a href='<?php echo site_url("settings/profile/".($_smarty_tpl->tpl_vars['farmer']->value->id));?>
' class="btn"> <i class='icon-user' title='profile'></i></a>
      		<?php if (($_smarty_tpl->tpl_vars['farmer']->value->aggregator)){?>
      		<a href='<?php echo site_url("farmers/delete/".($_smarty_tpl->tpl_vars['farmer']->value->id));?>
' class="delete btn btn-primary"> <i class='icon-remove icon-white'></i></a>
      		<?php }else{ ?>
      		<a href='<?php echo site_url("farmers/create/".($_smarty_tpl->tpl_vars['farmer']->value->id));?>
' class="btn btn-primary"><i class='icon-plus icon-white'></i></a>
      		<?php }?>
      	</div>
      </div><!-- / Caption -->
      </div><!-- / Thumbnail-->
    </li>
<?php } ?>
</ul>
<?php }else{ ?>
<legend align="center">
  Welcome, To add a new farmer tell them to text to 3555 <br> "FirstName LastName Location <?php echo $_smarty_tpl->tpl_vars['aggregator']->value;?>
"
</legend>
<?php }?>
</div><?php }} ?>