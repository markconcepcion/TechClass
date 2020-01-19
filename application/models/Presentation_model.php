<?php
	/**
	* 
	*/
	class Presentation_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_pre_id()
		{
			$this->db->select("MAX(pre_id) as maxid");	
			$this->db->from('presentation');
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_pre_count($pre_cid)
		{
			$this->db->select("COUNT(*) as maxid");	
			$this->db->from('presentation');
			$this->db->where('pre_cid', $pre_cid);
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_pre_total($pre_cid)
		{
			$this->db->select("SUM(pre_items) as total_score");	
			$this->db->from('presentation');
			$this->db->where('pre_cid', $pre_cid);
			$query = $this->db->get();
			return $query->row()->total_score;
		}



		public function add_pre_score()
		{
			$stud_id = $this->input->post('pre_stud[]');
			$pre_id = $this->input->post('pre_id[]');
			$score_id = $this->input->post('pre_score[]');

			$data = array();

			for ($i=0; $i < count($stud_id); $i++) {
			    $data[] = array(
			    	'pres_sid' => $stud_id[$i],
					'pres_pid' => $pre_id[$i],
					'pres_score' => $score_id[$i]
			    );
			}
			
			return $this->db->insert_batch('pre_score', $data);
		}

		public function add_pre($pre_cid)
		{
			$data = array(
				'pre_items' => $this->input->post('pre_items'),
				'pre_cid' => $pre_cid
			);
			return $this->db->insert('presentation', $data);
		}

		public function get_pre_scores($pres_id = FALSE)
		{
			if ($pres_id === FALSE) {
				$query = $this->db->get('pre_score');
				return $query->result_array();
			}

			$this->db->where('pres_id', $pres_id);
			$result = $this->db->get('pre_score');
			return $result->row_array();
		}

		public function get_pre($pre_cid)
		{
			if ($pre_cid === FALSE) {
				$query = $this->db->get('presentation');
				return $query->result_array();
			}

			$this->db->where('pre_cid', $pre_cid);
			$result = $this->db->get('presentation');
			return $result->row_array();
		}
	}