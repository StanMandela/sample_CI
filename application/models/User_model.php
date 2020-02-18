<?php


class User_model extends CI_Model
{
	Public function __construct() {
		parent::__construct();

		$this->load->database();

	}

	public function signup_model($no,$name){
		$data = array(
			'roll_no'=> $no,
			'name'=>$name
		);

		$this->db->insert("stud", $data);

	}
	/** function to update the db  */
	public function updateDetails($no,$name){

		$data=array(
			'roll_no'=>$no,
			'name'=>$name
		);

		$this->db->set($data);
		$this->db->where("roll_no", $no);
		$this->db->update("stud", $data);

	}
	public function deleteDetails($no){
		$this->db->delete("stud", "roll_no = $no");
	}
	public  function getDetails($email,$password,$confirm_password){
		$this->db->select('ID, email, password');
		$this->db->from('signup_table');
		$this->db->where('email',$email);
		$result =$this->db->get()->row();
		//print_r($result);
		if(empty($result)){
			$data = array(
				'email'=> $email,
				'password'=>password_hash("$password", PASSWORD_DEFAULT)
				//'confirm_password'=>$confirm_password
			);
			//print_r($data);
			$this->db->insert("signup_table", $data);
			return true;
		}else{
			return false;
		}
		//$query = $this->db->get("stud");

		//$data['records'] = $query->result();
		 /** when data is loaded to the view its all under one array in this case $data,
		 * so to la
		 * ad individual data name them using different keys as shown such as records/testdata and they will load successfully
		 */
		//$data['test'] = $query->result();

		//return $data;
	}

}

