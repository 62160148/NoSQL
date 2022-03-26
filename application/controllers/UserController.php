<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('UserModel', 'userModel');

	}

	function index()
	{
		$data['users'] = $this->userModel->get_user_list();
		$this->load->view('users', $data);
	}

	public function output($view, $data = null)
	{
		$this->load->view('template/header');
		$this->load->view('template/javascript');
		// $this->load->view('template/crs_template/crs_css');
		// $this->load->view('template/crs_template/crs_js');
		$this->load->view('template/sidebar');
		$this->load->view($view, $data);
		$this->load->view('template/footer');
	}

	public function output_login($view, $data=null)
	{
		$this->load->view('template/header');
		$this->load->view($view, $data);
		$this->load->view('template/javascript');
		$this->load->view('template/footer');
	}

	function show_cluster_checklist($_id)
	{
		$data['cluster_id'] = $_id;
		$this->output('v_cluster_checklist', $data);
	}

	function show_cluster_detail($_id)
	{
		$this->output('v_cluster_detail');
	}

	function show_login()
	{
		$this->output_login('login');
	}
	
	function show_item_manage()
	{
		$this->load->model('M_item_list', 'item');
		$data['arr_item'] = $this->item->get_item_all()->result();
		$this->output('v_item_manage', $data);
	}
}
