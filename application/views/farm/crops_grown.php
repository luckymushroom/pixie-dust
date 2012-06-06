<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href="#myModal" data-toggle="modal" class="btn btn-success"><i class="icon-plus-sign icon-white"></i> New</a>
			<button class="btn btn-success">
				<i class="icon-print icon-white"></i> Save Page As
			</button>
			<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="pull-right icon-eye-open"></i> HTML</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i> PDF</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i>Spreadsheet</a>
				</li>
			</ul>
		</div>
	</div>
	<ul class="nav nav-pills">
		<li><a href="<?=site_url('farm/details'); ?>">Shamba Details</a></li>
		<li class="active"><a href="<?=site_url('farm/crops_grown'); ?>">Crops Grown</a></li>
		<li><a href="<?=site_url('farm/harvest'); ?>">Harvests</a></li>
	</ul>
</div>
<?php if ($crops): ?>
	<table class="table table-bordered table-striped" id="example">
	<thead>
		<tr>
			<th>Crop Name</th>
			<th>Planting Date</th>
			<th>Acreage</th>
			<th>Expected Yield</th>
			<th>Unit Weight</th>
			<th>Expected Harvest Date</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($crops as $row): ?>
		<tr>
			<td><?php echo $row->product_name; ?></td>
			<td><?php echo $row->planting_date; ?></td>
			<td><?php echo $row->acres; ?></td>
			<td><?php echo $row->expected_yield.' '.$row->units;?></td>
			<td><?php echo $row->weight;?></td>
			<td><?php echo $row->expected_harvest_date; ?></td>
			<td>
				<a id="edit" href="<?=site_url('farm/edit_crops_grown/'.$row->id);?>" class="btn-small btn-primary" title="Update Record">update</a>
				<a href="#harvestModal" id="crop_id" data-href="<?=$row->id;?>" data-toggle="modal" class="btn-small btn-warning" title="harvest crop">harvest</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<?php else: ?>
	<legend align="center">Click Add Crop below to add new crop you've planted</legend>
<?php endif ?>

<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Crop Details <i>*Fill in all fields</i></h3>
    </div>
    <div class="modal-body">
		<form action="<?php echo site_url('farm/crops_grown'); ?>" method="post" class="form-horizontal well">
			<fieldset>
				<div class="control-group">
					<label class="control-label">Crop</label>
					<div class="controls">
						<?=form_dropdown('commodity_id', $commodities,$commodity_id); ?>
					</div><!-- / controls-->
				</div><!-- / commodities -->
				<div class="control-group">
					<label class="control-label">Variety</label>
					<div class="controls">
						<input type="text" name="variety" value="" placeholder="Crop variety if any">
					</div><!-- / controls-->
				</div><!-- / variety -->
				<div class="control-group">
					<label class="control-label">Planting Date</label>
					<div class="controls">
						<input type="text" id="dp" name="planting_date" value="" placeholder="">
					</div><!-- / controls-->
				</div><!-- / planting date -->
				<div class="control-group">
					<label class="control-label">Acerage Planted</label>
					<div class="controls">
						<input type="text" name="acres" value="" placeholder="Acres Planted">
					</div><!-- / controls-->
				</div><!-- / acerage -->
				<div class="control-group">
					<label class="control-label">Expected Yield</label>
					<div class="controls">
						<input type="text" name="expected_yield" value="" placeholder="">
					</div><!-- / controls-->
				</div><!-- / expected yield -->
				<div class="control-group">
					<label class="control-label">Units</label>
					<div class="controls">
						<input type="text" name="units" value="" placeholder="e.g.Bags">
					</div><!-- / controls-->
				</div><!-- / expected yield -->

				<div class="control-group">
					<label class="control-label">Unit Weight</label>
					<div class="controls">
						<input type="text" name="weight" value="" placeholder="e.g. 90 Kgs">
					</div><!-- / controls-->
				</div><!-- / unit weight -->

				<div class="control-group">
					<label class="control-label">Expected Harvest date</label>
					<div class="controls">
						<input type="text" id="dp1" name="expected_harvest_date" value="" placeholder="">
					</div><!-- / controls-->
				</div><!-- / expected yield -->

	</div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal" >Close</a>
        <input type="submit" value="Add Crop" class="btn btn-primary">
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>

<!-- Harvest Crop Module -->
<div id="harvestModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Harvest Details</h3>
    </div>
    <div class="modal-body">
		<form action="<?php echo site_url('farm/harvest_crop'); ?>" method="post" class="form-horizontal well">
			<fieldset>
				<input type="hidden" name="farm_crop_id" id="farm_crop_id" value="">
				<div class="control-group">
					<label class="control-label">Yield</label>
					<div class="controls">
						<input type="text" name="yield" value="" placeholder="Quantity of bags,nets or ">
					</div><!-- / controls-->
				</div><!-- / variety -->

				<div class="control-group">
					<label class="control-label">Units</label>
					<div class="controls">
						<input type="text" name="units" value="" placeholder="e.g.Bags">
					</div><!-- / controls-->
				</div><!-- / expected yield -->

				<div class="control-group">
					<label class="control-label">Unit Weight</label>
					<div class="controls">
						<input type="text" name="weight" value="" placeholder="e.g. 90 Kgs">
					</div><!-- / controls-->
				</div><!-- / unit weight -->

				<div class="control-group">
					<label class="control-label">Harvest Date</label>
					<div class="controls">
						<input type="text" id="dp" name="harvest_date" value="" placeholder="">
					</div><!-- / controls-->
				</div><!-- / harvest date -->

	</div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal" >Close</a>
        <input type="submit" value="Add Crop" class="btn btn-primary">
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>

<!--  -->
<script>
	$(function() {
		var crop_id;
		$('a#crop_id').click(function(){
			crop_id = $(this).attr('data-href');
			$('#farm_crop_id').val(crop_id);
		});
	});
</script>