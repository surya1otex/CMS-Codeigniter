<?php
/**
 * 
 */
class Getcontents extends CI_Model
{
	
	public function getsecdata() {
		$query = $this->db->get('sections');
		return $query->result();
	}
}