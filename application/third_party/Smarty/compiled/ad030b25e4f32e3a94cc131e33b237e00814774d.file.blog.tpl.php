<?php /* Smarty version Smarty-3.1.7, created on 2012-10-24 19:26:12
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/site/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4777951305076ca6cca1484-28681192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad030b25e4f32e3a94cc131e33b237e00814774d' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/site/blog.tpl',
      1 => 1350908506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4777951305076ca6cca1484-28681192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5076ca6cf2eca',
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'create_links' => 0,
    'classifieds' => 0,
    'row' => 0,
    'blog_categories' => 0,
    'recent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5076ca6cf2eca')) {function content_5076ca6cf2eca($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="maincontent">
    <div class="col-2-2">
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <div class="blog-post"><!-- blog posts here -->
            <div class="post-image">
                <img src='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value->image)===null||$tmp==='' ? "default-thumb.gif" : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo base_url("media/blog_photos/".$_tmp1);?>
' alt="" class="imgborder2" />
            </div>
            <div class="post-content2">
                <h5><a href='<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
'><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a></h5>
                <div class="post-info2">
                    <span><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/blog-author.png" alt="" /></span> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</a> &nbsp;&nbsp;|&nbsp;&nbsp; </span>
                    <span><img src="<?php echo base_url();?>
media/site/images/blog-date.png" alt="" /></span> <span><?php echo date('F, d Y',strtotime($_smarty_tpl->tpl_vars['post']->value->created_at));?>
</span>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->intro;?>
</p>
                <div class="social-button">
                    <ul class="sharesocial-bloglist">
                        <li class="social">
                            <a href='http://www.facebook.com/share.php?u=<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
'>
                                <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/blog-social/social1.png" alt="" />
                            </a>
                        </li>
                        <li class="social">
                            <a href='https://plus.google.com/share?url=<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
' alt="Share on Google+"/>
                                <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/blog-social/social2.png" alt="" />
                            </a>
                        </li>
                        <li class="social">
                            <a href='http://twitter.com/share?text=<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
&url=<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
' class="social">
                                <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/blog-social/social3.png" alt="" />
                            </a>
                        </li>
                    </ul>
                    <a href='<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['post']->value->slug));?>
' class="button small gray"><span>read full article &raquo;</span></a>
                </div>
            </div>
        </div>
        <?php } ?>

        <!-- begin of pagination -->
        <div class="blog-pagination">
            <?php echo $_smarty_tpl->tpl_vars['create_links']->value;?>

        </div>
        <!-- end of pagination -->
    </div>

    <!-- BEGIN OF SIDEBAR -->
    <div class="col-3 sidebar">

        <div class="sidebar-content">

        <div class="sidebar-content">
            <ul class="sponsor-list">
                <!-- <li><a href="#"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/banner2.png" alt="" /></a></li> -->
                <li><iframe class="youtube-player" type="text/html" width="178" height="98" src="http://www.youtube.com/embed/UZehf7pd8HM" frameborder="0"></iframe></li>
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
                    <img src='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->post_photo)===null||$tmp==='' ? 'default-thumb.gif' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo base_url("media/crops/".$_tmp2);?>
' alt="" class="imgborder2" />
                    <p class="popular-title"><a href="<?php echo site_url('marketplace');?>
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
                    <img src='<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->image)===null||$tmp==='' ? 'default-thumb.gif' : $tmp);?>
<?php $_tmp3=ob_get_clean();?><?php echo base_url("media/blog_photos/".$_tmp3);?>
' alt="" class="imgborder2" />
                    <p class="popular-title"><a href='<?php echo site_url("blog/post/".($_smarty_tpl->tpl_vars['row']->value->slug));?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value->title;?>
</a></p>
                    <p><?php echo date('F, m Y',strtotime($_smarty_tpl->tpl_vars['row']->value->created_at));?>
</p>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="sidebar-content">
            <ul class="sponsor-list">
                <li>
                    <a href="http://www.techfortrade.org" target="_blank" title="Tech for Trade">
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
<!-- END OF CONTENT -->
<script type="text/javascript">
$(document).ready(function(){
    $('.social a').click(function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        win = window.open(url,'window','height=350,width=550');
    });
});
</script><?php }} ?>