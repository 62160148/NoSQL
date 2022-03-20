<?php
/*
* scs_model
* -
* @author JIRAYUT SAIFAH
* @Create Date 2565-3-20
*/ ?>
<?php
class scs_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->scs = $this->load->database('scs', TRUE);
	}
}