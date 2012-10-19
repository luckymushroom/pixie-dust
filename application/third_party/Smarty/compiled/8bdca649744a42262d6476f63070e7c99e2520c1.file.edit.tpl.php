<?php /* Smarty version Smarty-3.1.7, created on 2012-10-10 19:58:24
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/admin/posts/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13337522065075b740e26638-52901412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bdca649744a42262d6476f63070e7c99e2520c1' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/admin/posts/edit.tpl',
      1 => 1347563945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13337522065075b740e26638-52901412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'products' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075b74101222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075b74101222')) {function content_5075b74101222($_smarty_tpl) {?><div class="row-fluid">
	<div class="span7">
		<legend>Post #<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
</legend>
		<form class="form-horizontal" method="post" action='<?php echo site_url("admin/posts/edit/".($_smarty_tpl->tpl_vars['post']->value->id));?>
'>
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="input01">Product Name</label>
					<div class="controls">
						<?php echo form_dropdown('product_id',$_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['post']->value->product_id);?>

					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Product Amount</label>
					<div class="controls">
						<input type="text" name="product_weight" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->product_weight;?>
" class="input-xlarge" id="input01" required />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Unit Weight</label>
					<div class="controls">
						<input type="text" name="weight_unit" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->weight_unit;?>
" class="input-xlarge" id="input01" placeholder="eg. KG" required />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Packaging</label>
					<div class="controls">
						<input type="text" name="packaging" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->packaging;?>
" class="input-xlarge" id="input01" placeholder="eg. Bag, Net, Crate" required />
					</div>
				</div>
				<div class="control-group">
		            <label class="control-label" for="appendedPrependedInput">Unit Price</label>
		            <div class="controls">
		              <div class="input-prepend input-append">
		                <span class="add-on">KES</span>
		                <input id="appendedPrependedInput" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->unit_price;?>
" size="16" type="text" name="unit_price" required>
		                <span class="add-on">.00</span>
		              </div>
		            </div>
		         </div>
				<div class="control-group">
					<label class="control-label" for="textarea">Product Summary</label>
					<div class="controls">
						<textarea class="input-xlarge" name="description" id="textarea" rows="3"><?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>
</textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Will you deliver</label>
					<div class="controls">
						<label class="radio">
							<input id="radio-yes" type="radio" name="delivered" value="1" placeholder="" <?php if ($_smarty_tpl->tpl_vars['post']->value->delivered==true){?>checked<?php }?>>YES
						</label>
						<label class="radio">
							<input id="radio-no" type="radio" name="delivered" value="0" placeholder="" <?php if ($_smarty_tpl->tpl_vars['post']->value->delivered==false){?>checked<?php }?>>NO
						</label>
					</div>
				</div>
				<div id="delivery-date" class="control-group">
					<label class="control-label">Delivery Date</label>
					<div class="controls">
						<input id="dp" type="text" class="input-xlarge" name="delivery_date" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->delivery_date;?>
">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success">Update</button>
					<a href="<?php echo site_url('admin/posts/');?>
" class="btn btn-warning">Done</a>
				</div>
			</fieldset>
		</form>
	</div><!-- / -->
	<div class="span4">
	<legend>Upload Photos</legend>
	<?php if (($_smarty_tpl->tpl_vars['post']->value->post_photo)){?>
		<ul class="thumbnails">
			<li class="span7">
				<div class="thumbnail">
	      			<a href='<?php echo site_url("admin/posts/delete_photo/".($_smarty_tpl->tpl_vars['post']->value->id)."/");?>
' onclick="return confirm('Are you sure you want to delete this Photo?')" title="Delete Photo">
	      			<img src='<?php echo site_url("media/crops/".($_smarty_tpl->tpl_vars['post']->value->post_photo));?>
' alt="" rel="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['post']->value->post_photo;?>
" data-original-title="Caption" data-placement="bottom">
	      			</a>
	    		</div>
			</li>
		</ul><!-- / -->
	<?php }?>
	<!-- Upload form here -->
		<form class="form-inline" action='<?php echo site_url("admin/posts/upload_photo/".($_smarty_tpl->tpl_vars['post']->value->id));?>
' method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<div class="controls">
						<input type="text" name="caption" class="input-xlarge" placeholder="Caption" id="input01">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="photo">
					</div>
				</div>
				<div class="controls">
					<button type="submit" class="btn btn-primary">Upload Photo</button>
				</div>
			</fieldset>
		</form>

		<br>
		<legend>Price Feed</legend>
		<table class="table">
			<thead>
				<tr>
					<th>Day</th>
					<th>NBI</th>
					<th>MSA</th>
					<th>KSM</th>
					<th>ELD</th>
					<th>KTL</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = price_feed($_smarty_tpl->tpl_vars['post']->value->product_id); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->wk_date;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->NBI;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->MSA;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->KSM;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->ELD;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->KTL;?>
</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div><!-- / -->
</div><?php }} ?>