<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

	
	var $table = "books";

	public function book_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	

}

/* End of file Book_model.php */
/* Location: ./application/models/Book_model.php */