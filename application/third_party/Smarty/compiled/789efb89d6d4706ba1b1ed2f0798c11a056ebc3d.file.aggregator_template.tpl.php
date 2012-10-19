<?php /* Smarty version Smarty-3.1.7, created on 2012-10-15 20:42:42
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/layouts/aggregator_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196146851650757064732335-69826405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789efb89d6d4706ba1b1ed2f0798c11a056ebc3d' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/layouts/aggregator_template.tpl',
      1 => 1350326558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196146851650757064732335-69826405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507570648d64a',
  'variables' => 
  array (
    'user_session' => 0,
    'flash_message' => 0,
    'yield_sidebar' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507570648d64a')) {function content_507570648d64a($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MFarm KE | Connecting Farmers</title>
    <meta name="description" content="MFarm Application">
    <meta name="author" content="mogetutu, isaak@mogetutu.com, @mogetutu">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Le styles -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'> -->
    <style type="text/css">body { padding-top: 75px;padding-bottom: 40px; }</style>
    <link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/css/site.css" rel="stylesheet">
    <!-- Dark Theme in the works -->
    <!-- <link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/css/darkstrap.css" rel="stylesheet"> -->
    <!-- jQuery -->
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/jquery.min.js"></script>
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/modernizr-2.5.3.min.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/img/apple-touch-icon-114x114.png">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
">MFarm App</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="<?php echo site_url('aggregator/dashboard');?>
"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
categories/" title="Categories">Categories</a></li> -->
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/products/" title="Products"><i class="icon-tags icon-white"></i> Products</a></li>
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/posts/" title="Posts"><i class="icon-th-list icon-white"></i> Posts</a></li>
              <li>
                <a href='<?php echo site_url("aggregator/users/".($_smarty_tpl->tpl_vars['user_session']->value));?>
'><i class="icon-user icon-white"></i>  Farmers</a>
              </li>
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/settings/tips"><i class="icon-leaf icon-white"></i>  Tips</a></li>
            </ul>
            <ul class="nav pull-right">
              <!-- <li><a href="#"><span class="badge badge-inverse">A3555</span></a></li> -->
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
aggregator/settings/"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
auth/logout"><i class="icon-off icon-white"></i>  Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

      <div class='container'>
      <?php if (($_smarty_tpl->tpl_vars['flash_message']->value)){?>
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Karibu M-Farm!</strong> <?php echo $_smarty_tpl->tpl_vars['flash_message']->value;?>

        </div>
      <?php }?>
      <div class="row-fluid">
        <?php if (isset($_smarty_tpl->tpl_vars['yield_sidebar']->value)){?>
        <div class="span9">
          <!-- Yield goes here -->
          <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

          <!-- yield end here -->
        </div>
        <div class="span3 well">
          <!-- Sidebar -->
          <?php echo $_smarty_tpl->tpl_vars['yield_sidebar']->value;?>

          <!-- end Sidebar -->
        </div>
        <?php }else{ ?>
        <div class="span12">
          <!-- Yield goes here -->
          <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

          <!-- yield end here -->
        </div>
        <?php }?>
      </div>

    <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Designed and built with all the love in the world <a href="http://twitter.com/mfarm_ke" target="_blank">@mfarm_ke</a></p>
      </footer>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/widgets.js"></script>
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/bootstrap.min.js"></script>
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/jquery.dataTables.js"></script>
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/dt_bootstrap.js"></script>
    <script src="<?php echo site_url('media/js/highcharts/js/highcharts.js');?>
"></script>
    <script src="<?php echo site_url('media/js/highcharts/js/modules/exporting.js');?>
"></script>
    <script src="<?php echo site_url('media/js/jquery-cookie.js');?>
"></script>
    <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/js/site.js"></script>
    <?php if (('ENVIRONMENT'=='production')){?>
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
    <?php }?>
  </body>
</html>
<?php }} ?>