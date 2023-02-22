<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Model {

	var $table = 'user';
	var $column_order = array(null, 'name','jns_keanggotaan', 'provinsi'); //set column field database for datatable orderable
	var $column_search = array('name','jns_keanggotaan', 'provinsi'); //set column field database for datatable searchable 
	var $order = array('id' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		//add custom filter here
		if($this->input->post('name'))
		{
			$this->db->where('name', $this->input->post('name'));
		}
		if($this->input->post('jns_keanggotaan'))
		{
			$this->db->like('jns_keanggotaan', $this->input->post('jns_keanggotaan'));
		}
		if($this->input->post('provinsi'))
		{
			$this->db->like('provinsi', $this->input->post('provinsi'));
		}

		// if($this->input->post(''))
		// {
		// 	$this->db->like('address', $this->input->post('address'));
		// }

		$this->db->from($this->table);
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_list_provinsies()
	{
		$this->db->select('provinsi');
		$this->db->from($this->table);
		$this->db->order_by('provinsi','asc');
		$query = $this->db->get();
		$result = $query->result();

		$provinsies = array();
		foreach ($result as $row) 
		{
			$provinsies[] = $row->provinsi;
		}
		return $provinsies;
	}

}
