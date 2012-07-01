<div class="maincontent">

    <div class="col-2-2">
        <div class="blog-post"><!-- blog post 1 -->                    
            <div class="post-content2-single">
                <div class="post-image">
                    <img src="<?=base_url("media/blog_photos/{$post->image}");?>" alt="" class="imgborder2" />                                  
                </div>
                <h5><?=$post->title;?></h5>
                <div class="post-info2">
                    <span><img src="<?=base_url();?>media/site/images/blog-author.png" alt="" /></span> <span><a href="#"><?=$post->author;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; </span>
                    <span><img src="<?=base_url();?>media/site/images/blog-date.png" alt="" /></span> <span><?=date('F, m Y',strtotime($post->date_modified));?></span>
                </div>
                <p><?=$post->body;?></p>
            </div>
            
            <!--Begin sharing box-->
            <div class="sharing-box">
                <div class="share-facebook">
                    <iframe frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; width: 300px; height: 45px;" src="http://www.facebook.com/plugins/like.php?href=<?=current_url();?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light"></iframe>
                </div>
                        
                <div class="share-social">
                    <ul class="sharesocial-bloglist">
                        <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/blog-social/social2.png" alt="" /></a></li>
                        <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/blog-social/social3.png" alt="" /></a></li>
                        <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/blog-social/social4.png" alt="" /></a></li>
                        <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/blog-social/social5.png" alt="" /></a></li>
                        <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/blog-social/social6.png" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <!--End sharing box--> 
            
            <!-- Begin of Related Post -->
            <div id="recentPostList">
                <div id="related-post-title"><h5>Related Posts</h5></div>                                           
                <div class="related-item-wrapper"><!-- related item -->                                                             
                    <a href="blog.html"><img src="<?=base_url();?>media/site/images/related-pic1.jpg" alt="" class="img-related" /></a>
                    <p><a href="blog.html">Nemo enim ipsam voluptate quia voluptas tempora</a></p>
                </div>
                        
                <div class="related-item-wrapper"><!-- related item -->                                                             
                    <a href="blog.html"><img src="<?=base_url();?>media/site/images/related-pic2.jpg" alt="" class="img-related" /></a>
                    <p><a href="blog.html">Accusamus tolo dignissimos ducimus blanditiis explora</a></p>
                </div>
                       
                <div class="related-item-wrapper"><!-- related item -->                                                             
                    <a href="blog.html"><img src="<?=base_url();?>media/site/images/related-pic3.jpg" alt="" class="img-related" /></a>
                    <p><a href="blog.html">Sed ut perspiciatis unde omnis voluptatemi natus</a></p>
                </div>
                        
                <div class="related-item-wrapper-last"><!-- related item -->                                                            
                    <a href="blog.html"><img src="<?=base_url();?>media/site/images/related-pic4.jpg" alt="" class="img-related" /></a>
                    <p><a href="blog.html">Excepteur sint occaecat cupidatat non proident</a></p>
                </div>                                                                                                             
            </div>
            <!-- End of Related Post -->                     
        </div>                
    </div>
    
    <!-- BEGIN OF SIDEBAR -->
        <div class="col-3 sidebar">

            <div class="sidebar-content">

            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <li><a href="#"><img src="<?=base_url();?>media/site/images/banner2.png" alt="" /></a></li>        
                </ul>
            </div>

            <?php if ($classifieds): ?>
                <h5>Classifieds</h5>
                <ul class="popular-list">
                    <?php foreach ($classifieds as $row): ?>
                        <li>
                        <img src="<?=base_url("media/crops/{$row->photo}");?>" alt="" class="imgborder2" />                                                
                        <p class="popular-title"><a href="<?=site_url('marketplace');?>"><?=$row->product_name;?></a></p>
                        <p>KES <?=$row->unit_price;?> per <?=$row->packaging;?></p>                        
                    </li>
                    <?php endforeach ?>                   
                </ul>
            <?php endif ?>

            </div>

            <div class="sidebar-content">
            <h5>Search something?</h5>
            <form id="search" action="#" method="get">
                <fieldset class="search-fieldset">
                    <input type="text" id="search-form" value="Type here..." onblur="if (this.value == ''){this.value = 'Type here...'; }" onfocus="if (this.value == 'Type here...') {this.value = ''; }" />
                    <input type="submit" class="sub-button" value="" />                            
                </fieldset>                             
            </form>
            </div>
            
            <div class="sidebar-content">
            <h5>Blog categories</h5>
                <ul class="sidebar-list">
                    <li><a href="#">Web design and Programing</a></li>                    
                    <li><a href="#">Photoshop and Ilustrator</a></li>                                
                    <li><a href="#">SEO and Internet Marketing</a></li>
                    <li><a href="#">jQuery, AJAX, and PHP</a></li>
                    <li><a href="#">Lifestyle and Technology</a></li>
                </ul>
            </div>
            
            <div class="sidebar-content">
            <h5>Popular post</h5>
                <ul class="popular-list">
                    <li>
                        <img src="<?=base_url();?>media/site/images/blog-img3.jpg" alt="" class="imgborder2" />                                                
                        <p class="popular-title"><a href="#">Supercar A Bolt from Les Bleus</a></p>
                        <p>12 Comments</p>                        
                    </li>                    
                </ul>
            </div>
            
            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <li><a href="#"><img src="<?=base_url();?>media/site/images/banner1.png" alt="" /></a></li>        
                </ul>
            </div>
        </div>
        <!-- END OF SIDEBAR -->      

</div>
</div>            
<!-- END OF CONTENT -->