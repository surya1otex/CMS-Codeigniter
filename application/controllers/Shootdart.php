<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shootdart extends CI_Controller {

    public function __construct() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('Frontendata');
         $this->load->database();
    }

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('frontend/home');
		$this->load->view('templates/footer');
	}
	public function Seo() {
		$data['page_contents'] = $this->Frontendata->Showfrntdata();
		$this->load->view('templates/header');
		$this->load->view('frontend/seo',$data);
		$this->load->view('templates/footer');
	}
}
