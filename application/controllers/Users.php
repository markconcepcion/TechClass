<?php
	class Users extends CI_Controller
	{
		public function login(){
			$data['title'] = 'Create Category';
			$this->load->view('users/login');
		}

		public function login_teach(){
			$data['title'] = 'Create Category';
			redirect('homepage_teach');
		}
	}