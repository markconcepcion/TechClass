<?php
	/**
	* 
	*/
	class Activity_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_act_id()
		{
			$this->db->select("MAX(act_id) as maxid");	
			$this->db->from('activity');
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_act_count($act_cid)
		{
			$this->db->select("COUNT(*) as maxid");	
			$this->db->from('activity');
			$this->db->where('act_cid', $act_cid);
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_act_total($act_cid)
		{
			$this->db->select("SUM(act_items) as total_score");	
			$this->db->from('activity');
			$this->db->where('act_cid', $act_cid);
			$query = $this->db->get();
			return $query->row()->total_score;
		}



		public function add_act_score()
		{
			$stud_id = $this->input->post('act_stud[]');
			$act_id = $this->input->post('act_id[]');
			$score_id = $this->input->post('act_score[]');

			$data = array();

			for ($i=0; $i < count($stud_id); $i++) {
			    $data[] = array(
			    	'acs_sid' => $stud_id[$i],
					'acs_acid' => $act_id[$i],
					'acs_score' => $score_id[$i]
			    );
			}
			
			return $this->db->insert_batch('act_score', $data);
		}

		public function add_act($act_cid)
		{
			$data = array(
				'act_items' => $this->input->post('act_items'),
				'act_cid' => $act_cid
			);
			return $this->db->insert('activity', $data);
		}

		public function get_act_scores($acs_id = FALSE)
		{
			if ($acs_id === FALSE) {
				$query = $this->db->get('act_score');
				return $query->result_array();
			}

			$this->db->where('acs_id', $acs_id);
			$result = $this->db->get('act_score');
			return $result->row_array();
		}

		public function get_act($act_cid)
		{
			if ($act_cid === FALSE) {
				$query = $this->db->get('activity');
				return $query->result_array();
			}

			$this->db->where('act_cid', $act_cid);
			$result = $this->db->get('activity');
			return $result->row_array();
		}
	}