<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MX_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->murl = '/modules/' . $this->uri->segment(1) . '/';
        $this->load->library('session');
    }

    public function index() {
        redirect('Mahasiswa/main');
    }

    public function posting() {
        $data['murl'] = $this->murl;
        $data['title'] = "Posting Berita";
        $data['query'] = $this->Moap->table('berita');
        $this->load->view('vberita', $data);
    }
    
    public function action_posting() {
        //Moap config url
        $data['murl'] = $this->murl;
        
        //config upload
        $config['upload_path'] = './upload/berita';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '100024';
        $config['max_height']  = '76800';

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('gambar_berita'))
          {
              
          $error = array('error' => $this->upload->display_errors());
          redirect('Berita/posting',$error);
          
          }
          else
          {
            //upload 
            $data = $this->upload->data();
              
            //array insert
           $post = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar_berita' => $data['file_name']
            );

            //query Moap Insert
            $this->Moap->insert('berita',$post);

            $this->session->set_flashdata('message', 'Posting Berita Successfuly !!');
            redirect('Berita/posting');
               
          }   

    }


    public function delete_berita($id = "")
        {
            # code...
            $where = array('id' => $id);
            $this->Moap->delete('berita',$where);

        }    
    

}
