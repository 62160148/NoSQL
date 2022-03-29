<?php
include_once("Da_cluster.php");

class M_cluster extends Da_cluster
{

	function __construct()
	{
		parent::__construct();
	}

	public function get_cluster_all()
	{
		$sql = "SELECT *
                FROM scs_database.scs_cluster";
		$query = $this->db->query($sql);
		return $query;
	}
}