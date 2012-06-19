<!DOCTYPE HTML>
<html lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://plus.google.com/105305873259684952530" rel="publisher" />
<meta name="description" content="MFarm website homepage">
<meta name="keywords" content="mfarm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm, mfarm kenya,mfarm price">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<!-- Apple iOS and Android stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="img/icon.png">
    <link rel="apple-touch-startup-image" href="img/startup.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya</title>
<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="<?php echo base_url();?>media/favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?php echo base_url();?>media/site/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>media/site/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>media/site/css/custom-style.css" rel="stylesheet" type="text/css" />
<?php if ($this->uri->segment(1) != 'contact'): ?>
    <link href="<?=base_url();?>media/site/css/bootstrap.css" rel="stylesheet" type="text/css" />
<?php endif; ?>


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?php echo base_url();?>media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>media/site/js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>media/site/js/vtip.js"></script>
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?=base_url();?>media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/dropdown.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/vtip.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/jquery.twitter.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/ddaccordion.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/faq-functions.js" ></script>
<script type="text/javascript" src="<?=base_url();?>media/site/js/jflickrfeed.min.js"></script>
<script src="<?=base_url();?>media/site/js/bootstrap-modal.js"></script>
<script src="<?=base_url();?>media/site/js/quickpager.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){   
    
    //Flickr Jquery Setting
    <!--
    $('#cbox').jflickrfeed({
        limit: 14,
        qstrings: {
            id: '69259295@N05'
        },
        itemTemplate: '<li>'+
                        '<a rel="colorbox" href="{{image}}" title="{{title}}">' +
                            '<img src="{{image_s}}" alt="{{title}}" />' +
                        '</a>' +
                      '</li>'
    }, function(data) {
        $('#cbox a').colorbox();
    });
    // -->
    
    //Colorbox Setting
    $("a[rel='portfolio']").colorbox({transition:"fade"});
    
    //Tab Jquery
    $(".tab_content").hide(); 
    $("ul.tabs li:first").addClass("active").show(); 
    $(".tab_content:first").show(); 
    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active"); 
        $(".tab_content").hide(); 
        var activeTab = $(this).find("a").attr("href"); 
        $(activeTab).fadeIn(); 
        return false;
    });
    
    //Twitter Jquery Setting
    $("#twitter").getTwitter({
        userName: "mfarm_ke",
        numTweets: 3,
        loaderText: "Loading tweets...",
        slideIn: true,
        slideDuration: 750
    });

});
</script>
<?php if ($this->session->flashdata('message') != ''): ?>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            var $alertdiv = $('<div id = "alertmsg"/>');
            $alertdiv.text("<?=$this->session->flashdata('message')?>");
            $alertdiv.bind('click', function() {
                $(this).slideUp(200);
            });
            $(document.body).append($alertdiv);
            $("#alertmsg").slideDown("slow"); 
            setTimeout(function() { $alertdiv.slideUp(200) }, 5000);
        });
    </script>
<?php endif; ?>
</head>

