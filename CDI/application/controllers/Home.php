<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	//------------------------------------------------------------Index page
	function index(){
		$this->load->view('index');
	}
	//------------------------------------------------------------Menu page
	public function menupage(){
		$this->load->view('menu');
	}
	//------------------------------------------------------------Menu page
	//------>login_controller
	//------------------------------------------------------------View Document page
	public function viewDocument(){
		$this->load->view('view_document');
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
	public function update_data(){


	}

}






