<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            echo "MASUK TEST";
            $data['murl'] = $this->murl;
            $this->load->view('vmain',$data);
	}
        
        public function admin(){
            $data['murl'] = $this->murl;
            $this->load->view('vmain',$data);
        }
        
        public function test(){
            $this->load->view('vmain');
        }
        
        public function modeltest(){
            echo $this->Moap->test();
        }
        
        public function remap($method){
            $rem = FALSE;
            if($method == "right") {$this->right ();$rem=TRUE;}
            if($method == "admin") {$this->admin ();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function right(){
            echo "Welcome to the right place"."<br />";
        }

        public  function guest()
        {
            # code...
            $this->load->view('vmenu_guest');

        }

        public function mahasiswa(){

             $this->load->view('vmenu_mahasiswa');
        }

        public function main(){

             $this->load->view('vmenu_main');
        }
}
