<div class="page-header">
	{if $aggregator}
	<div class="pull-right">
		<div class="btn-group">
			<a href='{site_url("users/{$user_session}/farmers")}' class="btn">
				<i class="icon-user"></i>
				Profiles
			</a>
			<a href="#" class="btn">{$username}</a>
			<button class="btn dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href='{site_url("settings/profile/{$seg_three}")}'><i class="pull-right icon-eye-open"></i> Profile</a>
				</li>
				<li>
					<a href='{site_url("users/{$seg_three}/posts")}'><i class="pull-right icon-download"></i> Posts</a>
				</li>
			</ul>
		</div>
	</div>
	{/if}
	<ul class="nav nav-pills">
		<li class="active"><a href='{site_url("farm/details/{$seg_three}")}'>Shamba</a></li>
		<li><a href='{site_url("farm/crops_grown/{$seg_three}")}'>Crops</a></li>
		<!-- <li><a href="{site_url('farm/harvest')}">Harvests</a></li> -->
	</ul>
</div>
<form action="{site_url('farm/details')}" method="post" class="form-horizontal well">
	<fieldset>
		<div class="control-group">
			<label class="control-label">County</label>
			<div class="controls">
				{form_dropdown('county_id', $counties, $county_id)}
			</div><!-- / controls-->
		</div><!-- / county -->
		<div class="control-group">
			<label class="control-label">Division</label>
			<div class="controls">
				<input type="text" name="division" value="{$division|default:''}" placeholder="Your Division">
			</div><!-- / controls-->
		</div><!-- / division -->

		<div class="control-group">
			<label class="control-label">Location</label>
			<div class="controls">
				<input type="text" name="location" value="{$location|default:''}" placeholder="Your Location">
			</div><!-- / controls-->
		</div><!-- / location -->

		<div class="control-group">
			<label class="control-label">Sub-Location</label>
			<div class="controls">
				<input type="text" name="sub_location" value="{$sub_location|default:''}" placeholder="Sub Location">
			</div><!-- / controls-->
		</div><!-- / sub-location -->

		<div class="control-group">
			<label class="control-label">Village</label>
			<div class="controls">
				<input type="text" name="village" value="{$village|default:''}" placeholder="Village { if applicable }">
			</div><!-- / controls-->
		</div><!-- / sub-location -->

		<div class="control-group">
			<label class="control-label">Size of Shamba</label>
			<div class="controls">
				<input type="text" name="acres" value="{$acres|default:''}" placeholder="Size of Shamba in acres">
			</div><!-- / controls-->
		</div><!-- / sub-location -->

		<div class="controls">
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button class="btn">Cancel</button>
		</div>
	</fieldset>
</form>