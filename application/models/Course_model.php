<?php

	class Course_model extends CI_Model
	{
		public function __construct(){
			$this->load->database();
		}

		public function create(){
			$data = array(
				'c_name' => $this->input->post('c_name'),
				'c_section' => $this->input->post('c_section'),
				'c_code' => $this->input->post('c_code'),
				'c_sched' => $this->input->post('c_sched'),
				'c_quiz' => $this->input->post('c_quiz'),
				'c_ass' => $this->input->post('c_ass'),
				'c_pro' => $this->input->post('c_pro'),
				'c_act' => $this->input->post('c_act'),
				'c_pre' => $this->input->post('c_pre')
			);

			return $this->db->insert('course', $data);
		}

		public function get($c_id = FALSE)
		{
			if ($c_id === FALSE) {
				$query = $this->db->get('course');
				return $query->result_array();
			}

			$this->db->where('c_id', $c_id);
			$result = $this->db->get('course');
			return $result->row_array();
		}
	}