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
		// $this->load->view('template/javascript');
		// $this->load->view('template/crs_template/crs_css');
		// $this->load->view('template/crs_template/crs_js');
		$this->load->view($view, $data);
		$this->load->view('template/footer');
	}


    function show_cluster_checklist($_id)
    {
        $this->output('v_cluster_checklist');
    }

    function show_login()
    {
        $this->output('login');
    }
    
}
