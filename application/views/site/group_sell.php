<!DOCTYPE HTML>
<html lang="en" xml:lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://plus.google.com/105305873259684952530" rel="publisher" />
<meta name="keywords" content="mfarm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<!-- Apple iOS and Android stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="img/icon.png">
    <link rel="apple-touch-startup-image" href="img/startup.png">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1">
    <title>Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya</title><!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="<?=base_url();?>media/favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?=base_url();?>media/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/custom-style.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?=base_url();?>media/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/dropdown.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/vtip.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/jquery.twitter.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/ddaccordion.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/faq-functions.js" ></script>
<script type="text/javascript" src="<?=base_url();?>media/js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/bootstrap-modal.js"></script>
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

	$('#myModal').modal({
		backdrop: true
	});

});
</script>

</head>

<body>	
	<div id="container"> 
    	<div id="top-container">
        
        	<!-- BEGIN OF HEADER -->
            <div id="header-container">
            	<div id="header-box">
                
                    <div id="logo">
                        <a href="<?=base_url();?>"><img src="<?=base_url();?>media/images/logo_xmas.png" alt="Mfarm Logo" /></a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                <li><a class="" href="<?=base_url();?>members" title="login here"><img src="<?=base_url();?>media/images/top-login.png" alt="" /></a></li>
                                <li><a href="https://www.facebook.com/pages/M-Farm/168567086502534" target="_blank" title="facebook"><img src="<?=base_url();?>media/images/social-icons/top-social/social1.png" alt="" /></a></li>
                                <li><a href="https://plus.google.com/105305873259684952530?prsrc=3" target="_blank" title="g+"><img src="<?=base_url();?>media/images/social-icons/top-social/social2.png" alt="" /></a></li>
                                <li><a href="https://twitter.com/#!/mfarm_ke" target="_blank" title="twitter"><img src="<?=base_url();?>media/images/social-icons/top-social/social3.png" alt="" /></a></li>

                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">MFarm</span>, you're on the right place to find <br/> many creative agribusiness solutions, because we're a factory of ideas</h4>
                        </div>
                       	<div id="mainmenu">
                            <ul id="menu">
                                <li><a href="index">home</a></li>
                                <li class="current"><a href="about.php" title="about mfarm">about</a></li>
                                <li>
									<a href="services" title="services mfarm">services</a>
									<ul>
										<li><a href="buy_here" title="buy services mfarm">Buy</a></li>
										<li><a href="sell_here" title="sell services mfarm">Sell</a></li>
									</ul>
								</li>                                
								<li><a href="team" title="team mfarm">team</a></li>
                                <li><a href="<?=base_url();?>price" title="prices mfarm">prices</a></li>
                                <li><a href="contact" title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>        
        	<!-- END OF HEADER -->
            
            <!-- BEGIN OF PAGE TITLE -->
            <div id="page-title">
            	<h1>Sell with Us</h1>
                <h6>
                	Every farmers has a something to sell, buy here
                	<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-small" style="float:right;">Quick Post</a>
                </h6>
            </div>
            <!-- END OF PAGE TITLE -->

            <!-- Sample modal window -->
            <div class="modal hide fade in" id="myModal">
            	<div class="modal-header">
            		<a class="close" data-dismiss="modal">×</a>
            		<h3>Modal header</h3>
            	</div>
            	<div class="modal-body">
            		<p>One fine body…</p>
            	</div>
            	<div class="modal-footer">
            		<a href="#" class="btn btn-primary">Save changes</a>
            		<a href="#" class="btn">Close</a>
            	</div>
            </div>
            
            <!-- BEGIN OF CONTENT -->
            <div id="content">
            	<div class="maincontent">
					<div class="col-4">
                       	<h4>Product One</h4>
                        <img src="<?php echo base_url();?>media/images/img-sample.jpg" alt="" class="imgleft imgborder2" />
                      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut</p>
                      	<p><a href="#" class="btn btn-primary btn-small" style="color:#fff;">Quick Buy</a></p>
                    </div>
                    <div class="col-4">
                      	<h4>Product Two</h4>
                        <img src="<?php echo base_url();?>media/images/img-sample.jpg" alt="" class="imgleft imgborder2" />
                      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut</p>
                      	<p><a href="#" class="btn btn-primary btn-small" style="color:#fff;">Quick Buy</a></p>
                    </div>
                    <div class="col-4">
                      	<h4>Product Three</h4>
                        <img src="<?php echo base_url();?>media/images/img-sample.jpg" alt="" class="imgleft imgborder2" />
                      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut</p>
                        <p><a href="#" class="btn btn-primary btn-small" style="color:#fff;">Quick Buy</a></p>
                    </div>
                    <div class="col-4">
                      	<h4>Product Four</h4>
                        <img src="<?php echo base_url();?>media/images/img-sample.jpg" alt="" class="imgleft imgborder2" />
                      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut</p>
                      	<p><a href="#" class="btn btn-primary btn-small" style="color:#fff;">Quick Buy</a></p>
                    </div>
            	</div>
            </div>
            <!-- END OF CONTENT -->
            
        </div>
        
        <!-- BEGIN OF BOTTOM CONTENT -->
        <div id="bottom-container">
        	<div id="bottom-content">
           	
            	<div id="client-logo">
                	<ul>
                        <li><img src="<?=base_url();?>media/images/client5.gif" alt="techfortrade.org" /></li>
                    	<li><img src="<?=base_url();?>media/images/client1.gif" alt="ipo48" /></li>
                        <li><img src="<?=base_url();?>media/images/client2.gif" alt="humanipo" /></li>
                        <li><img src="<?=base_url();?>media/images/client3.gif" alt="ihub" /></li>
                        <li><img src="<?=base_url();?>media/images/client4.gif" alt="mlab" /></li>
                        <li><img src="<?=base_url();?>media/images/client6.gif" alt="infodev" /></li>
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
                    	<img src="<?=base_url();?>media/images/footer-logo.png" alt="" />
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
	// <script type="text/javascript">

	//   var _gaq = _gaq || [];
	//   _gaq.push(['_setAccount', 'UA-21117757-1']);
	//   _gaq.push(['_trackPageview']);

	//   (function() {
	//     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	//     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	//     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	//   })();

	// </script>    
</body>

</html>