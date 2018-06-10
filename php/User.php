<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function  login(){
		//接受数据
		$email = $this -> input ->post('email');
		$pwd = $this -> input ->post('pwd');

		//连接数据库
		$this ->load ->model('user_model');
		$user = $this -> user_model -> find_by_email_pwd($email,$pwd);
		if($user){
			$this -> session ->set_userdata('user',$user);
			echo "success";
		}else{
			echo "fail";
		};
	}

	public function regi(){
		$email = $this -> input ->post('email');
		$pwd = $this -> input ->post('pwd');
		$name = $this -> input ->post('name');
		$sex = $this -> input ->post('sex');

		$this ->load ->model('user_model');
		$row = $this -> user_model -> save($email,$pwd,$name,$sex);
		if($row>0){
			echo 'ok';
		}else{
			echo 'notok';
		}
		
	}

	public function judge(){
		$email = $this -> input ->post('email');

		$this ->load ->model('user_model');
		$row = $this -> user_model -> find_by_email($email);

		if($row>0){
			echo 'fail';
		}else{
			echo 'success';
		}
	}
	
}
