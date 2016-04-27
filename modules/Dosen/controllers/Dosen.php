<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends MX_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->murl = '/modules/' . $this->uri->segment(1) . '/';
    }

    public function index() {
        redirect('Dosen/main');
    }

    public function main() {
        $data['murl'] = $this->murl;
        $this->load->view('vdosen', $data);
    }

    public function penelitian_dosen () {
        $data['murl'] = $this->murl;
        $this->load->view('vpenelitian_dosen', $data);
//        $this->load->view('vpenelitian_dosen', $data);
    }

     public function detail_tab() {
        $data['murl'] = $this->murl;
        $this->load->view('vtab', $data);
    }

}
