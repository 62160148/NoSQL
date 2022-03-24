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
	function delete($id)
	{
		$this->load->model('Da_item_list', 'item');
		$this->item->item_id = $id;
		$this->item->delete();
		redirect('SqlController/show_item_manage');
	}
}