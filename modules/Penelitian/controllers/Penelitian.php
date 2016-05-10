<?php

/*
//   Document   : penelitian
//   Created on : 19-Nov-2015, 09:37:27
//   Author     : Dendi
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Penelitian extends MX_Controller {

    function __construct()
       {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

    function index(){
        $data['murl'] = $this->murl;
        $data['menu'] = "Penelitian";
          $data['header'] = "Profile Penelitian Polban";
        $this->load->view('vprofile_penelitian',$data);
    }
    function skema_penelitian(){
        $data['murl'] = $this->murl;
        $data['menu'] = "Penelitian";
        $data['title'] = "Polban - Skema Penelitian Page";
        $data['header'] = "Skema Penelitian";
        $this->load->view('vskema',$data);
    }

    function profile_penelitian(){
        $data['murl'] = $this->murl;
        $this->load->view('vprofile_peneliti',$data);
    }


    //template baru
    function profile()
    {
        # code...
    $data['murl'] = $this->murl;
    $data['menu'] = "Penelitian";
    $data['title'] = "Polban - Profile Penelitian Page";
    $data['header'] = "Profile Penelitian";
     $this->load->view('vprofile_penelitian',$data);   

    }

}


?>
