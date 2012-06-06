<h1>Marketplace</h1>
<legend>Click on item to make order</legend>
<ul class="thumbnails">
<?php foreach ($posts as $post): ?>
	<li class="span2">
		<div class="thumbnail">
			<a class="preorder" id="<?=$post->id;?>" data-toggle="modal" href="#myModal" title="Place Order">
			<?php if ($post->photo): ?>
				<img src="<?=site_url('media/crops/'.$post->photo);?>" alt="" rel="popover"
				data-content="
				Product: <?=$post->product_name;?><br>
				Amount Avaliable: <?=$post->amount_available.' '.$post->units;?><br>
				Unit Price: KES <?=$post->unit_price;?>"
				data-original-title="Details"
				data-placement="bottom">
			<?php else: ?>
				<img src="<?=site_url('media/crops/default.gif');?>" alt="" rel="popover" data-content="<?=$post->product_name;?>" data-original-title="Detail" data-placement="bottom">
			<?php endif ?>
			</a>
		</div>
	</li>
<?php endforeach ?>
</ul><!-- / Gallery -->
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Order Details </h3><i>*Fill in all fields</i>
    </div>
    <div class="modal-body">
        <form id="preorder-form" method="post" class='well' action="<?=site_url('orders/add');?>">
            <input type="hidden" name="post_id" id="xpost_id" value="">
            <label>Quantity</label>
            <input type="text" name="quantity" class="input-xlarge" value="" max="1000" placeholder="eg. 1000Kgs" required>
            <label>Order Description/Comments</label>
            <textarea name="comments" class="input-xlarge" rows="3"></textarea>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal" >Close</a>
        <input type="submit" value="Add Order" class="btn btn-primary">
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>