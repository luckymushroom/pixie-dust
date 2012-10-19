<?php /* Smarty version Smarty-3.1.7, created on 2012-09-25 10:51:00
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/sms/incoming_sms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12239905150616a8b7b31c4-97862394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f3bcc239ea786eb3f6dc1f743a3202df1fbe853' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/sms/incoming_sms.tpl',
      1 => 1348563058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12239905150616a8b7b31c4-97862394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50616a8babd33',
  'variables' => 
  array (
    'ci' => 0,
    'link' => 0,
    'seg_three' => 0,
    'seg_two' => 0,
    'texts' => 0,
    'text' => 0,
    'uri_string' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50616a8babd33')) {function content_50616a8babd33($_smarty_tpl) {?><div class="page-header">
    <div class="table-filters pull-right">
        <ul class="nav nav-pills">
            <li <?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(4)=='Today'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/Today");?>
'>Today</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='1-day'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/1-day");?>
'>Yesterday</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='3-day'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/3-day");?>
'>Past 3 Days</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='1-week'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/1-week");?>
'>Past Week</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='1-month'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/1-month");?>
'>Past Month</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='3-month'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/3-month");?>
'>Past 3 Months</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='6-month'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/6-month");?>
'>Past 6 Months</a>
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['seg_three']->value=='1-year'){?>class='active'<?php }?>>
                <a href='<?php echo site_url(($_smarty_tpl->tpl_vars['link']->value)."/date_created/1-year");?>
'>Past Year</a>
            </li>
        </ul>
    </div>
	<h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['seg_two']->value)===null||$tmp==='' ? 'Incoming' : $tmp);?>
</h3>
</div>


<div class='row-fluid'>
	<div class='span12'>
		<table class="table table-bordered table-striped" id="example">
			<thead>
			<tr>
				<th>Date Sent</th>
				<th>Number</th>
				<th>Message</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['texts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value){
$_smarty_tpl->tpl_vars['text']->_loop = true;
?>
			<tr>
				<td width="30%"><?php echo $_smarty_tpl->tpl_vars['text']->value->date_created;?>
</td>
				<td><a href='<?php echo site_url("admin/bulk_sms/thread/".($_smarty_tpl->tpl_vars['text']->value->number));?>
'><?php echo $_smarty_tpl->tpl_vars['text']->value->number;?>
</td>
				<td><?php echo character_limiter($_smarty_tpl->tpl_vars['text']->value->message,30);?>
</td>
				<td>
					<a id='<?php echo $_smarty_tpl->tpl_vars['text']->value->number;?>
' class='btn btn-small phone'><i class='icon-edit' data-toggle="modal" href="#myModal"></i></a>
					<a href='<?php echo site_url("admin/sms/delete_sms/".($_smarty_tpl->tpl_vars['text']->value->id));?>
' class='btn btn-small' id='delete'><i class='icon-remove'></i></a>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<!-- Modal -->
<!-- Modal window for reply sms -->
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Reply:</h3>
    </div>
    <div class="modal-body">
        <form action="<?php echo site_url('sms/send_sms/');?>
" method="post" class='form form-vertical well'>
            <input type="hidden" id="order-id" required name="post_id" value="">
            <input type="hidden" id="redirect_url" required name="redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['uri_string']->value;?>
">
            <label class='control-label'>Phone Number</label>
            <input type="text" name="source" id="phone-id" class="input-xlarge" value="">
            <input type="hidden" name="network" value="Safaricom Short Code" placeholder="">
			<input type="hidden" name="destination" value="3555" placeholder="">
            <label>Message</label>
            <textarea name="message" class="input-xlarge" rows="3" placeholder="">....For more help call us on 0707933993</textarea>
    </div>
    <div class="modal-footer">
        <input type="submit" value="send reply" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>
<!-- End modal -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a.phone').click(function(){
			var number = $(this).attr('id');
			$('#phone-id').val(number);
		});
	});
</script><?php }} ?>