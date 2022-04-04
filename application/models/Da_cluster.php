<?php
include_once("scs_model.php");

class Da_cluster extends scs_model
{

	function __construct()
	{
		parent::__construct();
	}

	function update()
	{
		$sql = " UPDATE scs_database.scs_cluster SET cluster_score=? WHERE cluster_id=?;";
		$this->db->query($sql, array($this->cluster_score, $this->cluster_id));
	}



}