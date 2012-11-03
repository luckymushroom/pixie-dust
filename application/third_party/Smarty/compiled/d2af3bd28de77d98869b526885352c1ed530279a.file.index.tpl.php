<?php /* Smarty version Smarty-3.1.7, created on 2012-11-03 10:06:33
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/users/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753880720507c1420882755-60405966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2af3bd28de77d98869b526885352c1ed530279a' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/users/index.tpl',
      1 => 1351926392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753880720507c1420882755-60405966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507c1420a5901',
  'variables' => 
  array (
    'type' => 0,
    'user' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507c1420a5901')) {function content_507c1420a5901($_smarty_tpl) {?><div class="page-header">
<h3>Accounts - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'All' : $tmp);?>
</h3>
</div>
<table class='table table-bordered table-condensed' id='example'>
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Created On</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php if ((isset($_smarty_tpl->tpl_vars['user']->value))){?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</td>
			<td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['user']->value->created_on);?>
</td>
			<td>
                <a href='<?php echo site_url("admin/users/index/".($_smarty_tpl->tpl_vars['user']->value->id));?>
' class='user-card btn btn-small' data-toggle="modal" id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" data-target="#user-card">
                    <i class='icon-eye-open'></i></a>
                <a href='<?php echo site_url("admin/users/delete/".($_smarty_tpl->tpl_vars['user']->value->id));?>
' class='btn btn-small'><i class='icon-remove delete'></i></a>
			</td>
		</tr>
		<?php }else{ ?>
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</td>
			<td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['user']->value->created_on);?>
</td>
			<td class='btn-group'>
                <a href='<?php echo site_url("admin/users/index/".($_smarty_tpl->tpl_vars['user']->value->id));?>
' class='user-card btn btn-small' data-toggle="modal" id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" data-target="#user-card">
                    <i class='icon-eye-open'></i></a>
                <a href='<?php echo site_url("admin/users/delete/".($_smarty_tpl->tpl_vars['user']->value->id));?>
' class='btn btn-small'><i class='icon-remove delete'></i></a>
			</td>
		</tr>
		<?php } ?>
		<?php }?>
	</tbody>
</table>

<!-- User card -->
<!-- Modal window for reply sms -->
<div id="user-card" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>User Profile:</h3>
    </div>
    <div class="modal-body">
    	<p>Name: Isaak Mogetutu</p>
    	<p>Email: mogetutu@mogetutu.com</p>
    	<hr>
    	<p>Bio: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco.</p>
    </div>
    <div class="modal-footer">
        <div class="btn-group">
            <a href="#" class='btn'>Reset Password</a>
            <a href="#" class='btn'>Make Aggregator</a>
            <a href="#" class='btn'>Make Administrator</a>
        </div>
    </div>
</div><?php }} ?>