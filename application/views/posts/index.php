<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href="<?=site_url('/posts/new_post');?>" class="btn btn-success"><i class="icon-plus-sign icon-white"></i> New</a>
			<button class="btn btn-success">
				<i class="icon-print icon-white"></i> Save Page As
			</button>
			<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="pull-right icon-eye-open"></i> HTML</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i> PDF</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i>Spreadsheet</a>
				</li>
			</ul>
		</div>
	</div>
	<h2>Your Produce</h2>
</div>
<!-- Page header -->
<div class="btn-toolbar">
	<div class="btn-group">
		<a class="btn" href="<?=base_url();?>posts/">All</a>
		<a class="btn" href="<?=base_url();?>posts/status/live">Live</a>
		<a class="btn" href="<?=base_url();?>posts/status/pending">Pending</a>
	</div>
</div>
<!-- ends here -->
<?php if ($posts): ?>
<table class="table table-bordered table-striped" id="example">
	<thead>
		<tr>
			<th>Name</th>
			<th>Weight</th>
			<th>Unit Price</th>
			<th>Delivery</th>
			<th>Delivery Date</th>
			<th>Date Posted</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>
		<tr>
			<td><?=$post->product_name;?></td>
			<td><?=$post->product_weight;?> <?=$post->units;?></td>
			<td>KES <?=$post->unit_price;?></td>
			<td><?=($post->delivered) ? 'YES' : 'NO' ;?></td>
			<?php if ((int)$post->delivery_date): ?>
			<td><?=relative_time($post->delivery_date);?></td>
			<?php else: ?>
			<td>Not Set</td>
			<?php endif ?>
			<td><?=twitter_time_format($post->date_created);?></td>
			<td><?=$post->post_status;?></td>
			<td>
				<a href="<?=base_url();?>posts/save_post/<?=$post->id;?>" title="edit"><i class="icon-pencil "></i></a>
				&nbsp;
				<a href="<?=base_url();?>posts/delete_post/<?=$post->id;?>" title="delete" class="delete"><i class="icon-trash "></i></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<?php else: ?>
	<legend align="center">Welcome, To add a new post click on New Post above.</legend>
<?php endif; ?>