<div class="page-header">
<ul class="nav nav-pills">
	<li class="active"><a href="<?=site_url('farm/details'); ?>">Shamba Details</a></li>
	<li><a href="<?=site_url('farm/crops_grown'); ?>">Crops Grown</a></li>
	<li><a href="<?=site_url('farm/harvest'); ?>">Harvests</a></li>
</ul>
</div>
<form action="<?=site_url('farm/details');?>" method="post" class="form-horizontal well">
	<fieldset>
		<div class="control-group">
			<label class="control-label">County</label>
			<div class="controls">
				<?=form_dropdown('county_id', $counties,$county_id); ?>
			</div><!-- / controls-->
		</div><!-- / county -->
		<div class="control-group">
			<label class="control-label">Division</label>
			<div class="controls">
				<input type="text" name="division" value="<?php if(isset($division)) echo $division;?>" placeholder="Your Division">
			</div><!-- / controls-->
		</div><!-- / division -->

		<div class="control-group">
			<label class="control-label">Location</label>
			<div class="controls">
				<input type="text" name="location" value="<?php if(isset($location)) echo $location;?>" placeholder="Your Location">
			</div><!-- / controls-->
		</div><!-- / location -->

		<div class="control-group">
			<label class="control-label">Sub-Location</label>
			<div class="controls">
				<input type="text" name="sub_location" value="<?php if(isset($sub_location)) echo $sub_location;?>" placeholder="Sub Location">
			</div><!-- / controls-->
		</div><!-- / sub-location -->

		<div class="control-group">
			<label class="control-label">Village</label>
			<div class="controls">
				<input type="text" name="village" value="<?php if(isset($village)) echo $village;?>" placeholder="Village {if applicable}">
			</div><!-- / controls-->
		</div><!-- / sub-location -->

		<div class="control-group">
			<label class="control-label">Size of Shamba</label>
			<div class="controls">
				<input type="text" name="acres" value="<?php if(isset($acres)) echo $acres;?>" placeholder="Size of Shamba in acres">
			</div><!-- / controls-->
		</div><!-- / sub-location -->

		<div class="controls">
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button class="btn">Cancel</button>
		</div>
	</fieldset>
</form>