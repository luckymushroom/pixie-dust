<div class="maincontent">
        <div class="col-2-2">
            <?php foreach ($posts as $post): ?>
            <div class="blog-post"><!-- blog posts here --> 
                <div class="post-image">
                    <img src="<?=base_url();?>media/site/images/blog-img1-1.jpg" alt="" class="imgborder2" />                                  
                </div>
                <div class="post-content2">
                    <h5><a href="<?=site_url("blog/post/{$post->id}");?>"><?=$post->title;?></a></h5>
                    <div class="post-info2">
                        <span><img src="<?=base_url();?>media/site/images/blog-author.png" alt="" /></span> <span><a href="#"><?=$post->username;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; </span>
                        <span><img src="<?=base_url();?>media/site/images/blog-date.png" alt="" /></span> <span>Okt 28 2011</span>
                    </div>
                    <p>Nokia yesterday unveiled a new crop of smartphones that could put the company back in the smartphone race with rivals iPhone and Android. It could also mark a turnaround for Microsoft's unpopular Windows Phone 7 software.</p>
                    <div class="social-button">
                        <ul class="sharesocial-bloglist">
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social1.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social2.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social3.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social4.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social5.png" alt="" /></a></li>
                        </ul>
                        <a href="<?=site_url('blog/post/');?>" class="button small gray"><span>read full article &raquo;</span></a>
                    </div>                                
                </div>                            
            </div>
            <?php endforeach ?>                
            
            <!-- begin of pagination -->
            <div class="blog-pagination">
                <?=$this->pagination->create_links();?>
            </div>
            <!-- end of pagination -->                        
        </div>
        
        <!-- BEGIN OF SIDEBAR -->
        <div class="col-3 sidebar">

            <div class="sidebar-content">

            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <li><a href="#"><img src="<?=base_url();?>media/site/images/banner1.png" alt="" /></a></li>        
                </ul>
            </div>

            <h5>Classifieds</h5>
                <ul class="popular-list">
                    <li>
                        <img src="<?=base_url();?>media/site/images/blog-img3.jpg" alt="" class="imgborder2" />                                                
                        <p class="popular-title"><a href="#">Supercar A Bolt from Les Bleus</a></p>
                        <p>12 Comments</p>                        
                    </li>
                    <li>
                        <img src="<?=base_url();?>media/site/images/blog-img1.jpg" alt="" class="imgborder2" />                                                
                        <p class="popular-title"><a href="#">Nokia with First Windows Phone Handsets</a></p>
                        <p>8 Comments</p>                              
                    </li>
                    <li>
                        <img src="<?=base_url();?>media/site/images/blog-img2.jpg" alt="" class="imgborder2" />                                                
                        <p class="popular-title"><a href="#">Artificial Blood That Could be Used Transfusions</a></p>
                        <p>4 Comments</p>                                
                    </li>                     
                </ul>
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