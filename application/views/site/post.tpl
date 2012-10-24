<div class="maincontent">

    <div class="col-2-2">
        <div class="blog-post"><!-- blog post 1 -->
            <div class="post-content2-single">
                <div class="post-image">
                    <img src='{base_url("media/blog_photos/{$post->image|default:"default-thumb.gif"}")}' alt="blog post photo" class="imgborder2" />
                </div>
                <h5>{$post->title}</h5>
                <div class="post-info2">
                    <span>
                        <img src="{base_url}media/site/images/blog-author.png" alt="" /></span> <span><a href="#">{$post->username}</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    </span>
                    <span><img src="{base_url}media/site/images/blog-date.png" alt="" /></span>
                    <span>{date('F, d Y',strtotime($post->created_at))}</span>
                </div>
                <p>{$post->body}</p>
            </div>

            <!--Begin sharing box-->
            <div class="sharing-box">
                <div class="share-facebook">
                    <iframe frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; width: 300px; height: 45px;" src="http://www.facebook.com/plugins/like.php?href={current_url()}&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light"></iframe>
                </div>
                <div class="share-social">
                <ul class="sharesocial-bloglist">
                    <li class="social">
                        <a href='http://www.facebook.com/share.php?u={site_url("blog/post/{$post->slug}")}'>
                            <img src="{base_url}media/site/images/social-icons/blog-social/social1.png" alt="" />
                        </a>
                    </li>
                    <li class="social">
                        <a href='https://plus.google.com/share?url={site_url("blog/post/{$post->slug}")}' alt="Share on Google+"/>
                            <img src="{base_url}media/site/images/social-icons/blog-social/social2.png" alt="" /></a>
                    </li>
                    <li class="social">
                        <a href='http://twitter.com/share?text={$post->title}&url={site_url("blog/post/{$post->slug}")}' class="social">
                            <img src="{base_url}media/site/images/social-icons/blog-social/social3.png" alt="" />
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            <!--End sharing box-->

            <!-- Comments box -->
            {$disqus}
            <!-- Begin of Related Post -->
            {if $related_posts }
            <div id="recentPostList">
                <div id="related-post-title"><h5>Related Posts</h5></div>
                {foreach $related_posts as $related_post }
                <div class="related-item-wrapper"><!-- 4 related items -->
                    <a href='{site_url("blog/post/{$related_post->slug}")}'>
                        <img src='{base_url("media/blog_photos/{$related_post->thumbnail|default:"default-thumb.gif"}")}' alt="{$related_post->title}" class="img-related" width="97" height="104" />
                    </a>
                    <p><a href='{site_url("blog/post/{$related_post->slug}")}'>{$related_post->title}</a></p>
                </div>
                {/foreach}
            </div>
            {/if}
            <!-- End of Related Post -->
        </div>
    </div>

    <!-- BEGIN OF SIDEBAR -->
        <div class="col-3 sidebar">

            <div class="sidebar-content">

            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <!-- <li><a href="#"><img src="{base_url}media/site/images/banner2.png" alt="" /></a></li> -->
                    <li><a href="#">
                        <iframe class="youtube-player" type="text/html" width="178" height="98" src="http://www.youtube.com/embed/UZehf7pd8HM" frameborder="0"></iframe>
                    </li>
                </ul>
            </div>

            {if isset($classifieds)}
                <h5>On Sale</h5>
                <ul class="popular-list">
                    {foreach $classifieds as $row }
                        <li>
                        <img src='{base_url("media/crops/{$row->post_photo|default:"default-thumb.gif"}")}' alt="" class="imgborder2" />
                        <p class="popular-title"><a href="{site_url('market')}">{$row->product_name}</a></p>
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
                    {foreach $recent as $row }
                    <li>
                        <img src='{base_url("media/blog_photos/{$row->image}")}' alt="mfarm post photo" class="imgborder2" />
                        <p class="popular-title"><a href='{site_url("blog/post/{$row->slug}")}'>{$row->title}</a></p>
                        <p>{date('F, m Y',strtotime($row->created_at))}</p>
                    </li>
                    {/foreach}
                </ul>
            </div>

            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <li>
                        <a href="http://www.techfortrade.org" target="_blank" title="Supported by Tech for Trade">
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