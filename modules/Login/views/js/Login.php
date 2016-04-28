<?php

/*
//   Document   : Login
//   Created on : 19-Apr-2016, 12:29:23
//   Author     : Dendi
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends MX_Controller {

    function __construct()
       {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

    function index(){
        $data['murl'] = $this->murl;
        $this->load->view('vlogins',$data);
    }

}


?>
