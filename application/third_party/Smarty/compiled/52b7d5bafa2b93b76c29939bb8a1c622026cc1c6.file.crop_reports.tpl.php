<?php /* Smarty version Smarty-3.1.7, created on 2012-10-10 19:59:11
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/layouts/crop_reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2402543035075b76f6c1fe8-12674245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b7d5bafa2b93b76c29939bb8a1c622026cc1c6' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/layouts/crop_reports.tpl',
      1 => 1349682924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2402543035075b76f6c1fe8-12674245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flash_message' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5075b76f7b320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5075b76f7b320')) {function content_5075b76f7b320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MFarm KE | Content Management System</title>
    <meta name="description" content="MFarm Application">
    <meta name="author" content="mogetutu, isaak@mogetutu.com, @mogetutu">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
              <li><a href="<?php echo site_url('admin/dashboard');?>
"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
categories/" title="Categories">Categories</a></li> -->
              <li><a href="<?php echo site_url('admin/products/');?>
" title="Products"><i class="icon-tags icon-white"></i>  Products</a></li>
              <li><a href="<?php echo site_url('admin/prices/index/');?>
" title="Prices"><i class="icon-eye-open icon-white"></i>  Prices</a></li>
              <li><a href="<?php echo site_url('admin/sms/');?>
" title="SMS"><i class="icon-comment icon-white"></i>  Sms</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i>  Accounts
                  <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('admin/users/status/active');?>
"><i class="icon-plus"></i>  Active Accounts</a></li>
                  <li><a href="<?php echo site_url('admin/users/status/pending');?>
"><i class="icon-user"></i> Pending Accounts</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo site_url('admin/users');?>
"><i class="icon-list-alt"></i>  All Accounts</a></li>
                </ul>
              </li>
              <li><a href="<?php echo site_url('admin/settings/manage_tips');?>
"><i class="icon-leaf icon-white"></i>  Tips</a></li>
              <li><a href="<?php echo site_url('admin/reports');?>
"><i class="icon-print icon-white"></i>  Reports</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="<?php echo site_url('admin/settings');?>
"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="<?php echo site_url('auth/logout');?>
"><i class="icon-off icon-white"></i>  Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div id='hld'>
      <div class='container-fluid'>
      <?php if (($_smarty_tpl->tpl_vars['flash_message']->value)){?>
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Hi Mkulima!</strong> <?php echo $_smarty_tpl->tpl_vars['flash_message']->value;?>

        </div>
      <?php }?>
      <div class="row-fluid">
        <!-- Yield goes here -->
        <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

        <!-- yield end here -->
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
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('media/js/widgets.js');?>
"></script>
    <script src="<?php echo site_url('media/js/wysihtml5.js');?>
"></script>
    <script src="<?php echo site_url('media/js/bootstrap.min.js');?>
"></script>
    <script src="<?php echo site_url('media/js/bootstrap-wysihtml5.min.js');?>
"></script>
    <script src="<?php echo site_url('media/js/bootstrap-datepicker.js');?>
"></script>
    <script src="<?php echo site_url('media/js/jquery.dataTables.js');?>
"></script>
    <script src="<?php echo site_url('media/js/dt_bootstrap.js');?>
"></script>
    <script src="<?php echo site_url('media/js/highcharts/js/highcharts.js');?>
"></script>
    <script src="<?php echo site_url('media/js/highcharts/js/modules/exporting.js');?>
"></script>
    <script src="<?php echo site_url('media/js/jquery-cookie.js');?>
"></script>
    <script src="<?php echo site_url('media/js/site.js');?>
"></script>
    <script type="text/javascript">
      jQuery(document).ready(function() {
        $('#textarea').wysihtml5();
        $('#textarea1').wysihtml5();
      });

    </script>
  </body>
</html><?php }} ?>