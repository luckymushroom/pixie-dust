<div class="page-header">
	<div class="pull-right"><input type="text" placeholder="select date here for archives..."></div>
	<h2>Market Prices</h2>
</div>
<!-- ends here -->
<form name="prices" id="prices" method="post" action="<?=site_url('prices/change_status');?>">
<?php if ($prices): ?>
<table class="table table-bordered table-striped" id="example">
	<thead>
		<tr>
			<td><input type="checkbox" id="checkall" value="check all"></td>
			<th>Name</th>
			<th>Weight</th>
			<th>Unit</th>
			<th>Unit Price</th>
			<th>Date Posted</th>
			<th>Collector</th>
			<th>Location</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($prices as $price): ?>
		<tr>
			<td><input type="checkbox" id="input" name="status[]" value="<?=$price->id;?>"></td>
			<td><?=$price->product_name;?></td>
			<td><?=$price->crop_weight;?> KG</td>
			<td><?=$price->crop_unit;?></td>
			<td><?=$price->crop_price;?></td>
			<td><?=$price->crop_date;?></td>
			<td><?=$price->username;?></td>
			<td><?=$price->location;?></td>
			<td><?=($price->status) ? 'Online' : 'Offline';?></td>
			<td>
				&nbsp;
				<a href="<?=base_url();?>prices/view/<?=$price->id;?>" title="view"><i class="icon-eye-open"></i></a>
				&nbsp;
				<a href="<?=base_url();?>prices/delete/<?=$price->id;?>" title="remove"><i class="icon-remove"></i></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<div class="page-footer">
	<div class="pull-left">
		<div class="btn-group">
			<input class="btn" name="submit" type="submit" value="Make Pending">
			<input class="btn" name="submit" type="submit" value="Take Online">
		</div>
	</div>
</div>
</form>
<?php else: ?>
	<legend align="center">Welcome, No Prices Collected Today.</legend>
<?php endif; ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#checkall').toggle(function(){
        $('input:checkbox').attr('checked','checked');
        $(this).val('uncheck all')
    },function(){
        $('input:checkbox').removeAttr('checked');
        $(this).val('check all');        
    });
});
</script>