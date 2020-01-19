<?php
	/**
	* 
	*/
	class Assignment_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_ass_id()
		{
			$this->db->select("MAX(ass_id) as maxid");	
			$this->db->from('assignment');
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_ass_count($ass_cid)
		{
			$this->db->select("COUNT(*) as maxid");	
			$this->db->from('assignment');
			$this->db->where('ass_cid', $ass_cid);
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_ass_total($ass_cid)
		{
			$this->db->select("SUM(ass_items) as total_score");	
			$this->db->from('assignment');
			$this->db->where('ass_cid', $ass_cid);
			$query = $this->db->get();
			return $query->row()->total_score;
		}

		public function add_ass_score()
		{
			$stud_id = $this->input->post('ass_stud[]');
			$ass_id = $this->input->post('ass_id[]');
			$score_id = $this->input->post('ass_score[]');

			$data = array();

			for ($i=0; $i < count($stud_id); $i++) {
			    $data[] = array(
			    	'as_sid' => $stud_id[$i],
					'as_aid' => $ass_id[$i],
					'as_score' => $score_id[$i]
			    );
			}
			
			return $this->db->insert_batch('assign_score', $data);
		}

		public function add_ass($ass_cid)
		{
			$data = array(
				'ass_items' => $this->input->post('ass_items'),
				'ass_cid' => $ass_cid
			);
			return $this->db->insert('assignment', $data);
		}

		public function get_ass_scores($as_id = FALSE)
		{
			if ($as_id === FALSE) {
				$query = $this->db->get('assign_score');
				return $query->result_array();
			}

			$this->db->where('as_id', $as_id);
			$result = $this->db->get('assign_score');
			return $result->row_array();
		}

		public function get_ass($ass_cid)
		{
			if ($ass_cid === FALSE) {
				$query = $this->db->get('assignment');
				return $query->result_array();
			}

			$this->db->where('ass_cid', $ass_cid);
			$result = $this->db->get('assignment');
			return $result->row_array();
		}
	}		