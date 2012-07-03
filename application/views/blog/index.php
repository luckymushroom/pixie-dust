<div class="maincontent">
        <div class="col-2-2">
            <?php foreach ($posts as $post): ?>
            <div class="blog-post"><!-- blog posts here --> 
                <div class="post-image">
                    <img src='<?=base_url("media/blog_photos/{$post->image}");?>' alt="" class="imgborder2" />                                  
                </div>
                <div class="post-content2">
                    <h5><a href="<?=site_url("blog/post/{$post->id}");?>"><?=$post->title;?></a></h5>
                    <div class="post-info2">
                        <span><img src="<?=base_url();?>media/site/images/blog-author.png" alt="" /></span> <span><a href="#"><?=$post->author;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; </span>
                        <span><img src="<?=base_url();?>media/site/images/blog-date.png" alt="" /></span> <span><?=date('F, m Y',strtotime($post->date_modified));?></span>
                    </div>
                    <p><?=$post->intro;?></p>
                    <div class="social-button">
                        <ul class="sharesocial-bloglist">
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social1.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social2.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=base_url();?>media/site/images/social-icons/top-social/social3.png" alt="" /></a></li>
                        </ul>
                        <a href="<?=site_url("blog/post/{$post->id}");?>" class="button small gray"><span>read full article &raquo;</span></a>
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
                    <?php foreach ($blog_categories as $row): ?>
                        <li><a href="#"><?=$row->title;?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            
            <div class="sidebar-content">
            <h5>Recent post</h5>
                <ul class="popular-list">
                    <?php foreach ($recent as $row): ?>
                    <li>
                        <img src='<?=base_url("media/blog_photos/{$row->image}");?>' alt="" class="imgborder2" />                                                
                        <p class="popular-title"><a href="<?=site_url("blog/post/{$row->id}");?>"><?=$row->title;?></a></p>
                        <p><?=date('F, m Y',strtotime($row->date_modified));?></p>                        
                    </li> 
                    <?php endforeach ?>                  
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