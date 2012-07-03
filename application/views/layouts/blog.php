<!DOCTYPE html>
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
    <style type="text/css">body {padding-top: 75px;padding-bottom: 40px;}</style>
    <link href="<?=base_url();?>media/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>media/css/site.css" rel="stylesheet">
    <!-- Dark Theme in the works -->
    <link href="<?=base_url();?>media/css/darkstrap.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?=base_url();?>media/js/jquery.min.js"></script>
    <script src="<?=base_url();?>media/js/modernizr-2.5.3.min.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url();?>media/favicon.ico">
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
              <li><a href="<?=site_url('dashboard');?>"><i class="icon-home icon-white"></i>  Dashboard</a></li>
              <!-- <li><a href="<?=base_url();?>categories/" title="Categories">Categories</a></li> -->
              <li><a href="<?=base_url('blog/manage/posts');?>" title="Posts"><i class="icon-tags icon-white"></i>  Posts</a></li>
              <li><a href="#"><i class="icon-th-list icon-white"></i>  Categories </a></li>
              <li><a href="<?=base_url('site/admin/press');?>"><i class="icon-leaf icon-white"></i>  Press</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="<?=base_url();?>settings/"><i class="icon-cog icon-white"></i>  Settings</a></li>
              <li><a href="<?=base_url();?>auth/logout"><i class="icon-off icon-white"></i>  Logout</a></li>
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
          <strong>Bwana Mkulima!</strong> <?=$this->session->flashdata('message');?>
        </div>
      <?php endif;?>
      <div class="row">
        <div class="span12">
          <!-- Yield goes here -->
          <?= $yield; ?>
          <!-- yield end here -->
        </div>
      </div>

    <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Designed and built with all the love in the world <a href="http://twitter.com/mfarm_ke" target="_blank">@mfarm_ke</a> by <a href="http://twitter.com/mogetutu" target="_blank">@mogetutu</a> and <a href="http://twitter.com/kuljay" target="_blank">@kuljay</a>.</p>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=site_url('media/js/widgets.js');?>"></script>
    <script src="<?=site_url('media/js/wysihtml5.js');?>"></script>
    <script src="<?=site_url('media/js/bootstrap.min.js');?>"></script>
    <script src="<?=site_url('media/js/bootstrap-wysihtml5.min.js');?>"></script>
    <script src="<?=site_url('media/js/bootstrap-datepicker.js');?>"></script>
    <script src="<?=site_url('media/js/jquery.dataTables.js');?>"></script>
    <script src="<?=site_url('media/js/dt_bootstrap.js');?>"></script>
    <script src="<?=site_url('media/js/highcharts/js/highcharts.js');?>"></script>
    <script src="<?=site_url('media/js/highcharts/js/modules/exporting.js');?>"></script>
    <script src="<?=site_url('media/js/jquery-cookie.js');?>"></script>
    <script src="<?=site_url('media/js/site.js');?>"></script>
<script type="text/javascript">
  jQuery(document).ready(function() {
    $('#textarea').wysihtml5();
    $('#textarea1').wysihtml5();
  });
  
</script>
  </body>
</html>
