<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('book_model');
	}

	public function index()
	{
		$this->load->view('book_view');
	}

	public function book_add()
	{
		$data = array(
			'book_isbn' => $this->input->post('book_isbn'),
			'book_title' => $this->input->post('book_title'),
			'book_author' => $this->input->post('book_author'),
			'book_category' => $this->input->post('book_category')
		);

		$insert = $this->book_model->book_add($data);
		echo json_encode(array("status"=>true));
	}

}

/* End of file Book.php */
/* Location: ./application/controllers/Book.php */