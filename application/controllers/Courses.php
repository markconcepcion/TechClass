<?php
	class Courses extends CI_Controller
	{
		public function create(){

			$sum = $this->input->post('c_quiz') + $this->input->post('c_ass') + 
					$this->input->post('c_pro') + $this->input->post('c_act') +
					$this->input->post('c_pre');

			$this->form_validation->set_rules('c_name', 'c_name', 'required');
			$this->form_validation->set_rules('c_section', 'c_section', 'required');
			$this->form_validation->set_rules('c_code', 'c_code', 'required');
			$this->form_validation->set_rules('c_sched', 'c_sched', 'required');
			$this->form_validation->set_rules('c_quiz', 'c_quiz', 'required');
			$this->form_validation->set_rules('c_ass', 'c_ass', 'required');
			$this->form_validation->set_rules('c_pro', 'c_pro', 'required');
			$this->form_validation->set_rules('c_act', 'c_act', 'required');
			$this->form_validation->set_rules('c_pre', 'c_pre', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('homepage_teach');
			} else if ($sum > 100) {
				redirect('homepage_teach');
				# code...
			} else {
				$this->course_model->create();
				redirect('homepage_teach');
			}
		}

		public function view($c_id)
		{
			$data['classes'] = $this->course_model->get($c_id);
			$data['students'] = $this->record_model->get_stud($c_id);

			$data['quiz_total'] = $this->quiz_model->get_quiz_total($c_id); //Get Quizzes total by class
			$data['quiz_id'] = $this->quiz_model->get_quiz_id() + 1;		//Current Quiz id
			$data['quizzes'] = $this->quiz_model->get_quiz_scores();		//Quiz Scores of every Students
			$data['quiz'] = $this->quiz_model->get_quiz($c_id);				//Get Quizzes by class
			$data['quiz_num'] = $this->quiz_model->get_quiz_count($c_id);	//Get Quiz count by class

			$data['ass_total'] = $this->assignment_model->get_ass_total($c_id);		//Get Assignments total by class
			$data['ass_id'] = $this->assignment_model->get_ass_id() + 1;			//Current Assignemnt id
			$data['assignments'] = $this->assignment_model->get_ass_scores();		//Assignment Scores of every Students
			$data['assign'] = $this->assignment_model->get_ass($c_id);				//Get Assignments by class
			$data['ass_num'] = $this->assignment_model->get_ass_count($c_id);		//Get Assignment count by class

			$data['act_total'] = $this->activity_model->get_act_total($c_id);		//Get Assignments total by class
			$data['act_id'] = $this->activity_model->get_act_id() + 1;			//Current Assignemnt id
			$data['activities'] = $this->activity_model->get_act_scores();		//Assignment Scores of every Students
			$data['act'] = $this->activity_model->get_act($c_id);				//Get Assignments by class
			$data['act_num'] = $this->activity_model->get_act_count($c_id);		//Get Assignment count by class

			$data['pro_total'] = $this->project_model->get_pro_total($c_id);		//Get Assignments total by class
			$data['pro_id'] = $this->project_model->get_pro_id() + 1;			//Current Assignemnt id
			$data['projects'] = $this->project_model->get_pro_scores();		//Assignment Scores of every Students
			$data['pro'] = $this->project_model->get_pro($c_id);				//Get Assignments by class
			$data['pro_num'] = $this->project_model->get_pro_count($c_id);		//Get Assignment count by class

			$data['pre_total'] = $this->presentation_model->get_pre_total($c_id);		//Get Assignments total by class
			$data['pre_id'] = $this->presentation_model->get_pre_id() + 1;			//Current Assignemnt id
			$data['presentations'] = $this->presentation_model->get_pre_scores();		//Assignment Scores of every Students
			$data['pre'] = $this->presentation_model->get_pre($c_id);				//Get Assignments by class
			$data['pre_num'] = $this->presentation_model->get_pre_count($c_id);		//Get Assignment count by class

			$this->load->view('templates/header', $data);
			$this->load->view('courses/students', $data);
        	$this->load->view('templates/footer', $data);
		}
	}