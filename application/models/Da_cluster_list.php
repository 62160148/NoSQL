<?php
include_once("scs_model.php");

class Da_cluster_list extends scs_model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert()
	{
		$sql = "INSERT INTO scs_database.scs_item(item_name,item_price,item_num) 
                VALUES (?,?,?)";
		$this->db->query($sql, array($this->item_name, $this->item_price, $this->item_num));
	}
	function update()
	{
		$sql = " UPDATE scs_database.scs_item SET item_name=?,item_price=?,item_num=? WHERE item_id=?;";
		$this->db->query($sql, array($this->item_name, $this->item_price, $this->item_num, $this->item_id));
	}
	public function delete()
	{
		$sql =
		"DELETE FROM scs_database.scs_item 
            WHERE item_id=?";
		$this->db->query($sql, array($this->item_id));
	}
}
