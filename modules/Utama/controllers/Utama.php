 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
//   Document   : Chome-uppm
//   Created on : 15-Mar-2016, 13:29:06
//   Author     : Dendi
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Utama extends MX_Controller {

    function __construct() 
       {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }



    function index(){
        $data['murl'] = $this->murl;
        $data['title'] = "Polban - Home Page";
        $data['menu'] = "Home";
        $data['query'] = $this->Moap->table_limit('berita',4);
        $this->load->view('vhome',$data);
    }

    function profile(){
        $data['murl'] = $this->murl;
        $data['menu'] = "Home";
        $data['title'] = "Polban - Profile Page Home";
        $data['header'] = "Profile UPPM Polban";
        $data['query'] = $this->Moap->table('berita');
        $this->load->view('vprofile',$data);
    }

     function info_terbaru(){
        $data['murl'] = $this->murl;
        $data['menu'] = "Home";
        $data['header'] = "Info Terbaru";
        $data['title'] = "Polban - Info Terbaru Page";
        $data['recent'] =  $this->Moap->table('berita order by rand()');
        $data['query'] = $this->Moap->table('berita');
        $this->load->view('vinfo_terbaru',$data);
    }

    public function header(){

        $data['murl'] = $this->murl;
        $this->load->view('vheader',$data);
    }
    
    public function footer(){

        $data['murl'] = $this->murl;
        $this->load->view('vfooter',$data);

    }


}


?>
