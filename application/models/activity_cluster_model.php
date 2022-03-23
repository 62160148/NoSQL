<?php
defined('BASEPATH') or exit('No direct script access allowed');

// include_once 'CRS_model.php';
require_once dirname(__FILE__) . '/../SRS_model.php';
class activity_cluster_model extends SRS_model
{


	function construct()
	{
		parent::__construct();
	}



    public function get_cluster_by_id($cluster_id)
	{
		$sql = "SELECT *
        FROM {$this->db_name}.scs_activity_cluster  ";
        // LEFT JOIN {$this->db_name}.scs_cluster
        // ON scs_cluster.cluster_id = scs_activity_cluster.activity_cluster_cluster_id
        // LEFT JOIN {$this->db_name}.scs_activity
        // ON scs_cluster.activity_id = scs_activity_cluster.activity_cluster_activity_id
        // WHERE activity_cluster_activity_id = $cluster_id";
        $query = $this->db->query($sql);
		return $query;
	}



}