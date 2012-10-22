<form action="{site_url('farm/details')}" method="post" class="form-horizontal">
    <legend>Shamba Details</legend>
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