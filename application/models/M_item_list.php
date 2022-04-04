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
    public function get_item_by_cluster($cluster_id)
    {
        $sql = "SELECT*
                        
                FROM scs_database.scs_item_cluster  
                LEFT JOIN scs_database.scs_cluster 
   	                ON scs_item_cluster.item_cluster_cluster_id = scs_cluster.cluster_id
				LEFT JOIN scs_database.scs_item 
   	                ON scs_item_cluster.item_cluster_item_id = scs_item.item_id
                WHERE scs_item_cluster.item_cluster_cluster_id = $cluster_id  ";
        $query = $this->db->query($sql);
        return $query;
    }


	
}