<?php /* Smarty version Smarty-3.1.7, created on 2012-11-03 11:24:12
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/layouts/auth_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17748587215087e19df04d09-20752222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78747f8e97b3e2024fcd975def2c1899262d5665' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/layouts/auth_template.tpl',
      1 => 1351931049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17748587215087e19df04d09-20752222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5087e19e044f7',
  'variables' => 
  array (
    'flash_message' => 0,
    'message' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5087e19e044f7')) {function content_5087e19e044f7($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MFarm KE | Welcome to Farm Management App</title>
    <meta name="description" content="MFarm Application">
    <meta name="author" content="mogetutu, isaak@mogetutu.com, @mogetutu">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style type="text/css">body{ padding-bottom: 40px; }</style>
    <link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/css/font-awesome.css" rel="stylesheet">
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
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
">MFarm App</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
"><i class="icon-home icon-white"></i>  Back To Site</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

    </div>

      <div class='container'>
      <?php if (($_smarty_tpl->tpl_vars['flash_message']->value)){?>
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <?php echo $_smarty_tpl->tpl_vars['flash_message']->value;?>

        </div>
      <?php }elseif(($_smarty_tpl->tpl_vars['message']->value)){?>
        <div class="alert alert-success">
        <a class="close" data-dismiss="alert">&times;</a>
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
      <?php }?>
      <div class="row">
        <div class="span4 offset4 well">
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
</html><?php }} ?>