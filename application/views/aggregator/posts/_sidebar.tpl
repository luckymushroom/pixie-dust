<form class='form' method='post' action='{current_url()}'>
<legend>Filter</legend>
<div class="control-group">
    <label class="control-label">
        Harvest Week
    </label>
    <div class='controls'>
        {form_dropdown('weeknumber', $weeks, $weeknumber)}
    </div>
</div>

<div class='control-group'>
    <div class='controls'>
        <input type='submit' value='filter' class='btn btn-small'>
    </div>
</div>
</form>