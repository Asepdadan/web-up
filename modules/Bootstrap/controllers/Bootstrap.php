<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends CI_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $this->load->view('vmain');
	}
        
        public function Login(){
            $data['murl'] = $this->murl;
            $this->load->view('vlogin',$data);
        }
        
        public function Login2(){
            $data['murl'] = $this->murl;
            $this->load->view('vlogin2',$data);
        }
        
        public function Table(){
            $data['murl'] = $this->murl;
            $this->load->view('vtable',$data);
        }
        
        public function TemplateWeb(){
            $data['murl'] = $this->murl;
            $this->load->view('vtemplate_web',$data);
        }
}
