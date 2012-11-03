<!DOCTYPE html>
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <style type="text/css">body { padding-bottom: 40px; }</style>
    <link href="{base_url}media/css/bootstrap.min.css" rel="stylesheet">
    <link href="{base_url}media/css/site.css" rel="stylesheet">
    <!-- Dark Theme in the works -->
    <!-- <link href="{base_url}media/css/darkstrap.css" rel="stylesheet"> -->
    <!-- jQuery -->
    <script src="{base_url}media/js/jquery.min-ck.js"></script>
    <script src="{base_url}media/js/modernizr-2.5.3.min-ck.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{base_url}favicon.ico">
    <link rel="apple-touch-icon" href="{base_url}media/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{base_url}media/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{base_url}media/img/apple-touch-icon-114x114.png">
  </head>

  <body>
    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon icon-reorder"></i> Menu
          </a>
          <a class="brand" href="{base_url}">MFarm App</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="{site_url('farmer/dashboard')}"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="{base_url}categories/" title="Categories">Categories</a></li> -->
              <li><a href="{base_url}farmer/products/" title="Products"><i class="icon-tags icon-white"></i>  Products</a></li>
              <li><a href="{base_url}farmer/settings/tips"><i class="icon-leaf icon-white"></i>  Farming Tips</a></li>
              <li><a href="{base_url}farmer/reports/"><i class="icon-print icon-white"></i>  Reports</a></li>
            </ul>
            <ul class="nav pull-right">
              <!-- <li><a href="#"><span class="badge badge-inverse">A3555</span></a></li> -->
              <li><a href="{base_url}farmer/settings/"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="{base_url}auth/logout"><i class="icon-off icon-white"></i>  Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->




    <div class='container'>
      {if ($flash_message)}
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Hi There!</strong> {$flash_message}
        </div>
      {/if}
      <div class="row-fluid">
        <div class="span3 sidebar">
            <ul class="nav nav-list well">
              <li class="nav-header">MFarm</li>
              <li {if $uri_string == 'farmer/dashboard'}class='active'{/if}>
                <a href="{site_url('farmer/dashboard')}"><i class="icon-home"></i> Home</a>
              </li>
              <li {if $uri_string == "farmer/posts"}class='active'{/if} >
                <a href='{site_url("farmer/posts")}'><i class="icon-th-list "></i> Posts</a>
              </li>
              <li {if $uri_string == 'farmer/orders'}class='active'{/if} >
                <a href="{base_url}farmer/orders/"><i class="icon-inbox"></i> Orders</a>
              </li>
              <li class="nav-header">Your Account</li>
              <li {if $uri_string == "farmer/settings/profile/{$ci->session->userdata('user_id')}"}class='active'{/if}>
                  <a href='{site_url("farmer/settings/profile/{$ci->session->userdata('user_id')}")}'><i class="icon-user"></i> Profile</a>
              </li>
              <li {if $uri_string == "farmer/farm/index/{$user_session}"}class='active'{/if}>
                <a href='{site_url("farmer/farm/index/{$user_session}")}'><i class="icon-map-marker"></i> My Shamba</a>
              </li>
              <li {if $uri_string == 'farmer/trends'}class='active'{/if}>
                <a href="{site_url('farmer/trends')}"><i class="icon-random"></i> Trends</a>
              </li>
              <li {if $uri_string == 'farmer/settings/invitations'}class='active'{/if}>
                <a href="{site_url('farmer/settings/invitations')}"><i class="icon-inbox"></i> Invitations</a>
              </li>
              <li class="divider"></li>
              <li {if $uri_string == 'farmer/help'}class='active'{/if}>
                <a href="{base_url}farmer/help/"><i class="icon-flag"></i> Help</a>
              </li>
            </ul>
        </div>
        <div class="span9">
          <!-- Yield goes here -->
          {$yield}
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
    <script src="{base_url}media/js/widgets-ck.js"></script>
    <script src="{base_url}media/js/bootstrap.min-ck.js"></script>
    <script src="{base_url}media/js/bootstrap-datepicker-ck.js"></script>
    <script src="{base_url}media/js/jquery.dataTables-ck.js"></script>
    <script src="{base_url}media/js/dt_bootstrap-ck.js"></script>
    <script src="{site_url('media/js/highcharts/js/highcharts-ck.js')}"></script>
    <script src="{site_url('media/js/highcharts/js/modules/exporting-ck.js')}"></script>
    <script src="{site_url('media/js/jquery-cookie-ck.js')}"></script>
    <script src="{base_url}media/js/site-ck.js"></script>
    {if (ENVIRONMENT == 'production')}
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
    {/if}
  </body>
</html>
