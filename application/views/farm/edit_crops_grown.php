<legend>Update Crop Details</legend>
<form action="<?=site_url('farm/crops_grown'); ?>" method="post" class="form-horizontal well">
	<input type="hidden" name="id" value="<?=$item->id;?>" placeholder="">
<fieldset>
	<div class="control-group">
		<label class="control-label">Crop</label>
		<div class="controls">
			<?=form_dropdown('product_id', $products,$item->product_id); ?>
		</div><!-- / controls-->
	</div><!-- / commodities -->
	<div class="control-group">
		<label class="control-label">Variety</label>
		<div class="controls">
			<input type="text" name="variety" value="<?=$item->variety;?>" placeholder="Crop variety if any">
		</div><!-- / controls-->
	</div><!-- / variety -->
	<div class="control-group">
		<label class="control-label">Planting Date</label>
		<div class="controls">
			<input type="text" id="dp" name="planting_date" value="<?=$item->planting_date;?>" placeholder="">
		</div><!-- / controls-->
	</div><!-- / planting date -->
	<div class="control-group">
		<label class="control-label">Acerage Planted</label>
		<div class="controls">
			<input type="text" name="acres" value="<?=$item->acres;?>" placeholder="Acres Planted">
		</div><!-- / controls-->
	</div><!-- / acerage -->
	<div class="control-group">
		<label class="control-label">Expected Yield</label>
		<div class="controls">
			<input type="text" name="expected_yield" value="<?=$item->expected_yield;?>" placeholder="">
		</div><!-- / controls-->
	</div><!-- / expected yield -->
	<div class="control-group">
		<label class="control-label">Units</label>
		<div class="controls">
			<input type="text" name="units" value="<?=$item->units;?>" placeholder="e.g.Bags">
		</div><!-- / controls-->
	</div><!-- / expected yield -->

	<div class="control-group">
		<label class="control-label">Unit Weight</label>
		<div class="controls">
			<input type="text" name="weight" value="<?=$item->weight;?>" placeholder="e.g. 90 Kgs">
		</div><!-- / controls-->
	</div><!-- / unit weight -->

	<div class="control-group">
		<label class="control-label">Expected Harvest date</label>
		<div class="controls">
			<input type="text" id="dp1" name="expected_harvest_date" value="<?=$item->expected_harvest_date;?>" placeholder="">
		</div><!-- / controls-->
	</div><!-- / expected yield -->
    <div class="controls">
        <a href="<?=site_url('farm/crops_grown');?>" class="btn" data-dismiss="modal" >Close</a>
        <input type="submit" value="Update Crop" class="btn btn-primary">
    </div>
</form>