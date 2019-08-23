<?php
class user_model extends CI_Model
{
	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user');
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function fetch_data()
	{
		$query = $this->db->get("user");
		return $query;
		//Select * FROM users
	}







}
