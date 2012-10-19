<?php if (! defined('BASEPATH')) exit('No direct script access');

class Trend_model extends CI_Model {

	protected $soft_delete = TRUE;

	function __construct()
	{
		parent::__construct();
	}

	function get_prices($product_id, $town_id, $days)
	{
		// change date format if days are more than a month
		if($days > 29)
		{
			$dateformat = "%b/%y";
		}
		else
		{
			$dateformat = "%d/%b";
		}

		$Q ='SELECT product_name,crop_weight,avg(crop_price) as avg_price,crop_unit,crop_date,DATE_FORMAT(crop_date,"'.$dateformat.'") as m_date
					FROM prices
					JOIN products on products.id = prices.product_id
					WHERE crop_date < (SELECT max(crop_date) FROM prices)
					AND crop_date > ((SELECT max(crop_date) FROM prices) - INTERVAL "'.$days.'" DAY)
					AND prices.product_id = "'.$product_id.'"
					AND location_id = "'.$town_id.'"
					AND prices.status = "live"
					AND prices.deleted = 0
					GROUP BY prices.product_id,m_date
					ORDER BY crop_date ASC';
		return $this->db->query($Q)->result();
	}

}