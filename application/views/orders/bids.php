<div class="page-header"><h2>Bid Items</h2></div>
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
		<?php foreach ($bids as $row): ?>
		<tr>
			<td><?=$row->id;?></td>
			<td><?=$row->post_id->product_name;?></td>
			<td>KES <?=$row->price;?></td>
			<td><?=$row->quantity;?></td>
			<td><?=$row->units;?></td>
			<td><?=$row->date_modified;?></td>
			<td>
				<?=anchor('orders/accept_order/'.$row->id.'/'.$this->uri->segment(3), '<i class="icon-ok "></i>','title="accept offer"'); ?>
				&nbsp;
				<?=anchor('orders/decline_order/'.$row->id.'/'.$this->uri->segment(3), '<i class="icon-remove "></i>','title="decline offer" class=delete'); ?>
			</td>
		</tr>
		<?php endforeach ?>

	</tbody>
</table>