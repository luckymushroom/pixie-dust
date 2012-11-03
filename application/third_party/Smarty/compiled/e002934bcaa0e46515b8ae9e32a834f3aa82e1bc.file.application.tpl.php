<?php /* Smarty version Smarty-3.1.7, created on 2012-11-01 17:11:38
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/layouts/application.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402792050769c23203432-37168635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e002934bcaa0e46515b8ae9e32a834f3aa82e1bc' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/layouts/application.tpl',
      1 => 1351776623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402792050769c23203432-37168635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50769c23edb40',
  'variables' => 
  array (
    'page_title' => 0,
    'seg_one' => 0,
    'flash_message' => 0,
    'ci' => 0,
    'user_session' => 0,
    'page_subtitle' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50769c23edb40')) {function content_50769c23edb40($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
if (!is_callable('smarty_function_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.url.php';
?><!DOCTYPE HTML>
<html lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://plus.google.com/105305873259684952530" rel="publisher" />
<meta name="description" content="MFarm website homepage">
<meta name="keywords" content="m-farm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm, mfarm kenya,mfarm price">
<meta name="keywords" content="mfarm, mfarmer, mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm, mfarm kenya,mfarm price">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<!-- Apple iOS and Android stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/img/icon.png">
    <link rel="apple-touch-startup-image" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/img/startup.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?> <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 | MFarm Kenya <?php }else{ ?> Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya <?php }?>
    </title>
<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/custom-style.css" rel="stylesheet" type="text/css" />
<?php if ($_smarty_tpl->tpl_vars['seg_one']->value!='contact'&&$_smarty_tpl->tpl_vars['seg_one']->value!='price'){?>
    <link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/bootstrap.css" rel="stylesheet" type="text/css" />
<?php }?>


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/vtip.js"></script>
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/vtip.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jquery.twitter.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/ddaccordion.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/faq-functions.js" ></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jflickrfeed.min.js"></script>
<script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/bootstrap-modal.js"></script>
<script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/quickpager.jquery.js"></script>
<script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/site.js"></script>

<?php if ($_smarty_tpl->tpl_vars['flash_message']->value!=''){?>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            var $alertdiv = $('<div id = "alertmsg"/>');
            $alertdiv.text("<?php echo $_smarty_tpl->tpl_vars['flash_message']->value;?>
");
            $alertdiv.bind('click', function() {
                $(this).slideUp(200);
            });
            $(document.body).append($alertdiv);
            $("#alertmsg").slideDown("slow");
            setTimeout(function() { $alertdiv.slideUp(200) }, 5000);
        });
    </script>
<?php }?>
</head>

<body>
  <div id="container">
      <div id="top-container">

          <!-- BEGIN OF HEADER -->
            <div id="header-container">
              <div id="header-box">

                    <div id="logo">
                        <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
">
                            <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/logo_xmas.png" alt="Mfarm Logo" />
                        </a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                <?php if ($_smarty_tpl->tpl_vars['ci']->value->ion_auth->is_admin()){?>
                                <li><a class="" href="<?php echo site_url('admin/dashboard/');?>
" title="dashboard here">
                                    <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/top-login.png" alt="Logout" /></a>
                                </li>
                                <?php }elseif(!$_smarty_tpl->tpl_vars['ci']->value->ion_auth->is_admin()){?>
                                <li><a class="" href="<?php echo site_url('farmer/dashboard/');?>
" title="dashboard here">
                                    <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/top-login.png" alt="Logout" /></a>
                                </li>
                                <?php }else{ ?>
                                <li><a class="" href="<?php echo site_url('auth/login/');?>
" title="login here"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/top-login.png" alt="Login"/></a></li>
                                <?php }?>
                                <li><a href="https://www.facebook.com/pages/M-Farm/168567086502534" target="_blank" title="facebook">
                                    <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/top-social/social1.png" alt="mfarm-facebook" /></a>
                                </li>
                                <li><a href="https://plus.google.com/105305873259684952530?prsrc=3" target="_blank" title="g+">
                                    <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/top-social/social2.png" alt="mfarm-google+" /></a>
                                </li>
                                <li><a href="https://twitter.com/#!/mfarm_ke" target="_blank" title="twitter">
                                    <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/social-icons/top-social/social3.png" alt="mfarm-twitter" /></a>
                                </li>
                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">M-Farm</span>, we give you up-to-date <a href="<?php echo site_url('price');?>
">market information</a> <br/> link farmers to buyers through our <a href="<?php echo site_url('marketplace');?>
">marketplace</a> and current <a href="<?php echo site_url('blog');?>
">agri-trends.</a></h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='blog'){?> 'class=current' <?php }else{ ?> '' <?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"blog"),$_smarty_tpl);?>
>home</a></li>
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='price'){?> 'class=current' <?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"price"),$_smarty_tpl);?>
 title="mfarm price information">prices</a></li>
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='market'){?> 'class=current'<?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"market"),$_smarty_tpl);?>
>marketplace</a></li>
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='about'){?> 'class=current' <?php }else{ ?> '' <?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"about"),$_smarty_tpl);?>
 title="mfarm agricultural information">about</a></li>
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='services'){?> 'class=current' <?php }else{ ?> '' <?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"services"),$_smarty_tpl);?>
 title="services by mfarm">services</a></li>
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='team'){?> 'class=current' <?php }else{ ?> '' <?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"team"),$_smarty_tpl);?>
 title="mfarm team page">team</a></li>
                                <li<?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='contact'){?> 'class=current' <?php }else{ ?> '' <?php }?>><a href=<?php echo smarty_function_url(array('type'=>"site",'url'=>"contact"),$_smarty_tpl);?>
 title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
          <!-- END OF HEADER -->
            <!-- BEGIN OF PAGE TITLE -->
            <div id="page-title">
                <h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='marketplace'||$_smarty_tpl->tpl_vars['seg_one']->value=='index'||$_smarty_tpl->tpl_vars['seg_one']->value==''||$_smarty_tpl->tpl_vars['seg_one']->value=='market'){?>
                <?php if ($_smarty_tpl->tpl_vars['user_session']->value){?>
                    <?php if ($_smarty_tpl->tpl_vars['ci']->value->ion_auth->is_admin()){?>
                        <a class='button-helios alt-green' id='homepage' href="<?php echo smarty_function_url(array('type'=>"site",'url'=>"admin/dashboard"),$_smarty_tpl);?>
">
                    <?php }else{ ?>
                        <a class='button-helios alt-green' id='homepage' href="<?php echo smarty_function_url(array('type'=>"site",'url'=>"farmer/dashboard"),$_smarty_tpl);?>
">
                    <?php }?>
                        <span>profile</span>
                        </a>
                <?php }else{ ?>
                        <a class='button-helios alt-green' id='homepage' href="<?php echo smarty_function_url(array('type'=>"site",'url'=>"auth/login"),$_smarty_tpl);?>
">
                            <span>sign in</span>
                        </a>
                <?php }?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['page_subtitle']->value)){?>
                    <h6><?php echo $_smarty_tpl->tpl_vars['page_subtitle']->value;?>
</h6>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['seg_one']->value=='team'){?>
                    <!-- begin of portfolio filter -->
                    <ul id="portfolio-filter">
                        <li><a href="#all" title="">All</a></li>
                        <li><a href="#founders" title="" rel="founders">Founders</a></li>
                    </ul>
                    <!-- end of portfolio filter -->
                <?php }?>
            </div>
            <!-- END OF PAGE TITLE -->

            <!-- BEGIN OF CONTENT -->
            <div id="content">
              <!-- Yield goes here -->
                <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

              <!-- yield end here -->
            </div>
            <!-- END OF CONTENT -->

        </div>

        <!-- BEGIN OF BOTTOM CONTENT -->
        <div id="bottom-container">
          <div id="bottom-content">

              <div id="client-logo">
                  <ul>
                        <li><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/client5.gif" alt="techfortrade.org" /></li>
                        <li><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/client1.gif" alt="ipo48" /></li>
                        <li><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/client2.png" alt="samsung" /></li>
                        <li><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/client3.gif" alt="ihub" /></li>
                        <li><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/client4.gif" alt="mlab" /></li>
                        <li><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/client6.gif" alt="infodev" /></li>
                    </ul>
                </div>
                <div class="bottom-column1">
                  <h5>About M-Farm</h5>
                    <p>MFarm Ltd is a software solution and agribusiness company.</p><p> Our main product M-Farm, is a transparency tool for Kenyan farmers where they simply SMS the number 3555 to get information about the retail price of their products, buy their farm inputs directly from manufacturers at favorable prices, and find buyers for their produce.</p>

                </div>
<!--                 <div class="bottom-column2">
                  <h5>Trading Terms</h5>
                    <p>Read our easy to understand Trading Terms so you know how we do business and what we expect from our clients.</p>
                    <p><a href="#">Privacy Policy &amp; Disclaimer</a></p>
                </div> -->
                <div class="bottom-column2">
                  <h5>Our Prices</h5>
                    <p>We collect Wholesale Prices of the commodities listed on our price page. These are from the 5 major markets in Kenya.</p>
                    <p><a href="<?php echo site_url('price');?>
">WholeSale Prices</a></p>
                </div>
                <div class="bottom-column2">
                  <h4>+254 707 933 993</h4>
                    <p><?php echo safe_mailto('info@mfarm.co.ke','info@mfarm.co.ke');?>
</p>
                    <p>Bishop Mague Centre,Opp. Uchumi Hyper Ng'ong rd.<br/>Nairobi, KENYA</p>
                </div>

            </div>
            <div id="footer-wrapper">
              <div id="footer-content">
                  <div class="footer-logo">
                      <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/footer-logo.png" alt="mfarm-footer-logo" />
                    </div>
                    <div class="footer-text">
                      <p>&copy; copyright 2010 - <?php echo date('Y');?>
 M-Farm. Developed by Dev Team M-farm. <br/> Create solutions that empower farmers to work and communicate in new and innovative ways.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF BOTTOM CONTENT -->

    <div class="clear"></div>
    </div>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-21117757-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html><?php }} ?>