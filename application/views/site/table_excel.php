<!DOCTYPE HTML>
<html lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link href="https://plus.google.com/105305873259684952530" rel="publisher" /><meta name="description" content="">
<meta name="keywords" content="mfarm,mfarm_ke,m farm,m farm kenya,mobile farmer,mobile farming,kenya mfarm">
<meta name="author" content="jamila,susaneve,linda,mogetutu,melvin">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crop Prices | MFarm Kenya</title>
<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="./media/favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?php echo base_url();?>media/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>media/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>media/css/custom-style.css" rel="stylesheet" type="text/css" />
<style type="text/css" title="currentStyle">
    @import "<?php echo base_url();?>media/css/demo_page.css";
    @import "<?php echo base_url();?>media/themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<link href="<?php echo base_url();?>media/css/datatables.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>media/css/demo_table_jui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.js"></script>
<script src="<?=base_url();?>media/js/jquery.dataTables.min.js"></script>
<link href="<?php echo base_url();?>media/css/TableTools.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>media/js/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>media/js/TableTools.js"></script>
<script type="text/javascript">
$(document).ready( function() {
    TableTools.DEFAULTS.aButtons = [ "copy", "csv", "xls" ];
    //Datatables
    $('#example').dataTable( {
                        "sDom": 'T<"clear">lfrtip',
                        "oTableTools": {
                            "sSwfPath": "<?php echo base_url();?>media/swf/copy_cvs_xls_pdf.swf"
                        },
                        "bJQueryUI": true,
                        "sPaginationType": "full_numbers"
                    } );
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
                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>media/images/logo_xmas.png" alt="Mfarm Logo" /></a>
                    </div>
                    <div id="righttop-header">
                        <div id="top-social">
                            <ul>
                                <li><a class="" href="<?php echo base_url();?>members" title="login here"><img src="<?php echo base_url();?>media/images/top-login.png" alt="" /></a></li>
                                <li><a href="https://www.facebook.com/pages/M-Farm/168567086502534" target="_blank" title="facebook"><img src="<?php echo base_url();?>media/images/social-icons/top-social/social1.png" alt="" /></a></li>
                                <li><a href="https://plus.google.com/105305873259684952530?prsrc=3" target="_blank" title="g+"><img src="<?php echo base_url();?>media/images/social-icons/top-social/social2.png" alt="" /></a></li>
                                <li><a href="https://twitter.com/#!/mfarm_ke" target="_blank" title="twitter"><img src="<?php echo base_url();?>media/images/social-icons/top-social/social3.png" alt="" /></a></li>
                            </ul>
                        </div>
                        <div id="top-slogan">
                            <h4>Welcome to <span class="title-green">MFarm</span>, you're on the right place to find <br/> many creative agribusiness solutions, because we're a factory of ideas</h4>
                        </div>
                        <div id="mainmenu">
                            <ul id="menu">
                                <li><a href="index">home</a></li>
                                <li><a href="about" title="about mfarm">about</a></li>
                                <li>
                                    <a href="services" title="services mfarm">services</a>
                                    <ul>
                                        <li><a href="buy_here" title="buy services mfarm">Buy</a></li>
                                        <li><a href="sell_here" title="sell services mfarm">Sell</a></li>
                                    </ul>
                                </li>
                                <li><a href="team" title="team mfarm">team</a></li>
                                <li class="current"><a href="<?php echo base_url();?>price" title="prices mfarm">prices</a></li>
                                <li><a href="contact" title="contact mfarm">contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END OF HEADER -->
<!-- BEGIN OF PAGE TITLE -->
<div id="page-title" style="height:53px;">
    <h2>Price Information</h2>
</div>
<!-- END OF PAGE TITLE -->

<!-- BEGIN OF CONTENT -->
<div id="content">
    <div class="maincontent">

    <div class="col-12">
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
        <tr>
            <th>Commodity Name</th>
            <th>Weight</th>
            <th>Unit</th>
            <th>Nairobi</th>
            <th>Mombasa</th>
            <th>Kisumu</th>
            <th>Eldoret</th>
            <th>Kitale</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items->result() as $item): ?>
            <tr>
                <td><?php echo $item->commodity_name; ?></td>
                <td><?php echo $item->crop_weight; ?></td>
                <td><?php echo $item->crop_unit; ?></td>
                <td><?php echo $item->NBI; ?></td>
                <td><?php echo $item->MSA; ?></td>
                <td><?php echo $item->KSM; ?></td>
                <td><?php echo $item->ELD; ?></td>
                <td><?php echo $item->KTL; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

</div>
</div>
<!-- END OF CONTENT -->

</div>

<!-- BEGIN OF BOTTOM CONTENT -->
<div id="bottom-container">
<div id="bottom-content">

    <div id="client-logo">
        <ul>
            <li><img src="<?php echo base_url();?>media/images/network/client1.gif" alt="ipo48" /></li>
            <li><img src="<?php echo base_url();?>media/images/network/client2.gif" alt="humanipo" /></li>
            <li><img src="<?php echo base_url();?>media/images/network/client3.gif" alt="ihub" /></li>
            <li><img src="<?php echo base_url();?>media/images/network/client4.gif" alt="mlab" /></li>
            <li><img src="<?php echo base_url();?>media/images/network/client5.gif" alt="techfortrade.org" /></li>
            <li><img src="<?php echo base_url();?>media/images/network/client6.gif" alt="infodev" /></li>
        </ul>
    </div>
    <div class="bottom-column1">
        <h5>About MFARM</h5>
        <p>MFarm Ltd is a software solution and agribusiness company.</p><p> Our main product M-Farm, is a transparency tool for Kenyan farmers where they simply SMS the number 3555 to get information about the retail price of their products, buy their farm inputs directly from manufacturers at favorable prices, and find buyers for their produce.</p>

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
            <img src="<?php echo base_url();?>media/images/footer-logo.png" alt="" />
        </div>
        <div class="footer-text">
            <p>© 2011 MFARM. Developed by Dev Team Mfarm. <br/> Create solutions that empower farmers to work and communicate in new and innovative ways.</p>
        </div>
    </div>
</div>
</div>
<!-- END OF BOTTOM CONTENT -->

<div class="clear"></div>
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
</div></div>
</body>

</html>