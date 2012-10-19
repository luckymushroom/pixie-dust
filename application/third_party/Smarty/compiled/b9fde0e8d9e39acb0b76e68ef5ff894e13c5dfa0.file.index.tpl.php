<?php /* Smarty version Smarty-3.1.7, created on 2012-10-11 18:10:42
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/sms/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18705329885076ef82c2eaf8-14448884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9fde0e8d9e39acb0b76e68ef5ff894e13c5dfa0' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/sms/index.tpl',
      1 => 1347889966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18705329885076ef82c2eaf8-14448884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'today' => 0,
    'all' => 0,
    'today_price' => 0,
    'price' => 0,
    'today_sell' => 0,
    'sell' => 0,
    'today_join' => 0,
    'join' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5076ef82d0708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5076ef82d0708')) {function content_5076ef82d0708($_smarty_tpl) {?><div class="page-header">
	<h1>SMS Traffic</h1>
</div>
<div class="row-fluid">
	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="<?php echo site_url('admin/sms/incoming_sms');?>
">Incoming SMS</a></h3>
			<p class="sub">All incoming system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
</span> today</li>
				<li><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['all']->value;?>
</span> total</li>
			</ul>
			<p class="sub">Updated 30 minute ago</p>
		</div>
	</div>
	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="<?php echo site_url('admin/sms/price_texts');?>
">Price</a></h3>
			<p class="sub">All price system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['today_price']->value;?>
</span> today</li>
				<li><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</span> total</li>
			</ul>
			<p class="sub">Updated 45 minutes ago</p>
		</div>
	</div>

	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="<?php echo site_url('admin/sms/sell_texts');?>
">Sell</a></h3>
			<p class="sub">All sell system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['today_sell']->value;?>
</span> today</li>
				<li><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['sell']->value;?>
</span> total</li>
			</ul>
			<p class="sub">Updated 15 minutes ago</p>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="<?php echo site_url('admin/sms/join_texts');?>
">Subscribe</a></h3>
			<p class="sub">All subscription system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['today_join']->value;?>
</span> today</li>
				<li><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['join']->value;?>
</span> total</li>
			</ul>
			<p class="sub">Updated 15 minutes ago</p>
		</div>
	</div>
		<div class="span4">
		<div class="project thumbnail">
			<h3><a href="<?php echo site_url('admin/bulk_sms');?>
">Bulk sms</a></h3>
			<p class="sub">Bulk SMS system here</p>
		</div>
	</div>
	<div class="span4">
	  <div class="project thumbnail new-project">
		  <h1><a href="">+</a></h1>
	  </div>
	</div>
</div><?php }} ?>