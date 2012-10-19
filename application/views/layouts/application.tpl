<!DOCTYPE HTML>
<html lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://plus.google.com/105305873259684952530" rel="publisher" />
<meta name="description" content="MFarm website homepage">
<meta name="keywords" content="m-farm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm, mfarm kenya,mfarm price">
<meta name="keywords" content="mfarm, mfarmer, mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm, mfarm kenya,mfarm price">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<!-- Apple iOS and Android stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="{base_url}media/img/icon.png">
    <link rel="apple-touch-startup-image" href="{base_url}media/img/startup.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {if isset($page_title) } {$page_title} | MFarm Kenya {else} Connecting,Empowering &amp; Grouping Farmers | MFarm Kenya {/if}
    </title>
<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="{base_url}favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="{base_url}media/site/css/reset.css" rel="stylesheet" type="text/css" />
<link href="{base_url}media/site/css/style.css" rel="stylesheet" type="text/css" />
<link href="{base_url}media/site/css/custom-style.css" rel="stylesheet" type="text/css" />
{if  $seg_one != 'contact' AND $seg_one != 'price' }
    <link href="{base_url}media/site/css/bootstrap.css" rel="stylesheet" type="text/css" />
{/if}


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="{base_url}media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/dropdown.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/vtip.js"></script>
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="{base_url}media/site/js/jquery.min.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/dropdown.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/vtip.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/jquery.twitter.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/ddaccordion.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/faq-functions.js" ></script>
<script type="text/javascript" src="{base_url}media/site/js/jflickrfeed.min.js"></script>
<script src="{base_url}media/site/js/bootstrap-modal.js"></script>
<script src="{base_url}media/site/js/quickpager.jquery.js"></script>
<script src="{base_url}media/site/js/site.js"></script>

{if $flash_message != '' }
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            var $alertdiv = $('<div id = "alertmsg"/>');
            $alertdiv.text("{$flash_message}");
            $alertdiv.bind('click', function() {
                $(this).slideUp(200);
            });
            $(document.body).append($alertdiv);
            $("#alertmsg").slideDown("slow");
            setTimeout(function() { $alertdiv.slideUp(200) }, 5000);
        });
    </script>
{/if}
</head>

