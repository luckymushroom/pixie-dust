<div class="row-fluid">
    <div class="span6">
        <div class="page-header">
            <h2>Orders</h2>
        </div>
        <div class="well">
        <legend>Recent Orders</legend>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Weight</th>
                        <th>Aggregation</th>
                    </tr>
                </thead>
            {foreach $orders as $order}
                <tr>
                <td>{$order->product_name}</td>
                <td>{$order->weight} {plural($order->units)}</td>
                <td>{$order->collected_weight}</td>
                </tr>
            {/foreach}
            </table>
        </div>
    </div>
</div>