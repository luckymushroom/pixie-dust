<div class="page-header"><h3>Add Crop</h3></div>
<form action='{site_url("aggregator/farm/create/{$farmer->id}")}' method="post" class="form well">
<div class="control-group">
    <label>Farmer</label>
    <input type="text" disabled="disabled" name="" value="{$farmer->username}" placeholder="">
</div>
<div class="control-group">
    <label>Crop Planted</label>
    {form_dropdown('product_id', $products)}
</div>
<div class="control-group">
    <label>Amount Planted</label>
    <input type="text" name="amount_planted" value="" placeholder="Kgs/Seedlings">
</div>
<div class="control-group">
    <input type="submit" class="btn btn-small" value="Create">
</div>
</form>