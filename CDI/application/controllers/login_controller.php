<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_controller extends CI_Controller
{

	//------------------------------------------------------------Login page
	public function login()
	{
		$this->load->view('login');
	}

	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//-----------------------------------
			$this->load->model('user_model');
			if ($this->user_model->can_login($username, $password)) {
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login_controller/enter');
				$this->session->set_userdata('username');

			} else {
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'login_controller/login');
			}
			//--------------------------------------------
		} else {

			$this->login();
		}
	}

	public function enter()
	{
		if ($this->session->userdata('username') != '') {
			redirect(base_url().'Home/menupage');
		} else {
			redirect(base_url() . 'login_controller/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		session_destroy();
		redirect(base_url() . 'login_controller/login');
	}



}
