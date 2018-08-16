<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

	
	var $table = "books";

	public function book_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	// ambil data dari table
	public function get_all_book($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by('book_id','DESC');

		return $query = $this->db->get();	
	}
	

}

/* End of file Book_model.php */
/* Location: ./application/models/Book_model.php */