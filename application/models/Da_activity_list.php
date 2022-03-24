<?php
include_once("scs_model.php");

class Da_activity_list extends scs_model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert()
	{
		$sql = "INSERT INTO scs_database.scs_activity(activity_name,activity_score) 
                VALUES (?,?)";
		$this->db->query($sql, array($this->activity_name, $this->activity_score));
	}
	function update()
	{
		$sql = " UPDATE scs_database.scs_activity SET activity_name=?,activity_score=? WHERE activity_id=?;";
		$this->db->query($sql, array($this->activity_name, $this->activity_score, $this->activity_id));
	}
	public function delete()
	{

		$sql =
			"DELETE FROM scs_database.scs_activity
            WHERE activity_id=?";
		$this->db->query($sql, array($this->activity_id));
	}
}