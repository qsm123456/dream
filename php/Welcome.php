<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function  login(){
		$this -> load -> view('login');
	}
	
	public function reg(){
		$this -> load -> view('reg');
	}
}
