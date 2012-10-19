<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administration Panel | MFarm KE</title>
    <meta name="description" content="MFarm Application">
    <meta name="author" content="mogetutu, isaak@mogetutu.com, @mogetutu">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Le styles -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'> -->
    <style type="text/css">body { padding-top: 75px;padding-bottom: 40px; }</style>
    <link href="{base_url}media/css/bootstrap.min.css" rel="stylesheet">
    <link href="{base_url}media/css/daterangepicker.css" rel="stylesheet">

    <link href="{base_url}media/css/site.css" rel="stylesheet">
    <!-- Dark Theme in the works -->
    <!-- <link href="{base_url}media/css/darkstrap.css" rel="stylesheet"> -->
    <!-- jQuery -->
    <script src="{base_url}media/js/jquery.min.js"></script>
    <script src="{base_url}media/js/modernizr-2.5.3.min.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{base_url}favicon.ico">
    <link rel="apple-touch-icon" href="{base_url}media/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{base_url}media/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{base_url}media/img/apple-touch-icon-114x114.png">
  </head>

  <body>
<!--   <div id="hellobar-wrapper" class="hellobar-right hellobar-dark-images hidden-phone">
    <div id="hellobar-container" class="">
      <span>System Driven Information will be posted here</span>
        <a href="#close" id="hellobar-close">Close</a>
        <div id="hellobar-shadow"></div>
    </div>
    <div id="hellobar-open" class="hidden">
      <a href="#close" id="hellobar-open">Open</a>
    </div>
  </div> -->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{base_url}">MFarm App</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="{site_url('admin/dashboard')}"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="{base_url}categories/" title="Categories">Categories</a></li> -->
              <li><a href="{site_url('admin/products/')}" title="Products"><i class="icon-tags icon-white"></i>  Products</a></li>
              <li><a href="{site_url('admin/prices/index/')}" title="Prices"><i class="icon-eye-open icon-white"></i>  Prices</a></li>
              <li><a href="{site_url('admin/sms/')}" title="SMS"><i class="icon-comment icon-white"></i>  Sms</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i>  Accounts 
                  <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{site_url('admin/users/status/active')}"><i class="icon-plus"></i>  Active Accounts</a></li>
                  <li><a href="{site_url('admin/users/status/pending')}"><i class="icon-user"></i> Pending Accounts</a></li>
                  <li class="divider"></li>
                  <li><a href="{site_url('admin/users')}"><i class="icon-list-alt"></i>  All Accounts</a></li>
                </ul>
              </li>
              <li><a href="{site_url('admin/settings/manage_tips')}"><i class="icon-leaf icon-white"></i>  Tips</a></li>
              <li><a href="{site_url('admin/reports')}"><i class="icon-print icon-white"></i>  Reports</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="{site_url('admin/settings')}"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="{site_url('auth/logout')}"><i class="icon-off icon-white"></i>  Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class='container-fluid'>
      {if ($flash_message)}
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Karibu Admin!</strong> {$flash_message}
        </div>
      {/if}
      <div class="row-fluid">
        <div class="span3 hidden-phone">
            <ul class="nav nav-list well">
              <li class="nav-header">MFarm</li>
              <li {if $uri_string == 'admin/dashboard' || $uri_string == ''}class='active'{/if}>
                <a href="{site_url('admin/dashboard/')}"><i class="icon-home"></i> Home</a>
              </li>
              <li {if $uri_string == 'admin/posts'}class='active'{/if}>
                <a href="{site_url('admin/posts/')}"><i class="icon-th-list "></i> Posts</a>
              </li>
              <li {if $uri_string == 'admin/blog'}class='active'{/if}>
                <a href="{site_url('admin/blog')}"><i class="icon-th-list "></i> Blog</a>
              </li>
              <li {if $uri_string == 'admin/orders'}class='active'{/if}>
                <a href="{site_url('admin/orders/')}"><i class="icon-inbox"></i> Orders</a>
              </li>
              <li class="nav-header">Your Account</li>
              <li {if $uri_string == 'admin/settings/profile'}class='active'{/if}>
                  <a href='{site_url("admin/settings/profile/{$ci->session->userdata("user_id")}")}'><i class="icon-user"></i> Profile</a>
              </li>
              <li {if $uri_string == 'admin/trends'}class='active'{/if}>
                <a href="{site_url('admin/trends')}"><i class="icon-random"></i> Trends</a>
              </li>
              <li {if $uri_string == 'admin/settings/invitations'}class='active'{/if}>
                <a href="{site_url('admin/settings/invitations')}"><i class="icon-inbox"></i> Invitations</a>
              </li>
              <li class="divider"></li>
              <li {if $uri_string == 'help'}class='active'{/if}>
                <a href="{base_url}help/"><i class="icon-flag"></i> Help</a>
              </li>
            </ul>
        </div>
        <div class="span9">
          <!-- Yield goes here -->
          {$yield}
          <!-- yield end here -->
        </div>
      </div>
    </div><!-- /container -->

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container-fluid">
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>Designed and built with all the love in the world <a href="http://twitter.com/mfarm_ke" target="_blank">@mfarm_ke</a></p>
      </div>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{site_url('media/js/widgets.js')}"></script>
    <script src="{site_url('media/js/wysihtml5.js')}"></script>
    <script src="{site_url('media/js/bootstrap.min.js')}"></script>
    <script src="{site_url('media/js/bootstrap-wysihtml5.min.js')}"></script>
    <script src="{site_url('media/js/bootstrap-datepicker.js')}"></script>
    <script src="{site_url('media/js/jquery.dataTables.js')}"></script>
    <script src='{base_url("media/js/Scroller.js")}'></script>
    <script src="{site_url('media/js/dt_bootstrap.js')}"></script>
    <script src="{site_url('media/js/highcharts/js/highcharts.js')}"></script>
    <script src="{site_url('media/js/highcharts/js/modules/exporting.js')}"></script>
    <script src="{site_url('media/js/jquery-cookie.js')}"></script>
    <script src="{site_url('media/js/site.js')}"></script>
  </body>
</html>
