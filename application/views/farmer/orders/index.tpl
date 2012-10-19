<div class='page-header'>
	<div class="btn-toolbar pull-right">
	<div class="btn-group">
		<a href="{base_url('market')}" title="Buy a Product on MFarm" class='btn btn-small'>
			<i class='icon-chevron-left'></i>
			Marketplace</a>
		<a class="btn btn-small" href="{site_url('orders/status/live')}">Live</a>
		<a class="btn btn-small" href="{site_url('orders/status/pending')}">Pending</a>
	</div>
</div>
<h2>Orders</h2>
</div>
<table class="table table-bordered table-striped table-condensed" id="example">
    <thead>
        <tr>
            <th>Date Posted</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Unit Price</th>
            <th>Buyer</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {foreach $orders as $order}
        <tr>
            <td>{date('Y-m-d',strtotime($order->created_at))}</td>
            <td>{$order->product_name}</td>
            <td>{$order->product_weight} {$order->weight_unit}</td>
            <td>KES {$order->unit_price}</td>
            <td>{$order->buyer_contact}</td>
            <td>{$order->post_status}</td>
            <td>
                <a href='{site_url("farmer/orders/edit/{$order->id}")}' title="edit"><i class="icon-pencil "></i></a>
                &nbsp;
                <a href='{site_url("farmer/orders/delete/{$order->id}")}' title="delete" class="delete"><i class="icon-trash "></i></a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>