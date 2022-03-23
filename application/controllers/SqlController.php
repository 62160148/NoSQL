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
}