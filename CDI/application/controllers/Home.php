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
		$this->load->view('manageaccount');
	}
	public function qacForm(){
		$this->load->view('qacform');
	}
	public function userForm(){
		$this->load->view('userform');
	}


}






