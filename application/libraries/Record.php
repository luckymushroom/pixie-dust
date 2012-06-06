<?php /**
* Insert & Update Functions
* List items & items Functions
* @author mogetutu <imogetutu@gmail.com>
* @version 1.0
* @link www.mogetutu.com
* @package Mfarm
*/
class Record
{
	protected $ci;
	function __construct()
	{
		$this->ci = & get_instance();
	}

	/**
	 * List row item by id
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @version 1.0
	 * @param  int $id
	 * @param  string $model model/table name
	 * @return void
	 */
	public function list_values($id,$model)
	{
		$row = $this->$model->get_by('id',$id);
		if($row)
		{
			foreach ($row as $key => $value) {
				$this->data[$key] = $value;
			}
			return $row;

		}
		return false;
	}
	/**
	 * Get row items from $model table
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @version 1.0
	 * @param  string $model table/model name of table to be accessed
	 * @return void
	 */
	public function list_rows($model)
	{
		$rows = $this->$model->get_all();
		if($rows)
		{
			$this->data[$model] = $rows;
			return $rows;
		}
		return false;
	}

	/**
	 * Add or Update record to table matching model accessed
	 * @author mogetutu <imogetutu@gmail.com>
	 * @param  int $row record id
	 * @param  string $url callback url
	 * @param  string $model model accessed
	 * @return void
	 */
	public function manage_content($row ='', $url, $model)
	{
		if ($row && $this->ci->input->post())
		{

			$save = $this->$model->update($row->id,$this->input->post());
			// Check for changes in the database record
			if($this->ci->db->affected_rows())
			{
				// redirect to page and refresh
				$this->ci->session->set_flashdata('message','Changes added');
				redirect($url,'refresh');
			}
			else
			{
				// redirect to page and refresh
				$this->ci->session->set_flashdata('message','Nothing to update');
				redirect($url,'refresh');
			}

		}
		if($this->input->post())
		{
			// set user id in session
			$_POST['user_id'] = $this->user;
			// Insert new record here from post
			if($this->$model->insert($this->input->post()))
			{
				$this->ci->session->set_flashdata('message','Record added');
				redirect($url,'refresh');
			}
			else
			{
				$this->ci->session->set_flashdata('message','Oops! something went wrong');
				redirect($url,'refresh');
			}
		}
	}
}