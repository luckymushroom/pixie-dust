<!--
Information:

Title: M-Farm KE - Email - Template
Designed by: isaak mogetutu
Coded by: isaak mogetutu
Email: imogetutu@gmail.com
Created: 03/04/2012
-->

<html>
<head>
<title>M-Farm Kenya - Invitation Email</title>
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
</head>
<body style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;" ondragstart="return false" onselectstart="return false">


<!-- START outer table (wrap) -->
<table cellspacing="0" cellpadding="0" border="0" width="100%" height="100%">
<tr><td style="background: #f5f5f5;" align="center" valign="top">


<!-- START logo -->
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #f5f5f5;" width="600" height="24"></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #f5f5f5;" width="183" height="44"><img src="<?=site_url('media/img/email_template/logo.jpg');?>" /></td>
<!-- END logo -->


<!-- START date -->
<td style="background: #f5f5f5;" width="360" height="44" align="right"><div style="color: #717171; font-family: arial, verdana; font-size: 12px;"><b><?=date('F Y');?></b></div><div style="color: #717171; font-family: arial, verdana; font-size: 10px;">You can’t see this email? <a style="color: #00b62f; text-decoration: none;" href="#">View it in your browser.</a></div></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #f5f5f5;" width="600" height="22"></td></tr>
</table>
<!-- END date -->


<!-- START image header -->
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #f5f5f5;" width="600" height="250"><img style="display: block;" src="<?=site_url('media/img/email_template/image_header.jpg');?>" /></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #f5f5f5;" width="600" height="27"><img style="display: block;" src="<?=site_url('media/img/email_template/image_header_shadow.jpg');?>" /></td></tr>
</table>
<!-- END image header -->


<!-- START intro content -->
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #e9e9e9;" width="24"></td>
<td style="background: #e9e9e9; color: #393939; font-family: arial, verdana; font-size: 25px;" width="576" align="center">Yey! Invitation to our M-Farm Platform by</td>
</tr><tr>
<td style="background: #e9e9e9;" width="24"></td>
<td style="background: #e9e9e9; color: #393939; font-family: arial, verdana; font-size: 25px;" width="576" align="center">
	<?php echo $referrer;?>!
</td></tr>
<td style="background: #e9e9e9;" width="24"></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #e9e9e9;" width="600" height="15"></td></tr>
</table>
<table style="background: #e9e9e9;" cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #e9e9e9;" width="24"></td>
<td style="background: #e9e9e9; color: #707070; font-family: arial, verdana; font-size: 15px;" width="552" align="left">
	Your username is <?php echo $identity; ?> and password <?php echo $password; ?>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie turpis convallis <b>massa pulvinar</b> in luctus lorem eleifend. Maecenas id felis arcu, eget condimentum est. Duis sapien nisl, <span style="color: #00b62f; text-decoration: none;" href="#"><?php echo anchor('auth/activate/'. $id .'/'. $activation, 'Activate Your Account');?></span> quis, vestibulum id augue. <br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie turpis convallis massa pulvinar in luctus lorem eleifend.</td>
<td style="background: #e9e9e9;" width="24"></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #e9e9e9;" width="600" height="37"></td></tr>
</table>
<!-- END intro content -->


<!-- START footer -->
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="600" height="8"><img src="<?=site_url('media/img/email_template/top_footer.jpg');?>" /></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #d1d1d1;" width="600" height="6"></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #d1d1d1;" width="27" height="37"></td>
<td style="background: #d1d1d1;" width="132" height="37"><img src="<?=site_url('media/img/email_template/footer_logo.jpg');?>" /></td>
<td style="background: #d1d1d1;" width="292" height="37"></td>
<td style="background: #d1d1d1;" width="30" height="30"><a href="#"><img border="0" src="<?=site_url('media/img/email_template/icons/facebook.jpg');?>" /></a></td>
<td style="background: #d1d1d1;" width="13" height="30"></td>
<td style="background: #d1d1d1;" width="30" height="30"><a href="#"><img border="0" src="<?=site_url('media/img/email_template/icons/twitter.jpg');?>" /></a></td>
<td style="background: #d1d1d1;" width="13" height="30"></td>
<td style="background: #d1d1d1;" width="30" height="30"><a href="#"><img border="0" src="<?=site_url('media/img/email_template/icons/rss.jpg');?>" /></a></td>
<td style="background: #d1d1d1;" width="33" height="30"></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="<?=site_url('media/img/email_template/footer_bottom.jpg');?>" /></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background: #f5f5f5;" width="600" height="10"></td></tr>
</table>
<!-- END footer -->


</td></tr></table>
<!-- END outer table (wrap) -->

</body>
</html>
