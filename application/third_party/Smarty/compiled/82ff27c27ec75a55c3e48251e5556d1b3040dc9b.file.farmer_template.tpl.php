<?php /* Smarty version Smarty-3.1.7, created on 2012-10-19 08:08:36
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/layouts/farmer_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18222755925080ee030700c3-38962033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ff27c27ec75a55c3e48251e5556d1b3040dc9b' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/layouts/farmer_template.tpl',
      1 => 1350626915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18222755925080ee030700c3-38962033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5080ee0324460',
  'variables' => 
  array (
    'flash_message' => 0,
    'uri_string' => 0,
    'ci' => 0,
    'user_session' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5080ee0324460')) {function content_5080ee0324460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
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
              <li><a href="<?php echo site_url('farmer/dashboard');?>
"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
categories/" title="Categories">Categories</a></li> -->
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/products/" title="Products"><i class="icon-tags icon-white"></i>  Products</a></li>
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/settings/tips"><i class="icon-leaf icon-white"></i>  Tips</a></li>
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/reports/"><i class="icon-print icon-white"></i>  Reports</a></li>
            </ul>
            <ul class="nav pull-right">
              <!-- <li><a href="#"><span class="badge badge-inverse">A3555</span></a></li> -->
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/settings/"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
auth/logout"><i class="icon-off icon-white"></i>  Logout</a></li>
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
          <strong>Karibu M-Farm!</strong> <?php echo $_smarty_tpl->tpl_vars['flash_message']->value;?>

        </div>
      <?php }?>
      <div class="row-fluid">
        <div class="span3 sidebar">
            <ul class="nav nav-list well">
              <li class="nav-header">MFarm</li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=='farmer/dashboard'){?>class='active'<?php }?>>
                <a href="<?php echo site_url('farmer/dashboard');?>
"><i class="icon-home"></i> Home</a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=="farmer/posts"){?>class='active'<?php }?> >
                <a href='<?php echo site_url("farmer/posts");?>
'><i class="icon-th-list "></i> Posts</a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=='farmer/orders'){?>class='active'<?php }?> >
                <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/orders/"><i class="icon-inbox"></i> Orders</a>
              </li>
              <li class="nav-header">Your Account</li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=="farmer/settings/profile/".($_smarty_tpl->tpl_vars['ci']->value->session->userdata('user_id'))){?>class='active'<?php }?>>
                  <a href='<?php echo site_url("farmer/settings/profile/".($_smarty_tpl->tpl_vars['ci']->value->session->userdata('user_id')));?>
'><i class="icon-user"></i> Profile</a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=="farmer/farm/index/".($_smarty_tpl->tpl_vars['user_session']->value)){?>class='active'<?php }?>>
                <a href='<?php echo site_url("farmer/farm/index/".($_smarty_tpl->tpl_vars['user_session']->value));?>
'><i class="icon-map-marker"></i> My Shamba</a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=='farmer/trends'){?>class='active'<?php }?>>
                <a href="<?php echo site_url('farmer/trends');?>
"><i class="icon-random"></i> Trends</a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=='farmer/settings/invitations'){?>class='active'<?php }?>>
                <a href="<?php echo site_url('farmer/settings/invitations');?>
"><i class="icon-inbox"></i> Invitations</a>
              </li>
              <li class="divider"></li>
              <li <?php if ($_smarty_tpl->tpl_vars['uri_string']->value=='farmer/help'){?>class='active'<?php }?>>
                <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
farmer/help/"><i class="icon-flag"></i> Help</a>
              </li>
            </ul>
        </div>
        <div class="span9">
          <!-- Yield goes here -->
          <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

          <!-- yield end here -->
        </div>
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