<?php
include_once("Da_cluster_list.php");

class M_cluster_list extends Da_cluster_list
{

	function __construct()
	{
		parent::__construct();
	}

	public function get_cluster($_id)
	{
		$sql = "SELECT *
                FROM scs_database.scs_user AS user
				JOIN scs_database.scs_role AS user_role
        		ON user.user_role = user_role.role_id
				WHERE user.user_cluster_id = $_id";
		$query = $this->db->query($sql);
		return $query;
	}
}