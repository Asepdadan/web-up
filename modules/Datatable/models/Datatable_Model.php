<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable_model extends CI_Model { 
	
	var $column = array(
		'customerNumber', 
		'customerName', 
		'contactLastName', 
		'contactFirstName', 
		'phone', 
		'addressLine1', 
		'addressLine2', 
		'city', 
		'state', 
		'postalCode', 
		'country', 
		'salesRepEmployeeNumber', 
		'creditLimit', 
	);
	var $order = array('customerNumber' => 'asc');

	public function __construct()
	{
			// Call the CI_Model constructor
			parent::__construct();  
	}
	
	private function _get_datatables_query()
	{ 	
		$this->db->select(
                    'customerNumber, 
                    customerName, 
                    contactLastName, 
                    contactFirstName, 
                    phone, 
                    addressLine1, 
                    addressLine2, 
                    city, 
                    state, 
                    postalCode, 
                    country, 
                    salesRepEmployeeNumber, 
                    creditLimit'
		);
		
		$this->db->from('customers');
		$i = 0;
	
		foreach ($this->column as $item) 
		{

			if(isset($_POST['search']['value']))
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{

		$this->_get_datatables_query();

		if(isset($_POST['length']))
		{					
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query(); 
		$query = $this->db->get();
		$count = 0;
		foreach($query->result() as $val){
				$count++;
			
		}
		return $count;
	}
	function count_filtered_old()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->_get_datatables_query(); 
		$query = $this->db->get();
		$count = 0;
		foreach($query->result() as $val){
				$count++;
			
		}
		return $count;
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('customerNumber',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('customerNumber', $id);
		$this->db->delete($this->table);
	} 
}
