<?php


class SignUp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','um');
	}
	public function index() {

		$this->load->view('signUp');
	}
	public function signup(){
		$data=$this->um->signup_model('27','Pasto');
		//$this->um->signup('34','Daisy');
	}
}
