<?php
class user_model extends CI_Model
{
	function can_login($username, $password,$type)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('type', $type);

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

	function insert_data($data){
		$this->db->insert("user",$data); // mysqli_query("insert into user(a,b,c) values("1","2","3"));
	}









}
