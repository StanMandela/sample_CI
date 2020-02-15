<?php


class User_model extends CI_Model
{
	Public function __construct() {
		parent::__construct();

		$this->load->database();

	}

	public function signup($no,$name){
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
	public  function getDetails(){
		$query = $this->db->get("stud");

		$data['records'] = $query->result();
		 /** when data is loaded to the view its all under one array in this case $data,
		 * so to la
		 * ad individual data name them using different keys as shown such as records/testdata and they will load successfully
		 */
		$data['test'] = $query->result();

		return $data;
	}

}

