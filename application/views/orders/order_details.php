<legend>Items: Order #<?=$this->uri->segment(3);?></legend>
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
		<?php foreach ($details as $row): ?>
		<tr>
			<td><?=$row->id;?></td>
			<td><?=$row->post_id->product_name;?></td>
			<td>KES <?=$row->price;?></td>
			<td><?=$row->quantity;?></td>
			<td><?=$row->units;?></td>
			<td><?=$row->date_modified;?></td>
			<td><?=anchor('orders/delete_order_details/'.$row->id.'/'.$this->uri->segment(3), 'Remove', 'class="btn"'); ?></td>
		</tr>
		<?php endforeach ?>

	</tbody>
</table>