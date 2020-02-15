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
		//$this->um->updateDetails('95','fridah');
		//$this->um->deleteDetails('45'); /** function to delete record in the database */
		$data=$this->um->getDetails();

		$this->load->view('test',$data);
		//$this->load->view('test');
	}

	public function hello() {
		$this->load->view('hello');
	}

	public function updateDetails(){
		$this->um->updateDetails('45','fridah');
	}

	public function signup(){
		$this->um->signup('34','load');
	}

	public function getDetails(){

		$data=$this->um->getDetails();
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

