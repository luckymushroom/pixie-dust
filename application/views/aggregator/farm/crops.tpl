<div class="page-header">
    <div class="btn-group pull-right">
        <a href='{site_url("aggregator/users/{$user_session}/{$user_id}")}' class='btn btn-small'><i class='icon-chevron-left'>
        </i> Profile</a>
        <a href="{base_url}aggregator/farm/details/{$user_id}" class='btn btn-small'>
            <i class='icon-th-large'></i> Farm Details</a>
        <a href='{site_url("aggregator/farm/crops/{$user_id}")}' class='btn btn-small'><i class='icon-leaf'></i> Planted</a>
        <a href={site_url("aggregator/farm/crops/{$user_id}/harvested")} class='btn btn-small'>Harvested</a>
    </div>
    <h2>Farm Details</h2> <a href='{site_url("aggregator/farm/create_new/{$user_id}")}' title="Add New" class="btn btn-small">Add New</a>
</div>
<!-- Page header ends here -->

<table class='table table-bordered' id='example'>
    <thead>
        <tr>
            <th>Crops</th>
            <th>Week</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {foreach $crops as $crop}
        <tr>
            <td>{$crop->product_name}</td>
            <td>{date('W', strtotime($crop->created_at))}</td>
            <td>{($crop->harvested)?'Harvested':'Planted'}</td>
            <td>
                <ul class="btn-group">
                    <a href="" title="Update" class='btn btn-small'>Update</a>
                    <a href='{site_url("aggregator/farm/destroy/{$crop->id}/{$crop->user_id}")}' title="Update" class='btn btn-small'><i class='icon-remove'></i></a>
                </ul>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>

<!-- Modal window for new crop item -->
