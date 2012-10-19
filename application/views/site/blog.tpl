<div class="maincontent">
    <div class="col-2-2">
        {foreach $posts as $post}
        <div class="blog-post"><!-- blog posts here -->
            <div class="post-image">
                <img src='{base_url("media/blog_photos/{$post->image|default:"default-thumb.gif"}")}' alt="" class="imgborder2" />
            </div>
            <div class="post-content2">
                <h5><a href="{site_url("blog/post/{$post->slug}")}">{$post->title}</a></h5>
                <div class="post-info2">
                    <span><img src="{base_url}media/site/images/blog-author.png" alt="" /></span> <span><a href="#">{$post->username}</a> &nbsp;&nbsp;|&nbsp;&nbsp; </span>
                    <span><img src="{base_url()}media/site/images/blog-date.png" alt="" /></span> <span>{date('F, d Y',strtotime($post->created_at))}</span>
                </div>
                <p>{$post->intro}</p>
                <div class="social-button">
                    <ul class="sharesocial-bloglist">
                        <li class="social">
                            <a href='http://www.facebook.com/share.php?u={site_url("blog/post/{$post->slug}")}'>
                                <img src="{base_url}media/site/images/social-icons/blog-social/social1.png" alt="" />
                            </a>
                        </li>
                        <li class="social">
                            <a href='https://plus.google.com/share?url={site_url("blog/post/{$post->slug}")}' alt="Share on Google+"/>
                                <img src="{base_url}media/site/images/social-icons/blog-social/social2.png" alt="" />
                            </a>
                        </li>
                        <li class="social">
                            <a href='http://twitter.com/share?text={$post->title}&url={site_url("blog/post/{$post->slug}")}' class="social">
                                <img src="{base_url}media/site/images/social-icons/blog-social/social3.png" alt="" />
                            </a>
                        </li>
                    </ul>
                    <a href='{site_url("blog/post/{$post->slug}")}' class="button small gray"><span>read full article &raquo;</span></a>
                </div>
            </div>
        </div>
        {/foreach}

        <!-- begin of pagination -->
        <div class="blog-pagination">
            {$create_links}
        </div>
        <!-- end of pagination -->
    </div>

    <!-- BEGIN OF SIDEBAR -->
    <div class="col-3 sidebar">

        <div class="sidebar-content">

        <div class="sidebar-content">
            <ul class="sponsor-list">
                <!-- <li><a href="#"><img src="{base_url}media/site/images/banner2.png" alt="" /></a></li> -->
                <li><iframe class="youtube-player" type="text/html" width="178" height="98" src="http://www.youtube.com/embed/UZehf7pd8HM" frameborder="0"></iframe></li>
            </ul>
        </div>

        {if isset($classifieds)}
            <h5>On Sale</h5>
            <ul class="popular-list">
                {foreach $classifieds as $row}
                    <li>
                    <img src='{base_url("media/crops/{$row->post_photo|default:'default-thumb.gif'}")}' alt="" class="imgborder2" />
                    <p class="popular-title"><a href="{site_url('marketplace')}">{$row->product_name}</a></p>
                    <p>KES {$row->unit_price} per {$row->packaging}</p>
                </li>
                {/foreach}
            </ul>
        {/if}

        </div>

        <div class="sidebar-content">
        <h5>Blog categories</h5>
            <ul class="sidebar-list">
                {foreach $blog_categories as $row}
                    <li><a href="#">{$row->title}</a></li>
                {/foreach}
            </ul>
        </div>

        <div class="sidebar-content">
        <h5>Recent post</h5>
            <ul class="popular-list">
                {foreach $recent as $row}
                <li>
                    <img src='{base_url("media/blog_photos/{$row->image|default:'default-thumb.gif'}")}' alt="" class="imgborder2" />
                    <p class="popular-title"><a href='{site_url("blog/post/{$row->slug}")}'>{$row->title}</a></p>
                    <p>{date('F, m Y',strtotime($row->created_at))}</p>
                </li>
                {/foreach}
            </ul>
        </div>

        <div class="sidebar-content">
            <ul class="sponsor-list">
                <li>
                    <a href="http://www.techfortrade.org" target="_blank" title="Tech for Trade">
                        <img src="{base_url}media/site/images/banner1.png" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END OF SIDEBAR -->
    </div>
</div>
<!-- END OF CONTENT -->
<script type="text/javascript">
$(document).ready(function(){
    $('.social a').click(function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        win = window.open(url,'window','height=350,width=550');
    });
});
</script>