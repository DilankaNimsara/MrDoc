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
		$this->form_validation->set_rules('type', 'type', 'required');

		if ($this->form_validation->run()) {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$type = $this->input->post('type');
			//-----------------------------------
			$this->load->model('user_model');
			if ($this->user_model->can_login($username, $password,$type)) {
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

	public function manageAccount(){
		$this->load->model('user_model');
		$data["fetch_data"]=$this->user_model->fetch_data();
		$this->load->view('manageaccount',$data);
	}
	public function qacForm(){
		$this->load->view('qacform');
	}
	public function userForm(){
		$this->load->view('userform');
	}

	//----------------------------------------------------------------------QAC

	public function QAC_Create_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
			$data=array(
				"username" =>$this->input->post("username"),
				"password" =>$this->input->post("password"),
				"type" =>"QAC"
			);
			$this->user_model->insert_data($data);
			?>
			<script>
                window.location.href='<?php echo base_url();?>login_controller/qacForm';
                alert('QAC Account is created');
			</script>
			<?php
		//	redirect(base_url() . 'login_controller/qacinserted');
		}else{
			$this->qacForm();
		}
	}

	public function qacinserted(){
		$this->qacForm();
	}



	//----------------------------------------------------------------------User
	public function user_Create_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
			$data=array(
				"username" =>$this->input->post("username"),
				"password" =>$this->input->post("password"),
				"type" =>"User"
			);
			$this->user_model->insert_data($data);
			?>
			<script>
                window.location.href='<?php echo base_url();?>login_controller/userForm';
                alert('User Account is created');
			</script>
			<?php
		}else{
			$this->userForm();
		}
	}

	//----------------------------------------------------------------------Admin
	public function admin_account_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('new_password', 'New password', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
		}else{
			$this->manageAccount();
		}
	}










}
