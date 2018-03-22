<?php
defined('BASEPATH')OR exit('NO direct script access allowed');


class User_model extends CI_Model{
	
	public function save($username,$pwd,$realname,$tel){
		$this -> db -> insert('t_user',array(
			'username'=>$username,
			'password'=>$pwd,
			'realname'=>$realname,
			'tel'=>$tel));
		return $this -> db ->affected_rows();
	}
	
	// public function find_by_name($username,$pwd){
		// $this -> db -> get_where('t_user',array(
			// 'username'=>$username,
			// 'password'=>$pwd,
		// ));
		// return $query -> row();//返回一条记录
	// }
}

?>