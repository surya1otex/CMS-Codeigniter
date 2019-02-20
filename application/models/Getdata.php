<?php

/**
 * 
 */
class Getdata extends CI_Controller
{
	
	function getpagecontents($page_id)
	{
		$query = $this->db->query('SELECT * FROM sections WHERE page_id='.$page_id);
		return $query->result();
	}

	function pagename($page_id) {
		$query = $this->db->query('SELECT * FROM pages WHERE page_id='.$page_id);
		return $query->result();
	}

	function updatecontent($section_id,$post_data) {
		$this->db->set('content_data',$post_data);
        $this->db->where('section_id',$section_id);
        $this->db->update('sections');

	}

	function getsections($page_id) {
		$query = $this->db->query('SELECT * FROM sections WHERE page_id='.$page_id);
		return $query->result();
	}
}  