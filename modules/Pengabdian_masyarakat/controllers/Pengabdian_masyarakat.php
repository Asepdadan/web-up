 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
//   Document   : Chome-uppm
//   Created on : 15-Mar-2016, 13:29:06
//   Author     : Dendi
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Pengabdian_masyarakat extends MX_Controller {

    function __construct() 
       {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

    function index(){
        $data['murl'] = $this->murl;
        $this->load->view('vprofile_pengabdian_masyarakat',$data);
    }
    
    function profile(){
        $data['murl'] = $this->murl;
        $this->load->view('vprofile_pengabdian_masyarakat',$data);
    }
    function skema(){
        $data['murl'] = $this->murl;
        $this->load->view('vskema_pengabdian_masyarakat',$data);
    }
     function pengaduan(){
        $data['murl'] = $this->murl;
        $this->load->view('vpengaduan',$data);
    }
    


}



?>
