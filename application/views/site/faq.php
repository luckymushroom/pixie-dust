<!DOCTYPE HTML>
<html lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link href="https://plus.google.com/105305873259684952530" rel="publisher" /><meta name="description" content="">
<meta name="keywords" content="mfarm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya</title><!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="<?=base_url();?>media/favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?=base_url();?>media/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/custom-style.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>media/css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/vtip.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript" src="js/faq-functions.js" ></script>
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
                        <a href="index.html"><img src="images/logo.png" alt="Mfarm Logo" /></a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                <li><a href="#" title="facebook"><img src="images/social-icons/top-social/social1.png" alt="" /></a></li>
                                <li><a href="https://plus.google.com/105305873259684952530?prsrc=3" target="_blank" title="g+"><img src="images/social-icons/top-social/social2.png" alt="" /></a></li>
                                <li><a href="https://twitter.com/#!/mfarm_ke" target="_blank" title="twitter"><img src="images/social-icons/top-social/social3.png" alt="" /></a></li>

                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">MFarm</span>, you're on the right place to find <br/> many creative agribusiness solutions, because we're a factory of ideas</h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li class="current"><a href="index.php">home</a></li>
                                <li><a href="about.php" title="about mfarm">about</a></li>
                                <li><a href="services.php" title="services mfarm">services</a></li>
                                <li><a href="team.php" title="team mfarm">team</a></li>
                                <li><a href="<?=base_url();?>price" title="prices mfarm">prices</a></li>
                                <li><a href="contact.php" title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>        
        	<!-- END OF HEADER -->
            
            <!-- BEGIN OF PAGE TITLE -->
            <div id="page-title">
            	<h1>Frequently and Questions</h1>
                <h6>Every great dream has a story, Here's ours</h6>	
            </div>
            <!-- END OF PAGE TITLE -->
            
            <!-- BEGIN OF CONTENT -->
            <div id="content">
            	<div class="maincontent">
                
                	<div class="col-2-2">
                    	<h4>Have a Questions ?</h4>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur a sapiente delectus voluptatibus maiores alias consequatur perferendis.</p>
                                
                        <!-- begin of FAQ 1 -->
                        <div class="ask">Excepteur sint occaecat ?</div>
                        <div class="question">
                        	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                        </div>
                        <!-- end of FAQ 1 -->
                                    
                        <!-- begin of FAQ 2 -->                            
                        <div class="ask">Officia deserunt mollit anim ?</div>
                        <div class="question">
                            <p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet omnis voluptas assumenda est</p>
                                <ul class="check-list">
                                    <li>Quis autem iure reprehenderit voluptate molestiae</li>
                                    <li>Et harum quidem rerum facilis est et expedita distinctio</li>
                                    <li>Temporibus autem quibusdam et aut officiis debitis</li>                            
                                </ul>
                                <div class="clr"></div>
                        </div>
                        <!-- end of FAQ 2 -->
                                    
                        <!-- begin of FAQ 3 -->                            
                        <div class="ask">Inventore veritatis architecto ?</div>
                        <div class="question">
                            <img src="images/author.jpg" alt="" class="imgleft" />
                            <h5>Image on content</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui facilis blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui offici deserunt mollitia animi idest laborum et dolorum fuga eta harum quidem rerum.</p>
                        </div>
                        <!-- end of FAQ 3 -->
                                    
                        <!-- begin of FAQ 4 -->                           
                        <div class="ask">Reprehenderit in voluptate velit ?</div>
                        <div class="question">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcorob laboris nisi ut aliquip praesentium voluptatum deleniti.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam.</p>
                        </div>
                        <!-- end of FAQ 4 --> 
                                    
                        <!-- begin of FAQ 5 -->                      
                        <div class="ask">Necessitatibus saepe eveniet ?</div>
                        <div class="question">
                                        
                            <div class="col-2-faq">
                                <h5>2 Column</h5>
                                <pre>&lt;div class="col-2-faq"&gt; [...] &lt;/div&gt;</pre>
                                <p>Nam libero tempore cumsoluta lut nobis esteligel dioptiorop cumque nihilermo impedit quota minus quodrobu maxime placeatus facere ud possimusi omnishor voluptasi assumend omnisar repellend temporibus autem quibusi dam officiis</p>                                                    
                            </div>                                
                            <div class="col-2-faq-last">
                            	<h5>2 Column</h5>
                                <pre>&lt;div class="col-2-faq-last"&gt; [...] &lt;/div&gt;</pre>
                                <p>Nam libero tempore cumsoluta lut nobis esteligel dioptiorop cumque nihilermo impedit quota minus quodrobu maxime placeatus facere ud possimusi omnishor voluptasi assumend omnisar repellend</p>                            
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- end of FAQ 5 -->
                                    
                        <!-- begin of FAQ 6 -->                            
                        <div class="ask">Consequatur aut alias perferendis ?</div>
                        <div class="question">
                        	<img src="images/faq-image.jpg" alt="" class="imgcenter" />
                            <p>Neque porro quisquam qui dolorem ipsum quia dolor sitamet consectetur adipisci velitsed quialo numquam eius modi tempora incidunt ut labore etus dolore magnam aliquam quaerat voluptatem vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate provident similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        </div>
                        <!-- end of FAQ 6 -->
                                    
                        <!-- begin of FAQ 7 -->                           
                        <div class="ask">Numquam eius modi tempora ?</div>
                        <div class="question">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi occaecati cupiditateno provident, similique sunt in culpa qui officia deserunt mollitia animi, idest laborum et dolorum fuga harum quidem rerum facilis est et expedita porro distinctio.</p>
                        </div>
                        <!-- end of FAQ 7 -->
                                    
                        <!-- begin of FAQ 8 -->                       
                        <div class="ask">Voluptatibus maiores alias ?</div>
                        <div class="question">
                            <p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet omnis voluptas assumenda est</p>
                                <ol>
                                    <li>Quis autem iure reprehenderit voluptate molestiae</li>
                                    <li>Et harum quidem rerum facilis est et expedita distinctio</li>
                                    <li>Temporibus autem quibusdam et aut officiis debitis</li>                            
                                </ol>
                        </div>
                        <!-- end of FAQ 8 -->    
                                    
                        <!-- begin of FAQ 9 -->     
                        <div class="ask">Doloribus asperiores repellat ?</div>
                        <div class="question">
                            <img src="images/author.jpg" alt="" class="imgright" />
                            <h5>Image on content</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui facilis blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui offici deserunt mollitia animi idest laborum et dolorum fuga eta harum quidem rerum.</p>
                        </div>
                        <!-- begin of FAQ 9 -->     
                                    
                        <!-- begin of FAQ 10 -->    
                        <div class="ask">Numquam modi tempora incidunt ?</div>
                        <div class="question">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcorob laboris nisi ut aliquip praesentium voluptatum deleniti.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam.</p>
                        </div>
                        <!-- begin of FAQ 10 -->
                    </div>
                    
                    <!-- BEGIN OF SIDEBAR -->
                    <div class="col-3 sidebar">
                    	<div class="sidebar-content">
                        <h5>More about us</h5>
                        	<ul class="sidebar-list">
                            	<li><a href="#">Vision and Mission</a></li>                    
                                <li><a href="#">Company History</a></li>                                
                                <li><a href="#">Company Philosophy</a></li>
                                <li><a href="#">Our Partnership</a></li>
                                <li><a href="#">Carreer</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-content">
                        <h5>Our advantage</h5>
                        	<ul class="advantage-list">
                            	<li>
                                	<img src="images/advantage1.jpg" alt="" />
                                	<p><strong>#1 Customer Satisfaction</strong> <br/> Ut enim ad minim veniam quis nostrud ullamco laboris nisi ut</p>
                                </li>
                                <li>
                                	<img src="images/advantage2.jpg" alt="" />
                                	<p><strong>Project  Finished on Time</strong> <br/> Ut enim ad minim veniam quis nostrud ullamco laboris nisi ut</p>
                                </li>
                                <li>
                                	<img src="images/advantage3.jpg" alt="" />
                                	<p><strong>Brilliant  Ideas Factory</strong> <br/> Ut enim ad minim veniam quis nostrud ullamco laboris nisi ut</p>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <!-- END OF SIDEBAR -->             
                
                </div>
            </div>            
            <!-- END OF CONTENT -->
            
        </div>
        
        <!-- BEGIN OF BOTTOM CONTENT -->
        <div id="bottom-container">
        	<div id="bottom-content">
           	
            	<div id="client-logo">
                	<ul>
                    	<li><img src="images/client1.gif" alt="ipo48" /></li>
                        <li><img src="images/client2.gif" alt="humanipo" /></li>
                        <li><img src="images/client3.gif" alt="ihub" /></li>
                        <li><img src="images/client4.gif" alt="mlab" /></li>
                        <li><img src="images/client5.gif" alt="techfortrade.org" /></li>
                        <li><img src="images/client6.gif" alt="infodev" /></li>
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
                    	<img src="images/footer-logo.png" alt="" />
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