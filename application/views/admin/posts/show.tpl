<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href='{site_url("/users/{$user_session}/farmers")}' class="btn btn-success">
				<i class="icon-chevron-left icon-white"></i> 
				Farmers
			</a>
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
	<h2>Posts: {$username}</h2>
</div>
<!-- Page header -->
<!-- ends here -->
<form name="prices" id="prices" method="post" action="{site_url('posts/change_status')}">
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
				<a href="{site_url("posts/save_post/{$post->id}")}" title="edit"><i class="icon-pencil "></i></a>
				&nbsp;
				<a href="{base_url("posts/delete_post/{$post->id}")}" title="delete" class="delete"><i class="icon-trash "></i></a>
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
	<legend align="center">Welcome, No posts added yet.</legend>
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