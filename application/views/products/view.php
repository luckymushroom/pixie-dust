<form class='form-vertical well' method='post' action='<?=site_url('products/update/'.$product->id);?>'>
	<div class='control-group'>
		<label class='control-label'>Category Name</label>
		<div class='controls'>
			<?=form_dropdown('category_id', $options, $product->category_id); ?>
		</div>
	</div>

	<div class='control-group'>
		<label class='control-label'>Product Name</label>
		<div class='controls'>
			<input type='text' class='input-xlarge' name='product_name' value='<?=$product->product_name;?>'>
		</div>
	</div>

	<div class='control-group'>
		<label class='control-label'>Product Alias</label>
		<div class='controls'>
			<textarea class='input-xlarge' name='product_alias'><?=$product->product_alias;?></textarea>
		</div>
	</div>
	<div class='controls'>
		<input type='submit' class='btn btn-success' value='Update'>
		<a href='<?=site_url('products/manage_products');?>' type='submit' class='btn btn-warning'>Cancel</a>
	</div>
</form>