<?php
/**
* 
*/
class Record_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function add_stud($s_cid)
	{
		$data = array(
			's_fname' => $this->input->post('s_fname'), 
			's_mname' => $this->input->post('s_mname'), 
			's_lname' => $this->input->post('s_lname'), 
			's_gender' => $this->input->post('s_gender'),
			's_cid' => $s_cid
		);
		return $this->db->insert('student', $data);
	}

	public function get_stud($s_cid)
	{
		$this->db->order_by('s_lname', 'ASC');
		$this->db->select('student.*');
		$this->db->from('student');
		$this->db->where('s_cid', $s_cid);
		$query = $this->db->get();
		$data_arr = $query->result();
		return $data_arr;
	}

	public function update_stud($s_id)
	{
		$data = array(
				's_fname' => $this->input->post('s_fname'), 
				's_mname' => $this->input->post('s_mname'), 
				's_lname' => $this->input->post('s_lname'), 
				's_gender' => $this->input->post('s_gender'),
			);

			$this->db->where('s_id', $s_id);
			return $this->db->update('student', $data);	
	}
}