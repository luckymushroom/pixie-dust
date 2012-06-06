<legend>Your Pre-Orders</legend>
<?php if ($preorders): ?>
	<ul class="thumbnails">
	<?php foreach ($preorders as $row): ?>
		<li>
			<div class="thumbnail">
				<a href="<?=site_url('preorders/delete_order/'.$row->id);?>" title="delete order" onclick="return confirm('Are you sure you want to Delete this Order?');">
					<img src="<?=site_url('media/crops/'.$row->photo);?>">
				</a>
				<div class="caption">
					<h5>Product: <?=$row->product_name;?></h5>
					<p>Ordered: <?=$row->quantity;?></p>
					<p>
						<a href="<?=site_url('preorders/view_order/'.$row->id);?>" title="View" class="btn btn-success">
							<i class="icon-eye-open icon-white"></i> view
						</a>
						<a href="<?=site_url('preorders/save_order/'.$row->id);?>" title="Update" class="btn">
							<i class="icon-edit"></i> edit
						</a>
					</p>
				</div><!-- /Caption -->
			</div><!-- /thumbnail -->
		</li>
	<?php endforeach ?>
	</ul><!-- / PreOrder Listing-->
<?php endif ?>
