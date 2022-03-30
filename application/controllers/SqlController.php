<?php
/*
    * Vote
    * Controller for Vote module
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-23
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/UserController.php");

class SqlController extends UserController
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->load->model('scs_model');
	}
	function show_item_manage()
	{
		$this->load->model('M_item_list', 'item');
		$data['arr_item'] = $this->item->get_item_all()->result();
		$this->output('v_item_manage', $data);
	}

	function show_activity_manage()
	{
		$this->load->model('M_activity_list', 'act');
		$data['arr_act'] = $this->act->get_activity_all()->result();
		$this->output('v_activity_manage', $data);
	}
	function add_activity()
	{
		// echo $this->input->post('name');
		$this->load->model('Da_activity_list', 'act');
		$this->act->activity_name = $this->input->post('activity_name');
		$this->act->activity_score = $this->input->post('activity_score');
		// $this->item->item_name = "หมา";
		// $this->item->item_price = 12;
		// $this->item->item_num = 14;
		$this->act->insert();
		$this->load->model('M_activity_list', 'acl');
		$data['arr_act'] = $this->acl->get_activity_all()->result();
		echo json_encode($data);
	}
	function edit_activity()
	{
		// echo $this->input->post('name');
		$this->load->model('Da_activity_list', 'act');
		$this->act->activity_name = $this->input->post('activity_name');
		$this->act->activity_score = $this->input->post('activity_score');
		$this->act->activity_id = $this->input->post('activity_id');
		// $id = $this->input->post('item_id');
		// $this->item->item_name = "หมา";
		// $this->item->item_price = 12;
		// $this->item->item_num = 14;
		$this->act->update();
		//$this->item->insert();
		$this->load->model('M_activity_list', 'acl');
		$data['arr_act'] = $this->acl->get_activity_all()->result();
		echo json_encode($data);
	}
	function delete_activity($id)
	{
		$this->load->model('Da_activity_list', 'act');
		$this->act->activity_id = $id;
		$this->act->delete();
		redirect('SqlController/show_activity_manage');
	}
	function add_item()
	{
		// echo $this->input->post('name');
		$this->load->model('Da_item_list', 'item');
		$this->item->item_name = $this->input->post('item_name');
		$this->item->item_price = $this->input->post('item_price');
		$this->item->item_num = $this->input->post('item_num');
		// $this->item->item_name = "หมา";
		// $this->item->item_price = 12;
		// $this->item->item_num = 14;
		$this->item->insert();
		$this->load->model('M_item_list', 'ite');
		$data['arr_item'] = $this->ite->get_item_all()->result();
		echo json_encode($data);
	}
	function edit_item()
	{
		// echo $this->input->post('name');
		$this->load->model('Da_item_list', 'item');
		$this->item->item_name = $this->input->post('item_name');
		$this->item->item_price = $this->input->post('item_price');
		$this->item->item_num = $this->input->post('item_num');
		$this->item->item_id = $this->input->post('item_id');
		// $id = $this->input->post('item_id');
		// $this->item->item_name = "หมา";
		// $this->item->item_price = 12;
		// $this->item->item_num = 14;
		$this->item->update();
		//$this->item->insert();
		$this->load->model('M_item_list', 'ite');
		$data['arr_item'] = $this->ite->get_item_all()->result();
		echo json_encode($data);
	}
	function delete_item($id)
	{
		$this->load->model('Da_item_list', 'item');
		$this->item->item_id = $id;
		$this->item->delete();
		redirect('SqlController/show_item_manage');
	}


	
    public function get_activity_cluster_ajax() {
		$this->load->model('M_scs_activity_cluster','mcha');
		$cluster_id = $this->input->post('cluster_id');

		$data['jason_channel'] = $this->mcha->get_cluster_by_id($cluster_id)->result();
        $data['json_message'] = 'success : get_channel_ajax';


		// echo'<pre>';
        // print_r( $data['jason_channel'] );
        // echo'<pre>';

        echo json_encode($data);
    }

	public function change_status_ajax() {
		$this->load->model('M_scs_activity_cluster','activity');
		$this->activity->activity_cluster_id = $this->input->post('activity_id');
		$this->activity->activity_cluster_status = $this->input->post('activity_status');
		$this->activity->update_user = 1;
		$this->activity->date_update = date("Y-m-d");

        $this->activity->change_status();
        $data['message'] = 'Success';

        echo json_encode($data);
    }

	function show_item_shop()
	{
		$this->output2('v_item_shop');
	}

	public function get_item_ajax() {
		$this->load->model('M_item_list', 'item');
		$data['jason_channel'] = $this->item->get_item_all()->result();
        $data['json_message'] = 'success : get_channel_ajax';


		// echo'<pre>';
        // print_r( $data['jason_channel'] );
        // echo'<pre>';

        echo json_encode($data);
    }


	function show_dashboard()
	{
		$this->output2('v_dashboard');
	}

	/*
	* get_clster_ajax
	* เรียกข้อมูลของมกุล
	* @input 	เรียกข้อมูลของมกุล
	* @output 	ข้อมูลมกุล
    * @Author 	62160011 Supawit Niramonpanich
	* @Create Date 2565-03-08
	*/
	public function get_cluster_ajax(){
		$this->load->model('M_cluster','vsc');
		$data['json_cluster'] = $this->vsc->get_cluster_all()->result();
		$data['json_message'] = 'success : get_cluster_ajax';
		
		echo json_encode($data);
	}

	public function buy_item_ajax() {
		$this->load->model('M_item_list', 'item');
		$this->item->item_id = $this->input->post('item_id');
		$this->item->item_num = $this->input->post('item_num') -1;

		// $this->activity->activity_cluster_status = $this->input->post('activity_status');
		// $this->activity->update_user = 1;
		// $this->activity->date_update = date("Y-m-d");

        $this->item->change_num_item();
        $data['message'] = 'Success';

        echo json_encode($data);
    }



}