<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

  
	

    function get_all_rooms()
	{
		$sql = "SELECT 
					roomid as 'Room ID',
					roomname as 'Room Name'
				FROM
					`category`";
					
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	
	
	


  
   
}