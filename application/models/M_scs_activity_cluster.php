<?php
include_once("Da_scs_activity_cluster.php");

class M_scs_activity_cluster extends Da_scs_activity_cluster
{

	function __construct()
	{
		parent::__construct();
	}


    public function get_cluster_by_id($cluster_id)
	{
		//extract($_SESSION);
		$sql = "SELECT *
        FROM scs_database.scs_activity_cluster  
		LEFT JOIN scs_database.scs_activity
        ON scs_activity.activity_id = scs_activity_cluster.activity_cluster_activity_id
        LEFT JOIN scs_database.scs_cluster
        ON scs_cluster.cluster_id = scs_activity_cluster.activity_cluster_cluster_id
		LEFT JOIN scs_database.scs_user
        ON scs_user.user_id = scs_activity_cluster.update_user

        WHERE  scs_activity_cluster.activity_cluster_cluster_id = $cluster_id";
        $query = $this->db->query($sql);
		return $query;


	}



}