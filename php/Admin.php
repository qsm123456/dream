<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function  index(){
		$user = $this -> session ->userdata('user'); 
		if($user){
			$this -> load -> view('adminIndex');
		}else{
			redirect('welcome/login');
		}
	
	}
	
	public function  newblog(){
		 
		$user = $this -> session ->userdata('user');
		if($user){
			$this -> load -> model('user_model');
			$types = $this-> user_model -> find_type_by_user($user ->user_id );
			$this -> load -> view('new_blog',array(
				'blog_types'=>$types
			));
		}else{
			redirect('welcome/login');
		}

		
		

		


		

	}

}
