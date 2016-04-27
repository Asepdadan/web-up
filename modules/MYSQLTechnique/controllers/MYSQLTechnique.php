<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MYSQLTechnique extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

	public function index()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vmain',$data);
	}
        
        public function test(){
            $this->load->view('vmain');
        }
        
        public function modeltest(){
            echo $this->Moap->test();
        }
        
        public function remap($method){
            $rem = FALSE;
            if($method == "right") {$this->right ();$rem=TRUE;}
            if($method == "GrabMultiTableJson") {$this->GrabMultiTableJson ();$rem=TRUE;}
            if($method == "GrabMultiTableJsonObject") {$this->GrabMultiTableJsonObject ();$rem=TRUE;}
            if($method == "CreateFormFormDatabase") {$this->CreateFormFormDatabase();$rem=TRUE;}
            if($method == "GetColumnFormDatabase") {$this->GetColumnFormDatabase();$rem=TRUE;}
            if($method == "GetColumnFormDatabaseToCSV") {$this->GetColumnFormDatabaseToCSV();$rem=TRUE;}
            if(!$rem)echo "Method unknown"; 
        }
        
        public function GetColumnFormDatabase(){
            $data['data'] = $this->Moap->get("SHOW COLUMNS FROM customers");
            $data['murl'] = $this->murl;
            $this->load->view('vcheckbox',$data);
        }
        
        public function GetColumnFormDatabaseToCSV(){
            $data['data'] = $this->Moap->get("SHOW COLUMNS FROM customers");
            $data['murl'] = $this->murl;
            $this->load->view('vcheckbox_csv',$data);
        }
        
        public function CreateCSV(){
            $ntv = $this->input->post('query');
            if($ntv != '-') {
                $this->Moap->csv($ntv,"Program Arahan");
            }else{
                echo "Anda belum memilih apapun <br /> <a href='".  base_url('MYSQLTechnique/GetColumnFormDatabaseToCSV')."'> <button> <<< KEMBALI</button></a>";
            } 
        }
        
        public function right(){
            echo "Welcome to the right place"."<br />";
        }
        
        public function GrabMultiTableJson(){
            $this->load->model('MMultiTable');
            echo $this->MMultiTable->main();
            echo "Testing masuk grab";
        }
        
         public function GrabMultiTableJsonObject(){
            $this->load->model('MMultiTable');
            echo $this->MMultiTable->object();
        }
        
        public function CreateFormFormDatabase(){
            $result = $this->Moap->get("SHOW COLUMNS FROM customers");
            if (!$result) {
                echo 'Could not run query: ' . mysql_error();
                exit;
            }
            foreach ($result as $row) {
                print_r($row);
                echo "<br />";
            }
        }
}
