<?php /* Smarty version Smarty-3.1.7, created on 2012-10-12 12:39:07
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/site/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8153155085077f34b7903b6-01349484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed96eb88a9b45887d51205462842d58dd18634fe' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/site/post.tpl',
      1 => 1348674477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8153155085077f34b7903b6-01349484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'disqus' => 0,
    'related_posts' => 0,
    'related_post' => 0,
    'classifieds' => 0,
    'row' => 0,
    'blog_categories' => 0,
    'recent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5077f34ba4cef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5077f34ba4cef')) {function content_5077f34ba4cef($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="maincontent">

    <div class="col-2-2">
        <div class="blog-post"><!-- blog post 1 -->
            <div class="post-content2-single">
                <div class="post-image">
                    <img src='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->image)===null||$tmp==='' ? "default-thumb.gif" : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo base_url("media/blog_photos/".$_tmp1);?>
' alt="blog post photo" class="imgborder2" />
                </div>
                <h5><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h5>
                <div class="post-info2">
                    <span>
                        <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/blog-author.png" alt="" /></span> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    </span>
                    <span><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/blog-date.png" alt="" /></span>
                    <span><?php echo date('F, d Y',strtotime($_smarty_tpl->tpl_vars['post']->value->created_at));?>
</span>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->body;?>
</p>
            </div>

            <!--Begin sharing box-->
            <div class="sharing-box">
                <div class="share-facebook">
                    <iframe frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; width: 300px; height: 45px;" src="http://www.facebook.com/plugins/like.php?href=<?php echo current_url();?>
&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light"></iframe>
                </div>
                <div class="share-social">
                <ul class="sharesocial-bloglist">
                    <li class="social">
                        <a href="http://www.facebook.com/share.php?u=<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
">
                            <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/blog-social/social1.png" alt="" />
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://plus.google.com/share?url=<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
" alt="Share on Google+"/>
                            <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/blog-social/social2.png" alt="" /></a>
                    </li>
                    <li class="social">
                        <a href="http://twitter.com/share?text=<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
&url=<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
" class="social">
                            <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/blog-social/social3.png" alt="" />
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            <!--End sharing box-->

            <!-- Comments box -->
            <?php echo $_smarty_tpl->tpl_vars['disqus']->value;?>

            <!-- Begin of Related Post -->
            <?php if ($_smarty_tpl->tpl_vars['related_posts']->value){?>
            <div id="recentPostList">
                <div id="related-post-title"><h5>Related Posts</h5></div>
                <?php  $_smarty_tpl->tpl_vars['related_post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_post']->key => $_smarty_tpl->tpl_vars['related_post']->value){
$_smarty_tpl->tpl_vars['related_post']->_loop = true;
?>
                <div class="related-item-wrapper"><!-- 4 related items -->
                    <a href='<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['related_post']->value->slug));?>
'>
                        <img src='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['related_post']->value->thumbnail)===null||$tmp==='' ? "default-thumb.gif" : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo base_url("media/blog_photos/".$_tmp2);?>
' alt="<?php echo $_smarty_tpl->tpl_vars['related_post']->value->title;?>
" class="img-related" width="97" height="104" />
                    </a>
                    <p><a href='<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['related_post']->value->slug));?>
'><?php echo $_smarty_tpl->tpl_vars['related_post']->value->title;?>
</a></p>
                </div>
                <?php } ?>
            </div>
            <?php }?>
            <!-- End of Related Post -->
        </div>
    </div>

    <!-- BEGIN OF SIDEBAR -->
        <div class="col-3 sidebar">

            <div class="sidebar-content">

            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <!-- <li><a href="#"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/banner2.png" alt="" /></a></li> -->
                    <li><a href="#">
                        <iframe class="youtube-player" type="text/html" width="178" height="98" src="http://www.youtube.com/embed/UZehf7pd8HM" frameborder="0"></iframe>
                    </li>
                </ul>
            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['classifieds']->value)){?>
                <h5>On Sale</h5>
                <ul class="popular-list">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classifieds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <li>
                        <img src='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->post_photo)===null||$tmp==='' ? "default-thumb.gif" : $tmp);?>
<?php $_tmp3=ob_get_clean();?><?php echo base_url("media/crops/".$_tmp3);?>
' alt="" class="imgborder2" />
                        <p class="popular-title"><a href="<?php echo site_url('market');?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->product_name;?>
</a></p>
                        <p>KES <?php echo $_smarty_tpl->tpl_vars['row']->value->unit_price;?>
 per <?php echo $_smarty_tpl->tpl_vars['row']->value->packaging;?>
</p>
                    </li>
                    <?php } ?>
                </ul>
            <?php }?>

            </div>


            <div class="sidebar-content">
            <h5>Blog categories</h5>
                <ul class="sidebar-list">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value->title;?>
</a></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="sidebar-content">
            <h5>Recent post</h5>
                <ul class="popular-list">
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <li>
                        <img src="<?php echo base_url("media/blog_photos/".($_smarty_tpl->tpl_vars['post']->value->image));?>
" alt="" class="imgborder2" />
                        <p class="popular-title"><a href='<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
'><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a></p>
                        <p><?php echo date('F, m Y',strtotime($_smarty_tpl->tpl_vars['post']->value->created_at));?>
</p>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="sidebar-content">
                <ul class="sponsor-list">
                    <li>
                        <a href="http://www.techfortrade.org" target="_blank" title="Supported by Tech for Trade">
                            <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/banner1.png" alt="" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END OF SIDEBAR -->

</div>
</div>
<!-- END OF CONTENT --><?php }} ?>