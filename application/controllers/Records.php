<?php
	/**
	* 
	*/
	class Records extends CI_Controller
	{
		var $data = array();

		public function add_stud($c_id){

			$data['classes'] = $this->course_model->get($c_id);
					
			$this->form_validation->set_rules('s_fname', 's_fname', 'required');
			$this->form_validation->set_rules('s_mname', 's_mname', 'required');
			$this->form_validation->set_rules('s_lname', 's_lname', 'required');
			$this->form_validation->set_rules('s_gender', 's_gender', 'required');	
			
			if($this->form_validation->run() === FALSE){
				redirect('courses/view/'.$c_id);
			} else {
				$this->record_model->add_stud($c_id);
				redirect('courses/view/'.$c_id);
			}
		}

		public function delete_stud($id)
		{
			$this->db->where('s_id', $id);
			$this->db->delete('student');
			redirect('homepage_teach');
		}

		public function edit_stud($id)
		{
			$data['stud_id'] = $id;
			$this->load->view('templates/header');
       		$this->load->view('courses/edit',  $data);
        	$this->load->view('templates/footer');
		}

		public function update_stud($id){
			$this->form_validation->set_rules('s_fname', 's_fname', 'required');
			$this->form_validation->set_rules('s_mname', 's_mname', 'required');
			$this->form_validation->set_rules('s_lname', 's_lname', 'required');
			$this->form_validation->set_rules('s_gender', 's_gender', 'required');

			if($this->form_validation->run() === FALSE){
				redirect('records/edit_stud'.$id);
			} else {
				$this->record_model->update_stud($id);
				redirect('homepage_teach');
			}
		}

		public function index($c_id) {
			$data['quiz_id'] = $this->quiz_model->get_quiz_id() + 1;

			$this->form_validation->set_rules('q_id[]', 'Quiz Id', 'required');
			$this->form_validation->set_rules('q_stud[]', 'Student Id', 'required');
			$this->form_validation->set_rules('q_score[]', 'Student Score', 'required');
			$this->form_validation->set_rules('quiz_topic', 'Quiz Topic', 'required');
			$this->form_validation->set_rules('q_items', 'Quiz Items', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('homepage_teach');
			} else {
				$this->quiz_model->add_quiz_score();
				$this->quiz_model->add_quiz($c_id);
				redirect('courses/view/'.$c_id, $data);
			}
		}		

		public function assignment($c_id) {
			$data['ass_id'] = $this->assignment_model->get_ass_id() + 1;

			$this->form_validation->set_rules('ass_id[]', 'Assignment Id', 'required');
			$this->form_validation->set_rules('ass_stud[]', 'Student Id', 'required');
			$this->form_validation->set_rules('ass_score[]', 'Student Score', 'required');
			$this->form_validation->set_rules('ass_items', 'Assignment Items', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('homepage_teach');
			} else {
				$this->assignment_model->add_ass_score();
				$this->assignment_model->add_ass($c_id);
				redirect('courses/view/'.$c_id, $data);
			}
		}

		public function activity($c_id) {
			$data['act_id'] = $this->assignment_model->get_ass_id() + 1;

			$this->form_validation->set_rules('act_id[]', 'Activity Id', 'required');
			$this->form_validation->set_rules('act_stud[]', 'Student Id', 'required');
			$this->form_validation->set_rules('act_score[]', 'Student Score', 'required');
			$this->form_validation->set_rules('act_items', 'Activity Items', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('homepage_teach');
			} else {
				$this->activity_model->add_act_score();
				$this->activity_model->add_act($c_id);
				redirect('courses/view/'.$c_id, $data);
			}
		}

		public function project($c_id) {
			$data['pro_id'] = $this->project_model->get_pro_id() + 1;

			$this->form_validation->set_rules('pro_id[]', 'Activity Id', 'required');
			$this->form_validation->set_rules('pro_stud[]', 'Student Id', 'required');
			$this->form_validation->set_rules('pro_score[]', 'Student Score', 'required');
			$this->form_validation->set_rules('pro_items', 'Activity Items', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('homepage_teach');
			} else {
				$this->project_model->add_pro_score();
				$this->project_model->add_pro($c_id);
				redirect('courses/view/'.$c_id, $data);
			}
		}

		public function presentation($c_id) {
			$data['pre_id'] = $this->presentation_model->get_pre_id() + 1;

			$this->form_validation->set_rules('pre_id[]', 'Activity Id', 'required');
			$this->form_validation->set_rules('pre_stud[]', 'Student Id', 'required');
			$this->form_validation->set_rules('pre_score[]', 'Student Score', 'required');
			$this->form_validation->set_rules('pre_items', 'Activity Items', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('homepage_teach');
			} else {
				$this->presentation_model->add_pre_score();
				$this->presentation_model->add_pre($c_id);
				redirect('courses/view/'.$c_id, $data);
			}
		}
	}