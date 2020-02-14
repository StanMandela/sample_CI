<?php
class Test extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','um');
	}

	public function index() {

		//$this->um->signup('34','load');
		/**
		this UpdateDetails function maps */
		//$this->um->updateDetails('45','fridah');
		//$this->um->deleteDetails('45'); /** function to delete record in the database */
		$data=$this->um->getDetails();
		print_r($data);
		$this->load->view('testdata',$data);
		$this->load->view('records',$data);
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

