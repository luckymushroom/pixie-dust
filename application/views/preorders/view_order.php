<div class="span3">
<legend>Order</legend>
<h4>Order Date:</h4> <?=date('d M Y',strtotime($order->order_date));?>
<h4>Order Status:</h4> <?=$order->order_status;?>
<h4>Comments: </h4>
<?php if ($order->comments): ?>
	<?=$order->comments;?>
<?php else: ?>
	No comments
<?php endif ?>
</div><!-- / order -->

<div class="span5">
	<legend>Post Details</legend>
	<ul class="thumbnails">
		<li class="span2">
			<div class="thumbnail">
				<img src="<?=site_url('media/crops/'.$photo->photo);?>" alt="<?=$post->product_name;?>">
			</div><!-- /Thumbnail -->
		</li>
		<li class="span3 offset2">
			<h4>Crop Name:</h4> <?=$post->product_name;?>
			<h4>Amount Available:</h4> <?=$post->product_weight;?> <?=$post->units;?>
			<h4>Selling Price:</h4> KES <?=$post->unit_price;?> per <?=singular(strtolower($post->units));?>
		</li>
	</ul>
</div><!-- / post details -->
<div class="span6">
<legend>Order Details</legend>
<form class="form-inline well" action="" method="post">
	<div class="control-group">
		<label class="control-label">Delivery Date</label>
		<div class="controls">
			<input type="text" name="" disabled value="<?=$order_details->delivery_date;?>" placeholder="">
		</div><!-- / -->
	</div><!-- / -->
	<div class="control-group">
		<label class="control-label">Amount Ordered</label>
		<div class="controls">
		<input type="text" name="" disabled value="<?=$order_details->quantity;?>" placeholder="">
		</div><!-- / -->
	</div><!-- / -->
	<div class="control-group">
		<label class="control-label">Order Price</label>
		<div class="controls">
		<input type="text" name="" disabled value="<?=$order_details->price;?>" placeholder="">
		</div><!-- / -->
	</div><!-- / -->
	<div class="form-actions">
		<a href="" title="Cancel Order" class="btn">Update Order</a>
		<a href="" title="Cancel Order" class="btn btn-warning">Cancel Order</a>
	</div><!-- / -->
</form>
</div><!-- / order details -->