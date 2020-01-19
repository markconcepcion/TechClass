<?php
	/**
	* 
	*/
	class Quiz_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_quiz_id()
		{
			$this->db->select("MAX(q_id) as maxid");	
			$this->db->from('quiz');
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_quiz_count($q_cid)
		{
			$this->db->select("COUNT(*) as maxid");	
			$this->db->from('quiz');
			$this->db->where('q_cid', $q_cid);
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_quiz_total($q_cid)
		{
			$this->db->select("SUM(q_items) as total_score");	
			$this->db->from('quiz');
			$this->db->where('q_cid', $q_cid);
			$query = $this->db->get();
			return $query->row()->total_score;
		}



		public function add_quiz_score()
		{
			$stud_id = $this->input->post('q_stud[]');
			$quiz_id = $this->input->post('q_id[]');
			$score_id = $this->input->post('q_score[]');

			$data = array();

			for ($i=0; $i < count($stud_id); $i++) {
			    $data[] = array(
			    	'qs_sid' => $stud_id[$i],
					'qs_qid' => $quiz_id[$i],
					'qs_score' => $score_id[$i]
			    );
			}
			
			return $this->db->insert_batch('quiz_score', $data);
		}

		public function add_quiz($q_cid)
		{
			$data = array(
				'q_topic' => $this->input->post('quiz_topic'),
				'q_items' => $this->input->post('q_items'),
				'q_cid' => $q_cid
			);
			return $this->db->insert('quiz', $data);
		}

		public function get_quiz_scores($qs_id = FALSE)
		{
			if ($qs_id === FALSE) {
				$query = $this->db->get('quiz_score');
				return $query->result_array();
			}

			$this->db->where('qs_id', $qs_id);
			$result = $this->db->get('quiz_score');
			return $result->row_array();
		}

		public function get_quiz($q_cid)
		{
			if ($q_cid === FALSE) {
				$query = $this->db->get('quiz');
				return $query->result_array();
			}

			$this->db->where('q_cid', $q_cid);
			$result = $this->db->get('quiz');
			return $result->row_array();
		}

	}