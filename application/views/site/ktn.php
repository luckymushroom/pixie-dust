<?php echo $xml_start; ?>
<channel>
	<title>MFARM LTD</title>
	<description>DAILY PRICES</description>
	<lastBuildDate><?php echo date("r"); ?></lastBuildDate>

	<language>en</language>
	<?php foreach($feeds as $feed): ?>
	<item>
	  <commodityname><?php echo $feed->product_name; ?></commodityname>
	  <cropweight><?php echo $feed->crop_weight;?></cropweight>
	  <cropunit><?php echo $feed->crop_unit;?></cropunit>
	  <cropprice><?php echo $feed->crop_price; ?></cropprice>
	  <croplocation><?php echo $feed->location;?></croplocation>
	</item>
	<?php endforeach; ?>
</channel>