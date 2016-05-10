<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Skema_penelitian extends MX_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->murl = '/modules/' . $this->uri->segment(1) . '/';
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['murl'] = $this->murl;
        $data['skema'] = $this->Moap->table('skema');
        //query join
            $this->db->select('skema.nama,skema_detil.uraian,skema_detil.bobot,skema_detil.id');
            $this->db->from('skema_detil');
            $this->db->join('skema', 'skema_detil.skema_fk = skema.id');
        $data['join'] = $this->db->get()->result_array();

        $this->load->view('vskema_penelitian',$data);
    }

    public function action_skema_detail(){
    $data = array(
            'skema_fk' => $this->input->post('skema'),
            'uraian' => $this->input->post('uraian'),
            'bobot' => $this->input->post('skema')
            );

    $this->Moap->insert('skema_detil',$data);
    $this->session->set_flashdata('message','Skema Penelitian Telah Berhasil Di Simpan.');
    redirect('Skema_penelitian');

    }

    public function hapus_skema_penelitian($id){
    $where = array('id' => $id);
    $this->db->delete('skema_detil',$where);
    $this->session->set_flashdata('message','Skema Penelitian Telah Berhasil Di Hapus.');
    redirect('Skema_penelitian');
    }
    
    public function edit_skema_penelitian($id){
    $data['murl'] = $this->murl;
    //$where = array('id' => $id);
    $data['skema'] = $this->Moap->table('skema');
    $data['query'] = $this->db->get_where('skema_detil', array('id' => $id))->result_array();
    
    $this->load->view('vedit_skema_penelitian',$data);
        
    }

   public function action_edit_skema_detail(){
    $data = array(
            'skema_fk' => $this->input->post('skema'),
            'uraian' => $this->input->post('uraian'),
            'bobot' => $this->input->post('skema')
            );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('skema_detil', $data);

    $this->session->set_flashdata('message','Skema Penelitian Telah Berhasil Di Ubah.');
    redirect('Skema_penelitian');

    }



    public function skema(){
    $data['murl'] = $this->murl;
    $data['skema'] = $this->Moap->table('skema');

    $this->load->view('vskema',$data);

    }

    public function action_skema(){

    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    $data = array('nama' => $this->input->post('nama'));

    if ($this->form_validation->run() == FALSE)
    {
    $data['murl'] = $this->murl;
    $data['skema'] = $this->Moap->table('skema');

    $this->load->view('vskema',$data);
    }
    else
    {
    $this->Moap->insert('skema',$data);
    $this->session->set_flashdata('message','Tambah Skema Telah Berhasil Di Simpan.');
    redirect('Skema_penelitian/skema');
    }


    
    

    }

    public function hapus_skema($id){
    $where = array('id' => $id);
    $this->db->delete('skema',$where);
    $this->session->set_flashdata('message','Skema Telah Berhasil Di Hapus.');
    redirect('Skema_penelitian/skema');
    }

    public function edit_skema($id){
    $data['murl'] = $this->murl;
    //$where = array('id' => $id);
    $data['query'] = $this->db->get_where('skema', array('id' => $id))->result_array();
    
    $this->load->view('vskema_edit',$data);
        
    }

   public function action_edit_skema(){
    $data = array('nama' => $this->input->post('nama'));
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('skema', $data);

    $this->session->set_flashdata('message','Skema Telah Berhasil Di Ubah.');
    redirect('Skema_penelitian/skema');

    }

}
