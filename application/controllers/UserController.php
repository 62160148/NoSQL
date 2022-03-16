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
    // public function create()
    // {
    //     $this->load->view('user_create');
    // }
    function create()
    {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');

            if ($this->form_validation->run() !== FALSE) {
                $result = $this->userModel->create_user($this->input->post('name'), $this->input->post('email'));
                if ($result === TRUE) {
                    redirect('/');
                } else {
                    $data['error'] = 'Error occurred during updating data';
                    $this->load->view('user_create', $data);
                }
            } else {
                $data['error'] = 'เกิดข้อขัดข้องในการบันทึกข้อมูล กรุณาตรวจสอบ !!!';
                $this->load->view('user_create', $data);
            }
        } else {
            $this->load->view('user_create');
        }
    }

    function update($_id)
    {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');

            if ($this->form_validation->run() !== FALSE) {
                $result = $this->userModel->update_user($_id, $this->input->post('name'), $this->input->post('email'));
                if ($result === TRUE) {
                    redirect('/');
                } else {
                    $data['error'] = 'Error occurred during updating data';
                    $this->load->view('user_update', $data);
                }
            } else {
                $data['error'] = 'เกิดปัญหา กรุณาตรวจสอบข้อมูลที่บันทึก !!!';
                $this->load->view('user_update', $data);
            }
        } else {
            $data['user'] = $this->userModel->get_user($_id);
            $this->load->view('user_update', $data);
        }
    }

    function delete($_id)
    {
        if ($_id) {
            $this->userModel->delete_user($_id);
        }
        redirect('/');
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


    
}
