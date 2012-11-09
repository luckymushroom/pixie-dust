<div class="page-header">
    <h3>Dashboard</h3>
</div>
<!-- Data Panel -->
<ul class="thumbnails">
    <li class="span3">
        <div class="thumbnail box-shadow">
        <h4>Aggregator code</h4>
        <p class='label label-warning'>{$aggregation_code->is_aggregator}</p>
        </div>
    </li>
    <li class="span3">
        <div class="thumbnail box-shadow">
        <h4>New Farmers ({count($farmers)})</h4>
        <ul>
        {foreach $farmers as $farmer}
            <li><label class='label'>{$farmer->username}</label></li>
        {/foreach}
        </ul>

        <br>
        <div class='btn-group'>
            <a href='{site_url("aggregator/users/{$user_session}")}' class='btn btn-small'>Go To Farmers</a>
        </div>
        </div>
    </li>

    <li class="span3">
        <div class="thumbnail box-shadow">
        <h4>Recent Posts ({count($posts)})</h4>
        <ul>
        {foreach $posts as $post}
            <li>
                <label class='label'>{$post->product_name} - {$post->product_weight} {$post->weight_unit}</label>
            </li>
        {/foreach}
        </ul>

        <br>
        <div class='btn-group'>
            <a href='{site_url("aggregator/posts")}' title="" class='btn btn-small'>Go To Posts</a>
        </div>
        </div>
    </li>
</ul>