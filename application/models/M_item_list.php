<?php
include_once("Da_item_list.php");

class M_item_list extends Da_item_list
{

	function __construct()
	{
		parent::__construct();
	}

	public function get_item_all()
	{
		$sql = "SELECT *
                FROM scs_database.scs_item";
		$query = $this->db->query($sql);
		return $query;
	}
}