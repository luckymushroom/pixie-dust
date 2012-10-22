<div class="page-header">
    <div class="pull-right btn-group">
        <a href="{site_url('aggregator/products/trends')}" class='btn' title="Trends">
            Trends
            <i class='icon-chevron-right'></i>
        </a>
    </div>
    <h3>Product Prices</h3>
</div>
<!-- Price list -->
{if ($prices)}
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <th>Name</th>
            <th>Weight</th>
            <th>Unit Price</th>
            <th>Date Posted</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        {foreach $prices as $price}
        <tr>
            <td>{$price->product_name}</td>
            <td>{$price->crop_weight} {$price->crop_unit}</td>
            <td>{$price->crop_price}</td>
            <td>{$price->crop_date}</td>
            <td>{$price->location_name}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
{else}
    <legend align="center">Welcome, No Prices Collected Today.</legend>
{/if}