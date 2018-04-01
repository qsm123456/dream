<?php
defined('BASEPATH')OR exit('NO direct script access allowed');


class User_model extends CI_Model {
	
	public function find_by_email_pwd($email,$pwd){
		return $this -> db -> get_where('t_user',array(
			'email' =>$email,
            'password' => $pwd
		))->row();
	}

	public function save($email,$pwd,$name,$sex){
		$this -> db -> insert('t_user',array(
			'email' =>$email,
			'password' => $pwd,
			'username' =>$name,
			'sex' =>$sex,
		));
		return $this ->db->affected_rows();
	}


	public function find_by_email($email){
		return $this -> db -> get_where('t_user',array(
			'email' =>$email,
		))->row();
	}


	public function find_type_by_user($user_id){
		return $this -> db -> get_where('t_type_blog',array(
			'user_id'=>$user_id
		))->result();
	}



	//blog 模板
	public function p_blog($title,$content,$type_id){
		$this -> db -> insert('t_blog',array(
			'title' =>$title,
			'content' => $content,
			'type_id' =>$type_id,
		));
		return $this ->db->affected_rows();
	}


	public function get_blog_count_by_user($user_id){
		$this -> db -> select('b.*,bt.type_name');
		$this -> db -> from('t_blog b');
		$this -> db -> join('t_type_blog bt','b.type_id = bt.type_id');
		$this -> db -> where('bt.user_id',$user_id);
	    $user_blogs = $this ->db ->get();
 		return   $user_blogs->result();
	}

	public function get_blog_id_total($user_id,$per_page,$offset){
			$this -> db -> select('b.*');
			$this -> db -> from('t_blog b');
			$this -> db -> join('t_type_blog bt','b.type_id = bt.type_id');
			$this -> db -> where('bt.user_id',$user_id);
			$this -> db -> limit($per_page,$offset);
			$blog_id = $this ->db ->get();
			return   $blog_id ->result();
		}
	}





