<?php

/**
 * 
 */
class Frontendata extends CI_Model
{
	
	function Showfrntdata()
	{
		$query = $this->db->query('SELECT * FROM sections WHERE section_id=2');
		return $query->result();
	}
}