<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller
{

	//------------------------------------------------------------Login page
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

			if ($this->user_model->can_login($username, $password, $type)) {
				$session_data = array(
					'username' => $username,
					'type' => $type
				);

				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login_controller/enter');
				$this->session->set_userdata('username');
				$this->session->set_userdata('type');

			} else {
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'login_controller/login');
			}

		} else {

			$this->login();
		}

	}

	public function login()
	{
		$this->load->view('login');
	}

	public function enter()
	{
		if ($this->session->userdata('username') != '') {
			redirect(base_url() . 'Home/menupage');
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

	public function QAC_Create_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
			$data = array(
				"username" => $this->input->post("username"),
				"password" => $this->input->post("password"),
				"type" => "QAC",
				"email" => $this->input->post("email")
			);
			$this->user_model->insert_data($data);
			?>
			<script>
                window.location.href = '<?php echo base_url();?>login_controller/qacForm';
                alert('QAC Account is created');
			</script>
			<?php
			//	redirect(base_url() . 'login_controller/qacinserted');
		} else {
			$this->qacForm();
		}
	}

	public function qacForm()
	{
		$this->load->view('qacform');
	}

	public function qacinserted()
	{
		$this->qacForm();
	}

	//----------------------------------------------------------------------QAC

	public function user_Create_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
			$data = array(
				"username" => $this->input->post("username"),
				"password" => $this->input->post("password"),
				"type" => "User",
				"email" => $this->input->post("email")
			);
			$this->user_model->insert_data($data);
			?>
			<script>
                window.location.href = '<?php echo base_url();?>login_controller/userForm';
                alert('User Account is created');
			</script>
			<?php
		} else {
			$this->userForm();
		}
	}

	public function userForm()
	{
		$this->load->view('userform');
	}

	//----------------------------------------------------------------------User

	public function admin_account_update_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm password', 'confirm password', 'required|matches[password]');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
		} else {
			$this->manageAccount();
		}
	}

	//----------------------------------------------------------------------Admin user name and password update

	public function manageAccount()
	{
		$this->load->model('user_model');
		$data["fetch_data"] = $this->user_model->fetch_data();
		$this->load->view('manageaccount', $data);
	}
	//------------------------------------------------------------QAC Account Update page

	public function QACaccountUpdate()
	{
		$this->load->view('QACaccountUpdate');
	}

	//-----------------------------------------------------------User Account Update page

	public function QAC_account_update_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm password', 'confirm password', 'required');


		if ($this->form_validation->run()) {
			$this->load->model('user_model');
		} else {
			$this->QACaccountUpdate();
		}
	}


	//----------------------------------------------------------------------Admin user name and password update

	public function user_account_update_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm password', 'confirm password', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
		} else {
			$this->useraccountupdate();
		}
	}

	//----------------------------------------------------------------------Admin user name and password update

	public function useraccountupdate()
	{
		$this->load->view('userAccountUpdate');
	}

	public function delete_data()
	{
		$username = $this->uri->segment(3);
		$this->load->model('user_model');
		$this->user_model->delete_data($username);
		redirect(base_url() . "login_controller/manageAccount");

	}

//------------------------------------------------------------Sign Up page
	public function signUp()
	{
		$this->load->view('signup');
	}

	public function sign_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('user_model');
			$data = array(
				"username" => $this->input->post("username"),
				"password" => $this->input->post("password"),
				"type" => "User",
				"email" => $this->input->post("email")
			);
			$this->user_model->insert_data($data);
			?>
			<script>
                window.location.href = '<?php echo base_url();?>login_controller/login';
                alert('User Account is created');
			</script>
			<?php
		}else {
			$this->signUp();
		}
	}


}
