<div class="page-header">
    <div class="btn-group pull-right">
        <a href='{site_url("aggregator/users/{$user_session}/{$farm->user_id}")}' class='btn btn-small'><i class='icon-chevron-left'>
        </i> Profile</a>
        <a href="{base_url}aggregator/farm/details/{$farm->user_id}" class='btn btn-small'>
            <i class='icon-th-large'></i> Farm Details</a>
        <a href='{site_url("aggregator/farm/crops/{$farm->user_id}")}' class='btn btn-small'><i class='icon-leaf'></i> Planted</a>
        <a href={site_url("aggregator/farm/crops/{$farm->user_id}/harvested")} class='btn btn-small'>Harvested</a>
    </div>
    <h2>Farm Details</h2>
</div>
<!-- Page header ends here -->
<form action='{site_url("aggregator/farm/update_farm/{$farm->id}")}' method="post" class="form-horizontal well">
    <fieldset>
        <div class="control-group">
            <label class="control-label">County</label>
            <div class="controls">
                {form_dropdown('county_id', $counties, {$farm->county_id|default:''})}
            </div><!-- / controls-->
        </div><!-- / county -->
        <div class="control-group">
            <label class="control-label">Division</label>
            <div class="controls">
                <input type="text" name="division" value="{$farm->division|default:''}" placeholder="Your Division">
            </div><!-- / controls-->
        </div><!-- / division -->

        <div class="control-group">
            <label class="control-label">Location</label>
            <div class="controls">
                <input type="text" name="location" value="{$farm->location|default:''}" placeholder="Your Location">
            </div><!-- / controls-->
        </div><!-- / location -->

        <div class="control-group">
            <label class="control-label">Sub-Location</label>
            <div class="controls">
                <input type="text" name="sub_location" value="{$farm->sub_location|default:''}" placeholder="Sub Location">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="control-group">
            <label class="control-label">Village</label>
            <div class="controls">
                <input type="text" name="village" value="{$farm->village|default:''}" placeholder="Village { if applicable }">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="control-group">
            <label class="control-label">Size of Shamba</label>
            <div class="controls">
                <input type="text" name="acres" value="{$farm->acres|default:''}" placeholder="Size of Shamba in acres">
            </div><!-- / controls-->
        </div><!-- / sub-location -->

        <div class="controls">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
        </div>
    </fieldset>
</form>