<h1>Products</h1>
<fieldset>
	<legend>Select Your Preferred Products</legend>
</fieldset>
<br>
<br>
<?php foreach ($products as $product): ?>
	<a href="<?=site_url('products/add_crop_setting/'.$product->id);?>" title="Add Crop <?=$product->product_name;?>"><span class="badge" data-id="<?=$product->category_id;?>"><?=$product->product_name;?></span></a>
<?php endforeach ?>
<br><br>
<legend>Your Crop Selection</legend>
<?php foreach ($selection as $select): ?>
	<a href="<?=site_url('products/delete_crop_setting/'.$select->id);?>" title="Remove Crop <?=$select->product_name;?>"><span class="badge" data-id="<?=$select->category_id;?>"><?=$select->product_name;?></span>
<?php endforeach ?>