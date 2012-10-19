<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<meta name="keywords" content="mfarm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya</title><!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="http://mfarm.co.ke/favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="http://mfarm.co.ke/media/site/css/reset.css" rel="stylesheet" type="text/css" />
<link href="http://mfarm.co.ke/media/site/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://mfarm.co.ke/media/site/css/custom-style.css" rel="stylesheet" type="text/css" />
<link href="http://mfarm.co.ke/media/site/css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="http://mfarm.co.ke/media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="http://mfarm.co.ke/media/site/js/dropdown.js"></script>
<script type="text/javascript" src="http://mfarm.co.ke/media/site/js/vtip.js"></script>
<script type="text/javascript" src="http://mfarm.co.ke/media/site/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="http://mfarm.co.ke/media/site/js/ddaccordion.js"></script>
<script type="text/javascript" src="http://mfarm.co.ke/media/site/js/faq-functions.js" ></script>
<script type="text/javascript">
   $(function(){
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
                        <a href="http://mfarm.co.ke/"><img src="http://mfarm.co.ke/media/site/images/logo_xmas.png" alt="Mfarm Logo" /></a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                <li><a class="" href="http://mfarm.co.ke/members" title="login here"><img src="http://mfarm.co.ke/media/site/images/top-login.png" alt=""width="28" height="28"  /></a></li>
                                <li><a href="#" title="facebook"><img src="http://mfarm.co.ke/media/site/images/social-icons/top-social/social1.png" alt="" /></a></li>
                                <li><a href="#" title="g+"><img src="http://mfarm.co.ke/media/site/images/social-icons/top-social/social2.png" alt="" /></a></li>
                                <li><a href="#" title="twitter"><img src="http://mfarm.co.ke/media/site/images/social-icons/top-social/social3.png" alt="" /></a></li>

                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">MFarm</span>, you're on the right place to find <br/> many creative agribusiness solutions, because we're a factory of ideas</h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li class="current"><a href="{site_url('index')}">home</a></li>
                                <li><a href="{site_url('about')}" title="about mfarm">about</a></li>
                                <li><a href="{site_url('services')}" title="services mfarm">services</a></li>
                                <li><a href="{site_url('team')}" title="team mfarm">team</a></li>
                                <li><a href="{site_url('price')}" title="prices mfarm">prices</a></li>
                                <li><a href="{site_url('contact')}" title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        	<!-- END OF HEADER -->

            <!-- BEGIN OF PAGE TITLE -->
            <!-- <div id="page-title">
            	<h1>404</h1>
                <h6>Some attractive desciption here</h6>
            </div> -->
            <!-- END OF PAGE TITLE -->

            <!-- BEGIN OF CONTENT -->
            <div id="content">
            	<div class="maincontent">

                	<div class="col-2-2 error-page">
                     	<div class="stop-sign">
                          	<img src="http://mfarm.co.ke/media/site/images/stop-sign.jpg" alt="" />
                        </div>
                        <div class="error-message">
                    	    <h2><?php echo $heading; ?></h2>
							<h2><?php echo $message; ?></h2>
                        </div>
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
                        <li><img src="http://mfarm.co.ke/media/site/images/client5.gif" alt="techfortrade.org" /></li>
                    	<li><img src="http://mfarm.co.ke/media/site/images/client1.gif" alt="ipo48" /></li>
                        <li><img src="http://mfarm.co.ke/media/site/images/client2.gif" alt="humanipo" /></li>
                        <li><img src="http://mfarm.co.ke/media/site/images/client3.gif" alt="ihub" /></li>
                        <li><img src="http://mfarm.co.ke/media/site/images/client4.gif" alt="mlab" /></li>
                        <li><img src="http://mfarm.co.ke/media/site/images/client6.gif" alt="infodev" /></li>
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
                	<h4>+254 722 286 084</h4>
                    <p>{safe_mailto('info@mfarm.co.ke', 'info@mfarm.co.ke')}</p>
                    <p>Bishop Mague Centre,Opp. Uchumi Hyper Ng'ong rd.<br/>Nairobi, KENYA</p>
                </div>

            </div>
            <div id="footer-wrapper">
            	<div id="footer-content">
                	<div class="footer-logo">
                    	<img src="http://mfarm.co.ke/media/site/images/footer-logo.png" alt="" />
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
</body>

</html>