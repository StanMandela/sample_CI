<?php


class SignUp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','um');
	}
	public function index() {
		$data = array(
			'view'=>'signUp'
		);
		$this->load->view('index', $data);
	}
	public function login() {
		$data = array(
			'view'=>'loggedin_page'
		);
		$this->load->view('index', $data);
	}
	public function signup(){
//		$data=$this->um->signup_model('27','Pasto');
//		//$this->um->signup('34','Daisy');

		$email = $this->input->post('email');
		$email = 'ss@gma.com';
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		$status = $this->User_model->getDetails($email,$password,$confirm_password);
		//print_r($status);
		if ($status == true) {
			//lead to portal logged in

			$this->session->set_userdata('status', 'true');
			//$this->session->set_userdata('email', $userDetails->email);
			//$this->session->set_userdata('lname', $userDetails->lname);

			$this->index();

		} elseif ($status == false) {
			//lead to log in page showing error message
			$message = 'Log in failed!! Incorrect username or password';
			$data = array(
				'message' => $message,
				'view'=>'signUp'
			);
			#var_dump($email);
		$this->load->view('', $data);
		}


	}

}
