<!DOCTYPE html>
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
    <style type="text/css">body {padding-top: 75px;padding-bottom: 40px;}</style>
    <link href="<?=base_url();?>media/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>media/css/docs.css" rel="stylesheet">
    <link href="<?=base_url();?>media/css/site.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?=base_url();?>media/js/jquery.min.js"></script>
    <script src="<?=base_url();?>media/js/modernizr-2.5.3.min.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url();?>media/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?=base_url();?>media/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>media/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>media/img/apple-touch-icon-114x114.png">
  </head>

  <body>
  <div id="hellobar-wrapper" class="hellobar-right hellobar-dark-images">
    <div id="hellobar-container" class="">
      <span>Welcome to the MFARM APP</span>
      <a class="hellobar-cta-link" href="#" target="_blank">Update Now &rarr;</a>
        <a href="#close" id="hellobar-close">Close</a>
        <div id="hellobar-shadow"></div>
    </div>
    <div id="hellobar-open" class="hidden">
      <a href="#close" id="hellobar-open">Open</a>
    </div>
  </div>

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
            <ul class="nav pull-right">
              <li><a href="<?=base_url();?>"><i class="icon-home icon-white"></i>  Back To Site</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div id='hld'>
      <div class='container-fluid'>
      <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">&times;</a>
          <strong>Bwana Farmer!</strong> <?=$this->session->flashdata('message');?>
        </div>
      <?php endif;?>
      <div class="row">
        <div class="span9">
          <!-- Yield goes here -->
          <?= $yield; ?>
          <!-- yield end here -->
        </div>
      </div>

    <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Designed and built with all the love in the world <a href="http://twitter.com/mfarm_ke" target="_blank">@mfarm_ke</a> by <a href="http://twitter.com/mogetutu" target="_blank">@mogetutu</a> and <a href="http://twitter.com/kuljay" target="_blank">@jay</a>.</p>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>media/js/widgets.js"></script>
    <script src="<?=base_url();?>media/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>media/js/bootstrap-datepicker.js"></script>
    <script src="<?=base_url();?>media/js/jquery.dataTables.js"></script>
    <script src="<?=base_url();?>media/js/dt_bootstrap.js"></script>
    <script src="<?=site_url('media/js/highcharts/js/highcharts.js');?>"></script>
    <script src="<?=site_url('media/js/highcharts/js/modules/exporting.js');?>"></script>
    <script src="<?=site_url('media/js/jquery-cookie.js');?>"></script>
    <script src="<?=base_url();?>media/js/site.js"></script>

  </body>
</html>