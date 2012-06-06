<!doctype html>
<body style="font-family: 'Ubuntu', Trebuchet-MS, Verdana; font-size: 13px; background: grey;">
	<h1 style="border-bottom: 2px solid #333;padding:3px;">Account Invitation from <?php echo $referrer;?></h1>
	<p>Your username is <?php echo $identity; ?> and password <?php echo $password; ?></p>
	<p>Please Change password after login for security purposes</p>
	<p>Please click this link to <?php echo anchor('auth/activate/'. $id .'/'. $activation, 'Activate Your Account');?>.</p>
</body>
</html>