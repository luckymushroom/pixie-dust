<div class="page-header">
    <h2>Orders List</h2>
</div>
<table class='table table-bordered table-condensed' id='example'>
<thead>
    <th>Farmer</th>
    <th>Number</th>
    <th>Product</th>
    <th>Buyer Number</th>
    <th>Created On</th>
    <th>Actions</th>
</thead>
<tbody>
    {foreach $orders as $order}
    <tr>
        <td>{$order->username}</td>
        <td>{$order->phone}</td>
        <td>{$order->product_name}</td>
        <td>{$order->buyer_contact}</td>
        <td>{$order->created_at}</td>
        <td>
            <a href='{site_url("admin/orders/delete/{$order->id}")}' class='btn btn-small'><i class='icon-remove'></i></a>
        </td>
    </tr>
    {/foreach}
</tbody>
</table>