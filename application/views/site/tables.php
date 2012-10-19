<!DOCTYPE HTML>
<html lang="en" xml:lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link href="https://plus.google.com/105305873259684952530" rel="publisher" /><meta name="description" content="">
<meta name="keywords" content="mfarm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya</title>
<!-- ////////////////////////////////// -->
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
<script type="text/javascript" src="<?=base_url();?>media/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/dropdown.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/vtip.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/ddaccordion.js"></script>
<script type="text/javascript" src="<?=base_url();?>media/js/faq-functions.js" ></script>
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
                        <a href="<?=base_url();?>"><img src="<?=base_url();?>media/images/logo.png" alt="Mfarm Logo" /></a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                <li><a href="#"><img src="<?=base_url();?>media/images/social-icons/top-social/social1.png" alt="" /></a></li>
                                <li><a href="#"><img src="<?=base_url();?>media/images/social-icons/top-social/social2.png" alt="" /></a></li>
                                <li><a href=""><img src="<?=base_url();?>media/images/social-icons/top-social/social3.png" alt="twitter-icon" /></a></li>
                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">MFarm</span>, you're on the right place to find <br/> many creative agribusiness solutions, because we're a factory of ideas</h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li><a href="index.html">home</a>
                                    <ul> 
                                        <li><a href="index-3.html">home roundabout</a></li>                           
                                        <li><a href="index-4.html">home diapo</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">about</a>
                                    <ul> 
                                        <li><a href="about-layout1.html">about layout 1</a></li>
                                        <li><a href="about-layout2.html">about layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">services</a>
                                    <ul> 
                                        <li><a href="services-layout1.html">services layout 1</a></li>
                                        <li><a href="services-layout2.html">services layout 2</a></li>
                                        <li><a href="services-layout3.html">services layout 3</a></li>
                                    </ul> 	
                                </li>
                                <li><a href="#">portfolio</a>
                                    <ul> 
                                        <li><a href="portfolio-layout1.html">portfolio layout 1</a></li>
                                        <li><a href="portfolio-layout2.html">portfolio layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">blog</a>
                                    <ul> 
                                        <li><a href="blog-layout1-r.html">blog layout 1</a></li>
                                        <li><a href="blog-layout2.html">blog layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">contact</a>
                                    <ul> 
                                        <li><a href="contact.html">contact layout 1</a></li>
                                        <li><a href="contact-layout2.html">contact layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="current"><a href="#">pages</a>
                                    <ul>                        
                                        <li><a href="blog-layout1-r.html">Right sidebar page</a></li>
                                        <li><a href="blog-layout1-l.html">Left sidebar page</a></li>
                                        <li><a href="column.html">Column page</a></li>
                                        <li><a href="tables.html">Tables page</a></li>
                                        <li><a href="button-list.html">Button &amp; List page</a></li>
                                        <li><a href="typography.html">Typography page</a></li>
                                        <li><a href="testimonials.html">Testimonials page</a></li>
                                        <li><a href="pricing.html">Pricing plan</a></li>
                                        <li><a href="faq.html">FAQ page</a></li>
                                        <li><a href="single-layout1.html">Single page</a></li>                            
                                        <li><a href="fullwidth.html">Fullwidth page</a></li>
                                            </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>        
        	<!-- END OF HEADER -->
            
            <!-- BEGIN OF PAGE TITLE -->
            <div id="page-title">
            	<h1>Tables</h1>
                <h6>Some attractive desciption here</h6>	
            </div>
            <!-- END OF PAGE TITLE -->
            
            <!-- BEGIN OF CONTENT -->
            <div id="content">
            	<div class="maincontent">         	
                        
                	<div class="col-2">                        	
                                                  
                    	<div class="table-gold">
                            <h4>Table gold color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>      
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-cyan">
                            <h4>Table cyan color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                      
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-purple">
                            <h4>Table purple color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-brown">
                            <h4>Table brown color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-rosy">
                            <h4>Table rosy color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-green">
                            <h4>Table green color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-pink">
                            <h4>Table pink color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-blue">
                            <h4>Table blue color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-yellow">
                            <h4>Table yellow color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-magenta">
                            <h4>Table magenta color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="col-2">
                            
                    	<h4>Table shortcode</h4>
                        <pre>&lt;div class=&quot;table-gold&quot;&gt;
	&lt;h4&gt;Table gold color&lt;/h4&gt;
        &lt;table class=&quot;table&quot;&gt;
        	&lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th&gt;Heading 1&lt;/th&gt;
                        &lt;th&gt;Heading 2&lt;/th&gt;
                        &lt;th&gt;Heading 3&lt;/th&gt;
                        &lt;th&gt;Heading 4&lt;/th&gt;
                    &lt;/tr&gt;
            	&lt;/thead&gt;
            	&lt;tbody&gt;
                    &lt;tr&gt;
                    	&lt;td&gt;Option 1&lt;/td&gt;
                        &lt;td&gt;Option 1&lt;/td&gt;
                        &lt;td&gt;Option 1&lt;/td&gt;
                        &lt;td&gt;Option 1&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class=&quot;odd&quot;&gt;
                        &lt;td&gt;Option 2&lt;/td&gt;
                        &lt;td&gt;Option 2&lt;/td&gt;
                        &lt;td&gt;Option 2&lt;/td&gt;
                        &lt;td&gt;Option 2&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Option 3&lt;/td&gt;
                        &lt;td&gt;Option 3&lt;/td&gt;
                        &lt;td&gt;Option 3&lt;/td&gt;
                        &lt;td&gt;Option 3&lt;/td&gt;
                    &lt;/tr&gt;      
                &lt;/tbody&gt;
        &lt;/table&gt;
