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
    <style type="text/css">body {padding-top: 60px;padding-bottom: 40px;}</style>
    <link href="<?=base_url();?>media/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>media/css/docs.css" rel="stylesheet">
    <link href="<?=base_url();?>media/css/site.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url();?>media/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?=base_url();?>media/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>media/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>media/img/apple-touch-icon-114x114.png">
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
          <a class="brand" href="<?=base_url();?>">MFarm App</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="<?=site_url();?>" id="logo"><i class="icon-arrow-left icon-white"></i>  Homepage</a></li>
              <li style="margin-top:10px;">
                <!-- <a href="https://twitter.com/mfarm_ke" class="twitter-follow-button" data-show-count="true">Follow @mfarm_ke</a> -->

                <script>
                // !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                </script>
              </li>
            </ul>
            <ul class="nav pull-right">
            <?php if ($this->session->userdata('user_id')): ?>
                <li><a href="<?=base_url();?>settings/"><i class="icon-cog icon-white"></i>  Settings</a></li>
                <li><a href="<?=base_url();?>auth/logout">Logout</a></li>
                <li class="divider-vertical"></li>
            <?php else: ?>
                <li><a href="<?=site_url('auth/create_user');?>" title="Register"><i class="icon-cog icon-white"></i>  Register</a></li>
                <li><a href="<?=site_url('auth/login');?>" title="Sign In"><i class="icon-lock icon-white"></i>  Sign In</a></li>
            <?php endif ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div id='hld'>
      <div class='container'>
      <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Hey Thea!</strong> <?=$this->session->flashdata('message');?>
        </div>
      <?php endif;?>
      <div class="row">
          <!-- Yield goes here -->
            <?= $yield; ?>
          <!-- yield end here -->
      </div>
    </div>
    </div>
  <div class="container">
    <hr>
    <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Designed and built with all the love in the world <a href="http://twitter.com/mfarm_ke" target="_blank">@mfarm_ke</a> by <a href="http://twitter.com/mogetutu" target="_blank">@mogetutu</a> and <a href="http://twitter.com/kuljay" target="_blank">@jay</a>.</p>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
        </p>
        <p></p>
      </footer>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>media/js/jquery.min.js"></script>
    <script src="<?=base_url();?>media/js/bootstrap-datepicker.js"></script>
    <script src="<?=site_url('media/js/jquery-cookie.js');?>"></script>
    <script src="<?=base_url();?>media/js/site.js"></script>
    <script src="<?=base_url();?>media/js/widgets.js"></script>
    <script src="<?=base_url();?>media/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>media/js/jquery.dataTables.js"></script>
    <script src="<?=base_url();?>media/js/dt_bootstrap.js"></script>
    <script src="<?=base_url();?>media/js/modernizr-2.5.3.min.js"></script>
  </body>
</html>
