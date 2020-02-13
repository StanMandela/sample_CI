<?php
class Test extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

	}

	public function index() {
		$this->load->view('test');
	}

	public function hello() {
		$this->load->view('hello');
	}

	public function addition(){
		echo "timeless stories";
	}
//	public  function model()
//	{
//		$this->load->model('User_model');
//		$data = array(
//			'email' => ‘smstan8@gmail.com’,
//			'password' => ‘12345’,
//			'confirm_password' => ‘12345’
//		);
//		$this->db->insert("stud", $data);
//	}


}