&lt;/div&gt;</pre>

                        <div class="table-orange">
                            <h4>Table orange color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-red">
                            <h4>Table red color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-gray">
                            <h4>Table gray color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                           
                        <div class="table-black">
                            <h4>Table black color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
                        </div>
                            
                        <div class="table-white">
                            <h4>Table white color</h4>
                            <table class="table">
                              <thead>
                                  <tr>
                                    <th>Heading 1</th>
                                    <th>Heading 2</th>
                                    <th>Heading 3</th>
                                    <th>Heading 4</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                    <td>Option 1</td>
                                  </tr>
                                  <tr class="odd">
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                    <td>Option 2</td>
                                  </tr>
                                  <tr>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                    <td>Option 3</td>
                                  </tr>                                                          
                              </tbody>
                            </table>
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
                    <p>Nunc hendrerit libero scelerisque pellentesque praesent posuere digsim ipsum vulputate donec anulla cum sociis natoqu penatibus emagnis voluptatem quia volu eptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    <p>Montes nascetur ridiculus mus mauris sedapien ac nunc facilisis bibendum eu quis orci etiam mollis velit et magna dapibus scelerisqueq</p>
                </div>
                <div class="bottom-column2">
                	<h5>Trading Terms</h5>
                    <p>Read our easy to understand Trading Terms so you know how we do business and what we expect from our clients.</p>
                    <p><a href="#">Privacy Policy &amp; Disclaimer</a></p>
                </div>
                <div class="bottom-column2">
                	<h4>1600 086 688 <br/> 1600 086 677</h4>
                    <p><?=safe_mailto('info@mfarm.co.ke', 'info@mfarm.co.ke');?></p>
                    <p>PO BOX 1234,<br/>Nairobi, KENYA</p>
                </div>                 
                
            </div>
            <div id="footer-wrapper">
            	<div id="footer-content">
                	<div class="footer-logo">
                    	<img src="<?=base_url();?>media/images/footer-logo.png" alt="" />
                    </div>
                    <div class="footer-text">
                    	<p>© 2011 MFARM. Developed by Dev Team Mfarm. <br/> Lorem Ipsum dorem nulla sed eget augue maurisvestibulum dolor etiam ut posuere dolor.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF BOTTOM CONTENT -->
    
    <div class="clear"></div>                              	       
    </div>      
</body>

</html>