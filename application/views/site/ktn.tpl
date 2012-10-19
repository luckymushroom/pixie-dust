{$xml_start}
<channel>
	<title>MFARM LTD</title>
	<description>DAILY PRICES</description>
	<lastBuildDate>{date("r")}</lastBuildDate>

	<language>en</language>
	{foreach $feeds as $feed}
	<item>
	  <commodityname>{$feed->product_name}</commodityname>
	  <cropweight>{$feed->crop_weight}</cropweight>
	  <cropunit>{$feed->crop_unit}</cropunit>
	  <cropprice>{$feed->crop_price}</cropprice>
	  <croplocation>{$feed->location_name}</croplocation>
	</item>
	{/foreach}
</channel>