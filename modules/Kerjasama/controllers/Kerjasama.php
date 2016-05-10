 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
//   Document   : Chome-uppm
//   Created on : 15-Mar-2016, 13:29:06
//   Author     : Dendi
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Kerjasama extends MX_Controller {

    function __construct() 
       {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }



    function index(){
        $data['murl'] = $this->murl;
        $data['title'] = "Polban - Kerjasama Page";
        $data['menu'] = "Kerjasama";
        $data['header'] = "Kerjasama";
        $data['query'] = $this->Moap->table('berita');
        $this->load->view('vtahunkerjasama',$data);
    }

   


}


?>
