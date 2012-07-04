<div class='page-header'>
	<div class='pull-right'>
		<div class='btn-group'>
			<a href="<?= site_url('products/add_product'); ?>" class='btn'><i class='icon-plus'></i> Add Product</a>
			<a href="<?= site_url('products/add_category'); ?>" class='btn'><i class='icon-list-alt'></i> Categories</a>
			<button class="btn dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="pull-right icon-plus"></i> Add Category</a>
				</li>
				<li>
					<a href="#"><i class="pull-right icon-download"></i> List Categories</a>
				</li>
			</ul>
		</div>
	</div>
	<h2>Products</h2>
</div>
<table id='example' class='table table-bordered table-striped'>
<thead>
	<th>Name</th>
	<th>Alias</th>
	<th>Online</th>
	<th>Action</th>
</thead>
<?php foreach ($products as $row): ?>
	<tr>
		<td><?php echo $row->product_name; ?></td>
		<td><?php echo $row->product_alias; ?></td>
		<td><?php echo ($row->deleted) ? 'inActive' : 'Active' ; ?></td>
		<td>
			<a href="<?=site_url('products/view/'.$row->id);?>"><i class="pull-left icon-eye-open"></i></a>
			<a href="#"><i class="pull-right icon-remove"></i></a>
		</td>
	</tr>
<?php endforeach ?>

</table>