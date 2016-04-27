 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
//   Document   : Chome-uppm
//   Created on : 15-Mar-2016, 13:29:06
//   Author     : Dendi
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends MX_Controller {

    function __construct() 
       {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

    function index(){
        $data['murl'] = $this->murl;
        $this->load->view('vpolban',$data);
    }
    function profil_uppm(){
        $data['murl'] = $this->murl;
        $this->load->view('vprofile_uppm',$data);
    }
    function info(){
        $data['murl'] = $this->murl;
        $this->load->view('vinfo',$data);
    }

    function asep(){
        $data['murl'] = $this->murl;
        $this->load->view('vhome_asep',$data);
    }


}



?>
