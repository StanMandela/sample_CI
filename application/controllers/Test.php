<?php
class Test extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','um');
	}

	public function index() {

		$this->um->signup_model('11','Daisy');
		/**
		this UpdateDetails function maps */
		//$this->um->updateDetails('95','fridah');
		//$this->um->deleteDetails('45'); /** function to delete record in the database */
		//$data=$this->um->getDetails();

		//$this->load->view('test',$data);
		//$this->load->view('test');
	}

	public function hello() {
		$this->load->view('hello');
	}

	public function updateDetails(){
		$this->um->updateDetails('45','fridah');
	}

	public function signup(){
		$data=$this->um->signup_model('27','Pasto');
		//$this->um->signup('34','Daisy');
	}

	public function getDetails(){

		$data=$this->um->getDetails();
		$this->load->view('test',$data);
	}



}

