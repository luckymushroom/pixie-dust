<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends ActiveRecord\Model
{
	static $belongs_to = array(array('user'),array('product'));
	static $has_many = array('photos');

	public function price_feed($crop)
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
		return $this->db->query($Q)->result();
	}
}