<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('twitter_time_format'))
{
	function twitter_time_format ($date)
	{
		$blocks = array(
			array('year',  (3600 * 24 * 365)),
			array('month', (3600 * 24 * 30)),
			array('week',  (3600 * 24 * 7)),
			array('day',   (3600 * 24)),
			array('hour',  (3600)),
			array('min',   (60)),
			array('sec',   (1))
		);
		#Get the time from the function arg and the time now
			$argtime = strtotime($date);
			$nowtime = time();
		#Get the time diff in seconds
			$diff    = $nowtime - $argtime;
		#Store the results of the calculations
			$res = array ();
		#Calculate the largest unit of time
			for ($i = 0; $i < count($blocks); $i++)
			{
				$title = $blocks[$i][0];
				$calc  = $blocks[$i][1];
				$units = floor($diff / $calc);
				if ($units > 0)
				{
					$res[$title] = $units;
				}
			}
		if (isset($res['year']) && $res['year'] > 0)
		{
			if (isset($res['month']) && $res['month'] > 0 && $res['month'] < 12)
			{
				$format      = "About %s %s %s %s ago";
				$year_label  = $res['year'] > 1 ? 'years' : 'year';
				$month_label = $res['month'] > 1 ? 'months' : 'month';
				return sprintf($format, $res['year'], $year_label, $res['month'], $month_label);
			}
			else
			{
				$format     = "About %s %s ago";
				$year_label = $res['year'] > 1 ? 'years' : 'year';
				return sprintf($format, $res['year'], $year_label);
			}
		}
		if (isset($res['month']) && $res['month'] > 0)
		{
			if (isset($res['day']) && $res['day'] > 0 && $res['day'] < 31) {
				$format      = "About %s %s %s %s ago";
				$month_label = $res['month'] > 1 ? 'months' : 'month';
				$day_label   = $res['day'] > 1 ? 'days' : 'day';
				return sprintf($format, $res['month'], $month_label, $res['day'], $day_label);
			}
			else
			{
				$format      = "About %s %s ago";
				$month_label = $res['month'] > 1 ? 'months' : 'month';
				return sprintf($format, $res['month'], $month_label);
			}
		}
		if (isset($res['day']) && $res['day'] > 0)
		{
			if ($res['day'] == 1)
			{
				return sprintf("Yesterday at %s", date('h:i a', $argtime));
			}
			if ($res['day'] <= 7)
			{
				return date("\L\a\s\\t l \a\\t h:i a", $argtime);
			}
			if ($res['day'] <= 31)
			{
				return date("l \a\\t h:i a", $argtime);
			}
		}
		if (isset($res['hour']) && $res['hour'] > 0)
		{
			if ($res['hour'] > 1)
			{
				return sprintf("About %s hours ago", $res['hour']);
			}
			else
			{
				return "About an hour ago";
			}
		}

		if (isset($res['min']) && $res['min'])
		{
			if ($res['min'] == 1)
			{
				return "About one minutes ago";
			}
			else
			{
				return sprintf("About %s minutes ago", $res['min']);
			}
		}
		if (isset ($res['sec']) && $res['sec'] > 0)
		{
			if ($res['sec'] == 1)
			{
				return "One second ago";
			}
			else
			{
				return sprintf("%s seconds ago", $res['sec']);
			}
		}
	}
}
if ( ! function_exists('relative_time'))
{
	function relative_time($date)
	{
		$diff = time() - strtotime($date);
		if ($diff>0)
		{
			if ($diff<60)
				return $diff . " second" . plural($diff) . " ago";
			$diff = round($diff/60);
			if ($diff<60)
				return $diff . " minute" . plural($diff) . " ago";
			$diff = round($diff/60);
			if ($diff<24)
				return $diff . " hour" . plural($diff) . " ago";
			$diff = round($diff/24);
			if ($diff<7)
				return $diff . " day" . plural($diff) . " ago";
			$diff = round($diff/7);
			if ($diff<4)
				return $diff . " week" . plural($diff) . " ago";
			return "on " . date("F j, Y", strtotime($date));
		}
		else
		{
			$second = (-$diff > 1) ? " seconds" : " second" ;
			$minute = (-$diff > 1) ? " minutes" : " minute" ;
			$hour = (-$diff > 1) ? " hours" : " hour" ;
			$day = (-$diff > 1) ? " days" : " day" ;
			$week = (-$diff > 1) ? " weeks" : " week" ;
			if ($diff>-60)
				return "in " . -$diff . $second;
			$diff = round($diff/60);
			if ($diff>-60)
				return "in " . -$diff . $minute;
			$diff = round($diff/60);
			if ($diff>-24)
				return "in " . -$diff . $hour;
			$diff = round($diff/24);
			if ($diff>-7)
				return "in " . -$diff . $day;
			$diff = round($diff/7);
			if ($diff>-4)
				return "in " . -$diff . $week;
			return "on " . date("F j, Y", strtotime($date));
		}
	}
}

if(! function_exists('price_feed') )
{
	function price_feed($crop)
	{
		$Q = 'SELECT product_name,crop_weight,crop_unit,crop_date,DATE_FORMAT(crop_date,"%a") as wk_date,
					MAX(if(location_id = 43,crop_price, NULL)) AS "NBI",
					MAX(if(location_id = 44,crop_price, NULL)) AS "MSA",
					MAX(if(location_id = 45,crop_price, NULL)) AS "KSM",
					MAX(if(location_id = 55,crop_price, NULL)) AS "ELD",
					MAX(if(location_id = 56,crop_price, NULL)) AS "KTL"
					FROM prices
					JOIN products on products.id = prices.product_id
					WHERE crop_date < (SELECT max(crop_date) FROM prices)
					AND crop_date > ((SELECT max(crop_date) FROM prices) - INTERVAL 5 DAY)
					AND prices.product_id = "'.$crop.'"
					AND prices.status ="live"
					GROUP BY prices.product_id,wk_date
					ORDER BY crop_date DESC';
		$ci =& get_instance();
		$ci->load->database();
		return $ci->db->query($Q)->result();
	}
}
