<!-- Page header -->
<div class="page-header">
        <div class="btn-group pull-right">
            <a href='{site_url("aggregator/users/{$user_session}")}' class="btn btn-small">
                <i class="icon-chevron-left"></i> All Farmers
            </a>
            <a href='{site_url("aggregator/posts/user_posts/{$seg_four}")}' class="btn btn-small"><i class="icon-inbox"></i> Posts</a>
            <a href='{site_url("aggregator/posts/user_posts/{$seg_four}/approved")}' class="btn btn-small"><i class="icon-ok"></i> Approved</a>
            <a href='{site_url("aggregator/posts/user_posts/{$seg_four}/rejected")}' class="btn btn-small"><i class="icon-remove"></i> Rejected</a>
        </div>
    <h2>Posts: Week {date('W')}</h2>
</div>
<!-- ends here -->
<form name="prices" id="prices" method="post" action="{site_url('posts/change_status')}">
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
            <td>{$post->product_weight} {$post->weight_unit}</td>
            <td>
                <ul class="btn-group">
                {if $post->post_status == 'approved' || $post->post_status == 'rejected'}
                <a class='btn btn-small' href="#"><i class='icon-lock'></i> {$post->post_status}</a>
                {else}
                <a class="btn btn-small" href='{site_url("aggregator/posts/edit/{$post->id}")}' title="edit">
                    <i class="icon-pencil"></i></a>
                 <a class="btn btn-small" href='{site_url("aggregator/posts/approve/{$post->id}")}' title="approve">
                    <i class="icon-ok"></i></a>
                <a class="btn btn-small" href='{site_url("aggregator/posts/decline/{$post->id}")}' title="decline">
                    <i class="icon-remove"></i></a>
                {/if}
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
    <legend align="center">Welcome, No posts here.</legend>
{/if}
