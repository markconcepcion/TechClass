<?php
	/**
	* 
	*/
	class Project_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_pro_id()
		{
			$this->db->select("MAX(pro_id) as maxid");	
			$this->db->from('project');
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_pro_count($pro_cid)
		{
			$this->db->select("COUNT(*) as maxid");	
			$this->db->from('project');
			$this->db->where('pro_cid', $pro_cid);
			$query = $this->db->get();
			return $query->row()->maxid;
		}

		public function get_pro_total($pro_cid)
		{
			$this->db->select("SUM(pro_items) as total_score");	
			$this->db->from('project');
			$this->db->where('pro_cid', $pro_cid);
			$query = $this->db->get();
			return $query->row()->total_score;
		}



		public function add_pro_score()
		{
			$stud_id = $this->input->post('pro_stud[]');
			$pro_id = $this->input->post('pro_id[]');
			$score_id = $this->input->post('pro_score[]');

			$data = array();

			for ($i=0; $i < count($stud_id); $i++) {
			    $data[] = array(
			    	'pros_sid' => $stud_id[$i],
					'pros_pid' => $pro_id[$i],
					'pros_score' => $score_id[$i]
			    );
			}
			
			return $this->db->insert_batch('pro_score', $data);
		}

		public function add_pro($pro_cid)
		{
			$data = array(
				'pro_items' => $this->input->post('pro_items'),
				'pro_cid' => $pro_cid
			);
			return $this->db->insert('project', $data);
		}

		public function get_pro_scores($pros_id = FALSE)
		{
			if ($pros_id === FALSE) {
				$query = $this->db->get('pro_score');
				return $query->result_array();
			}

			$this->db->where('pros_id', $pros_id);
			$result = $this->db->get('pro_score');
			return $result->row_array();
		}

		public function get_pro($pro_cid)
		{
			if ($pro_cid === FALSE) {
				$query = $this->db->get('project');
				return $query->result_array();
			}

			$this->db->where('pro_cid', $pro_cid);
			$result = $this->db->get('project');
			return $result->row_array();
		}
	}