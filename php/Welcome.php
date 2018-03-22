<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
		// $this->load->view('welcome_message');
	// }
	// public function i2()
	// {
		// $this->load->view('2.html');
	// }
// 	
	
		public function regi()
	{
		$this->load->view('regi');
	}
		
		public function success()
	{
		$this->load->view('success');
	}
	
		public function save_user()
	{
		$username=$this->input->post('username');
		$pwd=$this->input->post('pwd');
		$realname=$this->input->post('realname');
		$tel=$this->input->post('tel');
		
		$this -> load -> model('user_model');
		$row = $this -> user_model -> save($username,$pwd,$realname,$tel);
		// redirect('welcome/success');
		if($row >0){
			redirect('welcome/success');
		}else{
			echo '注册失败';
		}
	}
	
	
	public function login(){
		$this->load->view('login');
	}
	

	
	public function check_login(){
		$username = $this -> input -> post('username');
		$pwd = $this -> input -> post('pwd')；
		
		
		
		$user = 
		
		
		if($user){
			$this -> session -> userdata('login_name');
			
		}else{
			echo "不存在此用户";
		}
	}
	
	
}
