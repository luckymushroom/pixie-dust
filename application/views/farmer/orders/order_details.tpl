<div class='page-header'>
	<div class='btn-group pull-right'>
		<a href="{site_url('orders')}" class='btn btn-success'>Back to Orders</a>
	</div>
	<h2>Items: Order #{$seg_three}</h2>
</div>
<table class="table table-bordered table-striped" id="example">
	<thead>
		<tr>
			<th>ID</th>
			<th>Product</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Units</th>
			<th>Date Modified</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{foreach $details as $row}
		<tr>
			<td>{$row->id}</td>
			<td>{$row->product_name}</td>
			<td>KES {$row->price}</td>
			<td>{$row->quantity}</td>
			<td>{$row->units}</td>
			<td>{$row->date_modified}</td>
			<td>{anchor("orders/delete_order_details/{$row->id}/{$seg_three}", 'Remove', 'class="btn"')}</td>
		</tr>
		{/foreach}
	</tbody>
</table>