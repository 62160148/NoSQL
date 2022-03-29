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

	public function output_login($view, $data = null)
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
		$this->load->model('M_cluster_list', 'cls');
		$data['arr_cls'] = $this->cls->get_cluster($_id)->result();
		// print_r($data);
		$this->output('v_cluster_detail', $data);
	}

	function show_login()
	{
		$data['users'] = $this->userModel->get_user_list();
		$this->output_login('v_login', $data);
	}

	function check_login()
	{
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$data['users'] = $this->userModel->get_user_list();

		if ($data['users']) {
			foreach ($data['users'] as $user) {
				// echo $user->username;
				// echo $user->password;
				// echo '<br>';
				if ($user->username == $username && $user->password == $password) {
					if ($user->role == 1) {
						redirect('SqlController/show_dashboard', 'refresh');
					} else if ($user->role == 2) {
						redirect('SqlController/show_dashboard', 'refresh');
					} else if ($user->role == 3) {
						redirect('UserController/show_item_manage', 'refresh');
					}
				}
				// } else {
				// 	$message = "invalid user !!";
				// 	echo "<script type='text/javascript'>alert('$message');</script>";
				// 	redirect('UserController/show_login', 'refresh');
				// }
			}
		}
	}

	public function show_user_home()
	{ //show home
		$data['users'] = $this->userModel->get_user_list();
		// print_r($data['users']);
		$temp = $data['users'];
		$this->session->set_userdata('UsID', $temp->_id);
		$this->session->set_userdata('UsFullName', $temp->fname);
		$this->session->set_userdata('UsLastName', $temp->lname);
		$this->session->set_userdata('Usrole', $temp->role);
		$this->check_role();
	} //end show_user_home

	public function login()
	{ //login for user
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$userlogin = $this->userModel->check_login($username, $password);
		if (count($userlogin) == 1) {
			$data = $userlogin;
			echo json_encode($data);
		} else {
			$data = [];
			echo json_encode($data);
		}
	} //end login

	public function check_role()
	{ // check role
		if (!empty($this->session->userdata('UsID'))) {
			if ($_SESSION['Usrole'] == 1) {
				redirect('SqlController/show_activity_manage', 'refresh');
			} else if ($_SESSION['Usrole'] == 2) {
				redirect('SqlController/show_activity_manage', 'refresh');
			} else if ($_SESSION['Usrole'] == 3) {
				redirect('UserController/show_cluster_checklist', 'refresh');
			}
		}
		// if
		else {
			redirect('UserController/show_login', 'refresh');
		}
		// else
	} //end check_role

	public function logout()
	{ //logout to user login page
		$this->session->unset_userdata('UsID');
		$this->session->unset_userdata('UsFullName');
		$this->session->unset_userdata('UsLastName');
		redirect('UserController/show_login', 'refresh');
	} //end logout

	function show_item_manage()
	{
		$this->load->model('M_item_list', 'item');
		$data['arr_item'] = $this->item->get_item_all()->result();
		$this->output('v_item_manage', $data);
	}

	public function output2($view, $data = null)
	{
		$this->load->view('template/header');
		$this->load->view('template/javascript');
		// $this->load->view('template/crs_template/crs_css');
		// $this->load->view('template/crs_template/crs_js');
		$this->load->view('template/sidebar_member');
		$this->load->view($view, $data);
		$this->load->view('template/footer');
	}
}
