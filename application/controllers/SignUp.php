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
//		$data=$this->um->signup_model('27','Pasto');
//		//$this->um->signup('34','Daisy');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		$status = $this->User_model->getDetails($email,$password,$confirm_password);
		print_r($confirm_password);
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
				'message' => $message
			);
			#var_dump($email);
		//	$this->load->view('signUp', $data);
		}


	}

}
