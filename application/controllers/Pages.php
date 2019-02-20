<?php
class Pages extends CI_Controller {

    public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->database();
           $this->load->model('Getdata');
    }



    public function index()
  {
       $page_id = $this->uri->segment(3);


        $data['pagedata'] = $this->Getdata->getpagecontents($page_id);

        $this->load->view('backend/template/header');
        $this->load->view('backend/dashboard',$data);
        $this->load->view('backend/template/footer');
  }
}