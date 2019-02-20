<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admincontrol extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Getcontents');
		$this->load->model('Getlinks');
		$this->load->model('Getdata');
		$this->load->helper('form');
		$this->load->database();
	}

	public function index() {
		$data['links'] = $this->Getlinks->shownavs();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar',$data);
		$this->load->view('backend/home');
		$this->load->view('backend/template/footer');
	}

	public function sidebarlinks() {
		$data['contents'] = $this->Getcontents->getsecdata($content_id);
	}

	    public function pages()
    {
        $page_id = $this->uri->segment(3);
        $cnt_id  = $this->uri->segment(4);
        $data['links'] = $this->Getlinks->shownavs();
        $data['pagedata'] = $this->Getdata->getpagecontents($page_id);
        $data['pagetitles'] = $this->Getdata->pagename($page_id);
        $data['sections'] = $this->Getdata->getsections($page_id);
        $this->load->view('backend/template/header');
        $this->load->view('backend/template/sidebar',$data);
        $this->load->view('backend/dashboard',$data);
        $this->load->view('backend/template/footer');
    }

    public function updatedata() {
    	$section_id = $this->uri->segment(3);
    	$post_data = $this->input->post('myeditor');
    	$this->Getdata->updatecontent($section_id,$post_data);
    	
    	redirect('Admincontrol');
    }
}