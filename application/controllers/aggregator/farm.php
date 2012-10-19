<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farm extends MY_Controller
{
    protected $models = array( 'county', 'farm_detail', 'planting_plan', 'user', 'product' );
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }

    function index()
    {
        $this->data['farm'] = $this->farm_detail->aggregator($this->current_user);
    }
    /**
     * View Farmer shamba details
     */
    public function details($user_id)
    {
        $this->data['counties'] = $this->county->dropdown('id','county_name');
        $this->data['username'] = $this->user->get($user_id)->username;
        $this->data['farm'] = $this->farm_detail->get_by('user_id', $user_id);
    }
    /**
     * List Planted crops | Default: Planted
     */
    public function crops($user_id, $status='planted')
    {
        if (!$this->user->aggregator($this->current_user)->get($user_id)) redirect("aggregator/users/{$this->current_user}");
        $this->data['user_id'] = $user_id;
        $this->data['crops'] = $this->planting_plan->status($status)->join('products')->get_many_by('user_id', $user_id);
    }

    public function create_new($id)
    {
        $this->data['farmer'] = $this->user->get($id);
        $this->data['products'] = $this->product->dropdown('product_name');
    }
    /**
     * Add new crop to list
     */
    public function create($id = null, $product_id = null)
    {
        $id = ($this->input->post('user_id')) ? $this->input->post('user_id') : $id;
        if($id) $_POST['user_id'] = $id;
        $product_id = ($product_id) ? $product_id : $this->input->post('product_id');
        $farm_details = $this->input->post();
        if($product_id && $id)
        {
            $this->planting_plan->insert($farm_details);
            $this->session->set_flashdata('message', 'Planted new crop.');
        }
        else
        {
            $this->session->set_flashdata('message', 'Oops something went wrong.');
        }
        redirect("{$this->router->directory}{$this->router->class}/crops/" . $id );
    }
    /**
     * Update planted crop details
     */
    public function update($user_id)
    {
        $farm_details = $this->input->post();
        $create = $this->planting_plan->update($user_id, $farm_details);
        if($create)
        {
            $this->session->set_flashdata('message', 'Record Updated');
        }
        else
        {
            $this->session->set_flashdata('message', 'Oops something went wrong.');
        }
        redirect("{$this->router->directory}{$this->router->class}/crops/" . $user_id );
    }
    /**
     * Delete farmer crop
     */
    public function destroy($id, $user_id)
    {
        $delete = $this->planting_plan->delete($id);
        if($delete)
        {
            $this->session->set_flashdata('message', 'Record Deleted.');
        }
        else
        {
            $this->session->set_flashdata('message', 'Oops! Something went wrong.');
        }
        redirect("{$this->router->directory}{$this->router->class}/crops/" . $user_id);
    }
    /**
     * Update farmer farm details
     */
    public function update_farm($id)
    {
        $user_id = $this->farm_detail->get($id)->user_id;
        $update = $this->farm_detail->update($id, $this->input->post());
        if ($this->db->affected_rows())
        {
            $this->session->set_flashdata('message', 'Record Updated');
        }
        else
        {
            $this->session->set_flashdata('message', 'Oops! Something went wrong.');
        }
        redirect("{$this->router->directory}{$this->router->class}/details/" . $user_id);
    }
}
/* End of file farm.php */
/* Location: ./application/controllers/aggregator/farm.php */