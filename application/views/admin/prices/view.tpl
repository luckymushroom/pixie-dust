<div class="page-header">
	<h2>Price Item: #{$id}  [{date('d-m-Y',strtotime($record->crop_date))}]</h2>
</div>
<form action='{site_url("admin/prices/edit/{$id}")}' method="post" class="form-horizontal well">
	<div class="control-group">
		<label class="control-label">Product Name</label>
		<div class="controls">
			{form_dropdown('product_id', $options, $record->product_id)}
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Product Weight</label>
		<div class="controls">
			<input type="text" name="crop_weight" value="{$record->crop_weight}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Product Unit</label>
		<div class="controls">
			<input type="text" name="crop_unit" value="{$record->crop_unit}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Product Price</label>
		<div class="controls">
			<input type="text" name="crop_price" value="{$record->crop_price}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Location Name</label>
		<div class="controls">
			<input type="text" name="location_name" value="{$record->location_name}" readonly>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Reporter Name</label>
		<div class="controls">
			<input type="text" name="" value="{$record->username}" readonly>
		</div>
	</div>
	<div class="controls">
		<input type="submit" class="btn btn-success" value="Update">
		<a href="{site_url('admin/prices')}" class="btn btn-warning">Cancel</a>
	</div>
</form>