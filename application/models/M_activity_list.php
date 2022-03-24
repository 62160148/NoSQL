<?php
include_once("Da_activity_list.php");

class M_activity_list extends Da_activity_list
{

	function __construct()
	{
		parent::__construct();
	}

	public function	get_activity_all()
	{
		$sql = "SELECT *
                FROM scs_database.scs_activity";
		$query = $this->db->query($sql);
		return $query;
	}
}