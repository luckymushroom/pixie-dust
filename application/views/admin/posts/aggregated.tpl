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
			<th>Date Posted</th>
			<th>Name</th>
			<th>Total Weight</th>
			<th>Entries</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{foreach $posts as $post}
		<tr>
			<td>{date('Y-m-d',strtotime($post->date_created))}</td>
			<td>{$post->product_name}</td>
			<td>{$post->total_weight} {$post->weight_unit}</td>
			<td>{$post->entries}</td>
			<td>
				<ul class="btn-group">
				<a class="btn" href='{base_url("admin/posts/{$post->product_id}/products/{$user_session}/users")}' title="edit"><i class="icon-eye-open"></i></a>
				<a class="btn" href="#" title="take online"><i class="icon-chevron-up"></i></a>
				<a class="btn" href="#" title="take offline"><i class="icon-chevron-down"></i></a>
				</ul>
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