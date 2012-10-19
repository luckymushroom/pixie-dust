<h1>Products</h1>
<fieldset>
	<legend>Click to Select Crop You Grow</legend>
</fieldset>
{foreach $products as $product}
	<a href="{site_url("farmer/products/add_crop_setting/{$product->id}")}" title="Add Crop {$product->product_name}"><span class="badge" data-id="{$product->category_id}">{$product->product_name}</span></a>
{/foreach}
<br><br>
<legend>Your Crop Selection</legend>
{foreach $selection as $select}
	<a href="{site_url("farmer/products/delete_crop_setting/{$select->id}")}" title="Remove Crop {$select->product_name}"><span class="badge" data-id="{$select->category_id}">{$select->product_name}</span>
{/foreach}