<body>  
  <div id="container"> 
      <div id="top-container">
        
          <!-- BEGIN OF HEADER -->
            <div id="header-container">
              <div id="header-box">
                
                    <div id="logo">
                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>media/site/images/logo_xmas.png" alt="Mfarm Logo" /></a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">             
                            <ul>
                                <li><a class="" href="<?php echo base_url();?>auth" title="login here"><img src="<?php echo base_url();?>media/site/images/top-login.png" alt="Login into the app" /></a></li>
                                <li><a href="https://www.facebook.com/pages/M-Farm/168567086502534" target="_blank" title="facebook"><img src="<?php echo base_url();?>media/site/images/social-icons/top-social/social1.png" alt="mfarm-facebook" /></a></li>
                                <li><a href="https://plus.google.com/105305873259684952530?prsrc=3" target="_blank" title="g+"><img src="<?php echo base_url();?>media/site/images/social-icons/top-social/social2.png" alt="mfarm-google+" /></a></li>
                                <li><a href="https://twitter.com/#!/mfarm_ke" target="_blank" title="twitter"><img src="<?php echo base_url();?>media/site/images/social-icons/top-social/social3.png" alt="mfarm-twitter" /></a></li>
                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">MFarm</span>, you're on the right place to find <br/> many creative agribusiness solutions, because we're a factory of ideas</h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li class="current"><a href="<?=site_url('index');?>">home</a></li>
                                <li><a href="<?=site_url('about');?>" title="mfarm agricultural information">about</a></li>
                                <li><a href="<?=site_url('price');?>" title="mfarm price information">prices</a></li>
                                <li><a href="<?=site_url('team');?>" title="mfarm team page">team</a></li>
                                <li><a href="<?=site_url('services');?>" title="services by mfarm">services</a></li>
                                <li><a href="<?=site_url('contact');?>" title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>        
          <!-- END OF HEADER -->
            <!-- BEGIN OF PAGE TITLE -->
            <div id="page-title">
                <h1><?=$page_title;?></h1>
                <?php if ($page_subtitle): ?>
                    <h6><?=$page_subtitle;?></h6>
                <?php endif ?>

                <?php if ($this->uri->segment(1) == 'team'): ?>
                    <!-- begin of portfolio filter -->                
                    <ul id="portfolio-filter">
                        <li><a href="#all" title="">All</a></li>
                        <li><a href="#founders" title="" rel="founders">Founders</a></li>
                    </ul>
                    <!-- end of portfolio filter -->
                <?php endif ?>
            </div>
            <!-- END OF PAGE TITLE -->
            
            <!-- BEGIN OF CONTENT -->
            <div id="content">
              <!-- Yield goes here -->
                <?= $yield; ?>
              <!-- yield end here -->
            </div>            
            <!-- END OF CONTENT -->
            
        </div>
        
        <!-- BEGIN OF BOTTOM CONTENT -->
        <div id="bottom-container">
          <div id="bottom-content">
            
              <div id="client-logo">
                  <ul>
                        <li><img src="<?php echo base_url();?>media/site/images/client5.gif" alt="techfortrade.org" /></li>
                      <li><img src="<?php echo base_url();?>media/site/images/client1.gif" alt="ipo48" /></li>
                        <li><img src="<?php echo base_url();?>media/site/images/client2.gif" alt="humanipo" /></li>
                        <li><img src="<?php echo base_url();?>media/site/images/client3.gif" alt="ihub" /></li>
                        <li><img src="<?php echo base_url();?>media/site/images/client4.gif" alt="mlab" /></li>
                        <li><img src="<?php echo base_url();?>media/site/images/client6.gif" alt="infodev" /></li>
                    </ul>
                </div>
                <div class="bottom-column1">
                  <h5>About MFARM</h5>
                    <p>MFarm Ltd is a software solution and agribusiness company.</p><p> Our main product M-Farm, is a transparency tool for Kenyan farmers where they simply SMS the number 3535 to get information about the retail price of their products, buy their farm inputs directly from manufacturers at favorable prices, and find buyers for their produce.</p>

                </div>
                <div class="bottom-column2">
                  <h5>Trading Terms</h5>
                    <p>Read our easy to understand Trading Terms so you know how we do business and what we expect from our clients.</p>
                    <p><a href="#">Privacy Policy &amp; Disclaimer</a></p>
                </div>
                <div class="bottom-column2">
                  <h4>+254 707 933 993</h4>
                    <p><?=safe_mailto('info@mfarm.co.ke', 'info@mfarm.co.ke');?></p>
                    <p>Bishop Mague Centre,Opp. Uchumi Hyper Ng'ong rd.<br/>Nairobi, KENYA</p>
                </div>                 
                
            </div>
            <div id="footer-wrapper">
              <div id="footer-content">
                  <div class="footer-logo">
                      <img src="<?php echo base_url();?>media/site/images/footer-logo.png" alt="mfarm-footer-logo" />
                    </div>
                    <div class="footer-text">
                      <p>© 2011 MFARM. Developed by Dev Team Mfarm. <br/> Create solutions that empower farmers to work and communicate in new and innovative ways.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF BOTTOM CONTENT -->
    
    <div class="clear"></div>                                      
    </div>
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
</body>

</html>