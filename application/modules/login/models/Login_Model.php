<?php
Class login_model extends MY_Model{
	var $table = 'tb_users';
	var $key = 'User_ID';
	
	function login($username, $password)
	{
		$this -> db -> select('*');
		$this -> db -> from('tb_users');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);
	
		$query = $this -> db -> get();
	
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}