<body>
  <div id="container">
      <div id="top-container">

          <!-- BEGIN OF HEADER -->
            <div id="header-container">
              <div id="header-box">

                    <div id="logo">
                        <a href="{base_url}">
                            <img src="{base_url}media/site/images/logo_xmas.png" alt="Mfarm Logo" />
                        </a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                {if $ci->ion_auth->is_admin()}
                                <li><a class="" href="{site_url('admin/dashboard/')}" title="dashboard here">
                                    <img src="{base_url}media/site/images/top-login.png" alt="Logout" /></a>
                                </li>
                                {elseif !$ci->ion_auth->is_admin()}
                                <li><a class="" href="{site_url('farmer/dashboard/')}" title="dashboard here">
                                    <img src="{base_url}media/site/images/top-login.png" alt="Logout" /></a>
                                </li>
                                {else}
                                <li><a class="" href="{site_url('auth/login/')}" title="login here"><img src="{base_url}media/site/images/top-login.png" alt="Login"/></a></li>
                                {/if}
                                <li><a href="https://www.facebook.com/pages/M-Farm/168567086502534" target="_blank" title="facebook">
                                    <img src="{base_url}media/site/images/social-icons/top-social/social1.png" alt="mfarm-facebook" /></a>
                                </li>
                                <li><a href="https://plus.google.com/105305873259684952530?prsrc=3" target="_blank" title="g+">
                                    <img src="{base_url}media/site/images/social-icons/top-social/social2.png" alt="mfarm-google+" /></a>
                                </li>
                                <li><a href="https://twitter.com/#!/mfarm_ke" target="_blank" title="twitter">
                                    <img src="{base_url}media/site/images/social-icons/top-social/social3.png" alt="mfarm-twitter" /></a>
                                </li>
                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">M-Farm</span>, we give you up-to-date <a href="{site_url('price')}">market information</a> <br/> link farmers to buyers through our <a href="{site_url('marketplace')}">marketplace</a>, and current <a href="{site_url('blog')}">agri-trends.</a></h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li{if $seg_one=='blog'} 'class=current' {else} '' {/if}><a href={url type="site" url="blog"}>home</a></li>
                                <li{if $seg_one=='price'} 'class=current' {/if}><a href={url type="site" url="price"} title="mfarm price information">prices</a></li>
                                <li{if $seg_one=='market'} 'class=current'{/if}><a href={url type="site" url="market"}>marketplace</a></li>
                                <li{if $seg_one=='about'} 'class=current' {else} '' {/if}><a href={url type="site" url="about"} title="mfarm agricultural information">about</a></li>
                                <li{if $seg_one=='services'} 'class=current' {else} '' {/if}><a href={url type="site" url="services"} title="services by mfarm">services</a></li>
                                <li{if $seg_one=='team'} 'class=current' {else} '' {/if}><a href={url type="site" url="team"} title="mfarm team page">team</a></li>
                                <li{if $seg_one=='contact'} 'class=current' {else} '' {/if}><a href={url type="site" url="contact"} title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
          <!-- END OF HEADER -->
            <!-- BEGIN OF PAGE TITLE -->
            <div id="page-title">
                <h1>{$page_title}</h1>
                {if $seg_one == 'marketplace' || $seg_one == 'index' || $seg_one == '' || $seg_one == 'market' }
                {if $user_session}
                    {if $ci->ion_auth->is_admin()}
                        <a class='button-helios alt-green' id='homepage' href="{url type="site" url="admin/dashboard"}">
                    {else}
                        <a class='button-helios alt-green' id='homepage' href="{url type="site" url="farmer/dashboard"}">
                    {/if}
                        <span>profile</span>
                        </a>
                {else}
                        <a class='button-helios alt-green' id='homepage' href="{url type="site" url="auth/login"}">
                            <span>sign in</span>
                        </a>
                {/if}

                {/if}
                {if isset($page_subtitle)}
                    <h6>{$page_subtitle}</h6>
                {/if}

                {if $seg_one == 'team'}
                    <!-- begin of portfolio filter -->
                    <ul id="portfolio-filter">
                        <li><a href="#all" title="">All</a></li>
                        <li><a href="#founders" title="" rel="founders">Founders</a></li>
                    </ul>
                    <!-- end of portfolio filter -->
                {/if}
            </div>
            <!-- END OF PAGE TITLE -->

            <!-- BEGIN OF CONTENT -->
            <div id="content">
              <!-- Yield goes here -->
                {$yield}
              <!-- yield end here -->
            </div>
            <!-- END OF CONTENT -->

        </div>

        <!-- BEGIN OF BOTTOM CONTENT -->
        <div id="bottom-container">
          <div id="bottom-content">

              <div id="client-logo">
                  <ul>
                        <li><img src="{base_url}media/site/images/client5.gif" alt="techfortrade.org" /></li>
                        <li><img src="{base_url}media/site/images/client1.gif" alt="ipo48" /></li>
                        <li><img src="{base_url}media/site/images/client2.png" alt="samsung" /></li>
                        <li><img src="{base_url}media/site/images/client3.gif" alt="ihub" /></li>
                        <li><img src="{base_url}media/site/images/client4.gif" alt="mlab" /></li>
                        <li><img src="{base_url}media/site/images/client6.gif" alt="infodev" /></li>
                    </ul>
                </div>
                <div class="bottom-column1">
                  <h5>About M-Farm</h5>
                    <p>MFarm Ltd is a software solution and agribusiness company.</p><p> Our main product M-Farm, is a transparency tool for Kenyan farmers where they simply SMS the number 3555 to get information about the retail price of their products, buy their farm inputs directly from manufacturers at favorable prices, and find buyers for their produce.</p>

                </div>
<!--                 <div class="bottom-column2">
                  <h5>Trading Terms</h5>
                    <p>Read our easy to understand Trading Terms so you know how we do business and what we expect from our clients.</p>
                    <p><a href="#">Privacy Policy &amp; Disclaimer</a></p>
                </div> -->
                <div class="bottom-column2">
                  <h5>Our Prices</h5>
                    <p>We collect Wholesale Prices of the commodities listed on our price page. These are from the 5 major markets in Kenya.</p>
                    <p><a href="{site_url('price')}">WholeSale Prices</a></p>
                </div>
                <div class="bottom-column2">
                  <h4>+254 707 933 993</h4>
                    <p>{safe_mailto('info@mfarm.co.ke', 'info@mfarm.co.ke')}</p>
                    <p>Bishop Mague Centre,Opp. Uchumi Hyper Ng'ong rd.<br/>Nairobi, KENYA</p>
                </div>

            </div>
            <div id="footer-wrapper">
              <div id="footer-content">
                  <div class="footer-logo">
                      <img src="{base_url}media/site/images/footer-logo.png" alt="mfarm-footer-logo" />
                    </div>
                    <div class="footer-text">
                      <p>&copy; copyright 2010 - {date('Y')} M-Farm. Developed by Dev Team M-farm. <br/> Create solutions that empower farmers to work and communicate in new and innovative ways.</p>
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