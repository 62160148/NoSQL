<?php
/*
* CRS_model
* Model หลักของระบบ
* @Author 	62160336 Woraprat Roekplian
* @Create Date 2564-08-16
*/
defined('BASEPATH') or exit('No direct script access allowed');

class SRS_model extends CI_Model
{

	public $db;
	public $db_name;

	/*
	* __construct
	* construct
	* @Author  62160336 Woraprat Roekplian	
	* @Create  Date 2564-08-16
	*/
	public function __construct()
	{
		$this->db = $this->load->database('default', true);
		$this->db_name = $this->db->database;
	}
}