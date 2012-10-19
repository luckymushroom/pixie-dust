<?php if (! defined('BASEPATH')) exit('No direct script access');

class Orders extends MY_Controller {

    protected $models = array('order_detail');
    function __construct() 
    {
        parent::__construct();
    }
    
    function index() 
    {
        $select = 'order_details.id,username,phone,contact,product_name,buyer_contact,order_details.created_at';
        $this->data['orders'] = $this->order_detail->select($select)->post()->user()->product()->get_all();
    }

    public function delete($id)
    {
        if($this->order_detail->delete($id))
        {
            $this->session->set_flashdata('message', 'Order Deleted');
        }
        else
        {
            $this->session->set_flashdata('message', 'Order Not Deleted');
        }
        redirect('admin/orders');
    }

}