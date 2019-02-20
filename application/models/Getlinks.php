<?php

/**
 * 
 */
class Getlinks extends CI_Model
{
	
	function shownavs()
	{
		$query = $this->db->get('pages');
		return $query->result();
	}
}