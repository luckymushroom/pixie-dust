<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href="{site_url('admin/posts/create_new')}" class="btn btn-small"><i class="icon-plus-sign"></i> New Post</a>
			<a class="btn btn-small" href="{site_url('admin/posts/')}">All</a>
			<a class="btn btn-small" href="{site_url('admin/posts/status/live')}">Live</a>
			<a class="btn btn-small" href="{site_url('admin/posts/status/pending')}">Pending</a>
		</div>
	</div>
	<h2>Your Produce</h2>
</div>

<form name="prices" id="prices" method="post" action="{site_url('admin/posts/change_status')}">
{if ($posts)}
<table class="table table-bordered" id="example">
	<thead>
		<tr>
			<td><input type="checkbox" id="checkall" value="check all"></td>
			<th>Date Posted</th>
			<th>Name</th>
			<th>Weight</th>
			<th>Unit Price</th>
			<th>Farmer</th>
			<th>Phone</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{foreach $posts as $post}
		<tr>
			<td><input type="checkbox" id="input" name="status[]" value="{$post->id}"></td>
			<td>{date('Y-m-d',strtotime($post->created_at))}</td>
			<td>{$post->product_name}</td>
			<td>{$post->product_weight} {$post->weight_unit}</td>
			<td>KES {$post->unit_price}</td>
			<td>{$post->username}</td>
			<td>{$post->phone}</td>
			<td>{$post->post_status}</td>
			<td>
				<a href='{site_url("admin/posts/edit/{$post->id}")}' class='btn btn-small' title="edit">
					<i class="icon-pencil "></i></a>
				<a href='{site_url("admin/posts/delete_post/{$post->id}")}' class='btn btn-small' title="delete" class="delete">
					<i class="icon-trash "></i>
				</a>
			</td>
		</tr>
		{/foreach}
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
{else}
	<legend align="center">Welcome, To add a new post click on New Post above.</legend>
{/if}
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