<div class="page-header">
    <div class="pull-right">
        <div class="btn-group">
            <a href="{site_url('farmer/posts/create_new')}" class="btn btn-small"><i class="icon-plus-sign"></i> New</a>
            <a class="btn btn-small" href="{base_url()}farmer/posts/">All</a>
            <a class="btn btn-small" href="{base_url()}farmer/posts/status.live">Live</a>
            <a class="btn btn-small" href="{base_url()}farmer/posts/status.pending">Pending</a>
    </div>
    </div>
    <h2>Your Produce</h2>
</div>
{if ($posts)}
<table class="table table-bordered table-condensed" id="example">
    <thead>
        <tr>
            <th>Last Updated</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Unit Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {foreach $posts as $post}
        <tr>
            <td>{date('Y-m-d',strtotime($post->created_at))}</td>
            <td>{$post->product_name}</td>
            <td>{$post->product_weight} {$post->weight_unit}</td>
            <td>KES {$post->unit_price}</td>
            <td>{$post->post_status}</td>
            <td>
                <ul class="btn-group">
                    <a href='{site_url("farmer/post/update_status/sold/{$post->id}")}' title="Sold"><i class="icon-like"></i>Sold</a>
                    <a href='{site_url("farmer/posts/edit/{$post->id}")}' class="btn btn-small" title="edit"><i class="icon-pencil "></i></a>&nbsp;
                    <a href='{site_url("farmer/posts/delete/{$post->id}")}' class="btn btn-small" title="delete" class="delete"><i class="icon-trash "></i></a>
                </ul>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
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