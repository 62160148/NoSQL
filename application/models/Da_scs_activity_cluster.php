<?php
include_once("scs_model.php");

class Da_scs_activity_cluster extends scs_model
{

	function __construct()
	{
		parent::__construct();
	}

	public function change_status() {
		$sql = "UPDATE scs_database.scs_activity_cluster
        SET activity_cluster_status = ?,
		date_update = ?,
		update_user = ?
        WHERE activity_cluster_id = ?";

		$this->db->query($sql, array($this->activity_cluster_status,$this->date_update,$this->update_user, $this->activity_cluster_id));
	}

	public function insert()
	{
		$sql = "INSERT INTO scs_database.scs_activity_cluster(activity_cluster_cluster_id,activity_cluster_activity_id,activity_cluster_status,activity_cluster_day,activity_cluster_sprint) 
                VALUES (?,?,?,?,?)";
		$this->db->query($sql, array($this->activity_cluster_cluster_id, $this->activity_cluster_activity_id, $this->activity_cluster_status, $this->	activity_cluster_day, $this->activity_cluster_sprint));
	}



}