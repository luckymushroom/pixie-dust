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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style type="text/css">body { padding-bottom: 40px; }</style>
    <link href="{base_url}media/css/bootstrap.min.css" rel="stylesheet">
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
    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{base_url}">MFarm App</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="{site_url('aggregator/dashboard')}"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="{base_url}categories/" title="Categories">Categories</a></li> -->
              <li><a href="{base_url}aggregator/products/" title="Products"><i class="icon-tags icon-white"></i> Products</a></li>
              <li><a href="{base_url}aggregator/posts/" title="Posts"><i class="icon-th-list icon-white"></i> Posts</a></li>
              <li>
                <a href='{site_url("aggregator/users/{$user_session}")}'><i class="icon-user icon-white"></i>  Farmers</a>
              </li>
              <li><a href="{base_url}aggregator/tips"><i class="icon-leaf icon-white"></i>  Tips</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="#"><span class="label label-inverse">{$ci->ion_auth->profile()->is_aggregator}</span></a></li>
              <li><a href="{base_url}aggregator/settings/"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="{base_url}auth/logout"><i class="icon-off icon-white"></i>  Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

      <div class='container'>
      {if ($flash_message)}
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Karibu M-Farm!</strong> {$flash_message}
        </div>
      {/if}
      <div class="row-fluid">
        {if isset($yield_sidebar)}
        <div class="span9">
          <!-- Yield goes here -->
          {$yield}
          <!-- yield end here -->
        </div>
        <div class="span3 well">
          <!-- Sidebar -->
          {$yield_sidebar}
          <!-- end Sidebar -->
        </div>
        {else}
        <div class="span12">
          <!-- Yield goes here -->
          {$yield}
          <!-- yield end here -->
        </div>
        {/if}
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
    <script src="{base_url}media/js/widgets.js"></script>
    <script src="{base_url}media/js/bootstrap.min.js"></script>
    <script src="{base_url}media/js/bootstrap-datepicker.js"></script>
    <script src="{base_url}media/js/jquery.dataTables.js"></script>
    <script src="{base_url}media/js/dt_bootstrap.js"></script>
    <script src="{site_url('media/js/highcharts/js/highcharts.js')}"></script>
    <script src="{site_url('media/js/highcharts/js/modules/exporting.js')}"></script>
    <script src="{site_url('media/js/jquery-cookie.js')}"></script>
    <script src="{base_url}media/js/site.js"></script>
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
