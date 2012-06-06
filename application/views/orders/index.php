<h1>Latest Orders</h1>
<legend>Ordered by Date</legend>
<div class="btn-toolbar">
	<div class="btn-group">
		<a class="btn" href="<?=base_url();?>orders/status/delivered">Delivered</a>
		<a class="btn" href="<?=base_url();?>orders/status/live">Ongoing</a>
		<a class="btn" href="<?=base_url();?>orders/status/pending">Pending</a>
	</div>
</div>
<table class="table table-bordered table-striped" id="example">
	<thead>
		<tr>
			<th>ID</th>
			<th>Order Date</th>
			<th>Status</th>
			<th>Comments</th>
			<th>Date Modified</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($orders as $row): ?>
		<tr>
			<td><?=$row->id;?></td>
			<td><?=twitter_time_format($row->order_date);?></td>
			<td><?=$row->process_step_id->process_name;?></td>
			<td><?=$row->comments;?></td>
			<td><?=$row->date_modified;?></td>
			<td><?=anchor('orders/order_details/'.$row->id, 'Details', 'class="btn"'); ?></td>
		</tr>
		<?php endforeach ?>

	</tbody>
</table>