<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->murl = '/modules/' . $this->uri->segment(1) . '/';
    }

    public function index() {
        redirect('Dashboard/main');
    }

    public function main() {
        $data['murl'] = $this->murl;
        $data['konten'] = "vmain";
        $this->load->view('vdashboard_internal', $data);
    }
    
    
    public function remap($method){
        $rem = FALSE;
        if($method == "right") {$this->right ();$rem=TRUE;}
        if($method == "tambahAkses") {$this->tambahAkses ();$rem=TRUE;}
        if(!$rem)echo "Method unknown"; 
    }

    public function right(){
        echo "Welcome to the right place"."<br />";
    }
    
    public function tambahAkses(){
        $data['murl'] = $this->murl;
        $data['konten'] = "Akses/tambahAkses";
        $this->load->view('vdashboard', $data);
    }
}
