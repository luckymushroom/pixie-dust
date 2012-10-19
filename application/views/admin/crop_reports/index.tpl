<div class="row-fluid">
<div class='page-header'>
    <div class='pull-right'>
        <div class='btn-group'>
            <a href="{site_url('admin/blog')}" class='btn btn-small'><i class='icon-bookmark'></i> Back to Blog</a>
        </div>
    </div>
    <h3>Crop Reports</h3>
</div>
</div>
<div class="row-fluid">
<div class="span3 well sidebar">
	<form class='form' method='post' action="{site_url('admin/crop_reports')}">
		<legend>Filter</legend>
		{form_dropdown('location', $locations, {$location|default:''})}
		{form_dropdown('product', $products, {$product|default:''})}
				<input name='year' type='text' value="{$year|default:date('Y')}" class='input-text span4'>
				<input name='month' type='text' value="{$month|default:date('m')}" class='input-text span3'>
				<input name='day' type='text' value="{$day|default:date('d')}" class='input-text span2'>
				<span>(from)</span>

				<input name='to_year' type='text' value="{$to_year|default:date('Y')}" class='input-text span4'>
				<input name='to_month' type='text' value="{$to_month|default:date('m')}" class='input-text span3'>
				<input name='to_day' type='text' value="{$to_day|default:date('d')}" class='input-text span2'>
				<span>(to)</span>

		<button type='submit' class='btn btn-small'>Filter</button>
	</form>
</div>

<div class="span9">
<table id='example' class='table table-bordered'>
	<thead>
		<tr>
			<th>Date</th>
			<th>Crop</th>
			<th>Report</th>
			<th>Location</th>
		</tr>
	</thead>
	<tbody>
		{foreach $reports as $report}
		<tr>
			<td>{$report->created_at}</td>
			<td>{$report->product_name}</td>
			<td>{character_limiter($report->remarks,70)}</td>
			<td>{$report->location_name}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
</div>
</div>