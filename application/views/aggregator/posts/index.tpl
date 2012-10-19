<!-- Page header -->
<div class="page-header">
        <div class="btn-group pull-right">
            {if $seg_three === 'status'}
            <a href='{site_url("aggregator/posts")}' class="btn btn-small"><i class="icon-chevron-left"></i> All Posts</a>
            {/if}
            <a href='{site_url("aggregator/posts/status/approved")}' class="btn btn-small"><i class="icon-ok"></i> Approved</a>
            <a href='{site_url("aggregator/posts/status/rejected")}' class="btn btn-small"><i class="icon-remove"></i> Rejected</a>
        </div>
    <h2>Week: {$weeknumber|default:date('W')}</h2>
</div>
<!-- ends here -->
{if ($posts)}
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <th>Date Posted</th>
            <th>Farmer</th>
            <th>Name</th>
            <th>Total Weight</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {foreach $posts as $post}
        <tr>
            <td>{date('Y-m-d H:i:s',strtotime($post->created_at))}</td>
            <td>{$post->username}</td>
            <td>{$post->product_name}</td>
            <form name="prices" id="prices" method="post" action='{site_url("aggregator/posts/edit/{$post->id}")}'>
            <td>
                <input type='text' class='input-small' name='approved_product_weight' value='{$post->approved_product_weight|default:$post->product_weight} {$post->weight_unit}'>
            </td>
            <td>
                <ul class="btn-group">
                {if $post->approved_product_weight}
                <a class='btn btn-small' href="#"><i class='icon-lock'></i> Approved</a>
                {else}
                <button type="submit" class="btn btn-small"><i class="icon-ok"></i> Accept</button>
                {/if}
                </ul>
            </td>
            </form>
        </tr>
        {/foreach}
    </tbody>
</table>
</form>
<br><br>
<h3>Totals</h3>
<table class="table table-bordered" id="example">
    <thead>
        <tr>
            <th>Product</th>
            <th>Total Weight</th>
            <th>Not Accepted</th>
        </tr>
    </thead>
    <tbody>
        {foreach $posts as $post}
        <tr>
            <td>{$post->product_name}</td>
            <td>{$post->total_weight} {$post->weight_unit}</td>
            <td>{($post->total_product_weight - $post->total_weight)} {$post->weight_unit}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
{else}
    <legend align="center">Welcome, No posts added yet.</legend>
{/if}

<!-- Script for checkboxes -->
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