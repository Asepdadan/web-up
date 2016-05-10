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
        redirect('Berita/posting');
    }

    public function posting() {
        $data['murl'] = $this->murl;
        $data['title'] = "Posting Berita";
        $data['query'] = $this->db->get('berita')->result_array();

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
            //array insert
           $post = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi')
            );

            //query Moap Insert
            $this->Moap->insert('berita',$post);

            $this->session->set_flashdata('message', 'Posting Berita Successfuly Tanpa Gambar tersimpan!!');
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
        $data= $this->db->query("select * from berita where id = $id")->result_array();
        //hapus gambar di foler
        unlink('upload/berita/'.$data[0]['gambar_berita']);

            $hapus = $this->Moap->delete('berita','id',$id);
            
                $this->session->set_flashdata('message', 'Hapus Berita Successfuly !!');
                redirect('Berita/posting');

        }   


    public function show_edit($id = ""){
        $data['murl'] = $this->murl;
        $data['title'] = "Page - Edit Berita";
        $data['form_judul'] = "Form edit berita";
        $data['query'] = $this->db->query("select * from berita where id = $id")->result_array();
        $this->load->view('vedit_berita',$data);

    } 

    public function edit_berita(){

         //array insert
           $update = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi')
            );

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('berita', $update);

            $this->session->set_flashdata('message', 'Update Berita Successfuly !!');
            redirect('Berita/posting');

    }
    

}
