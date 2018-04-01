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



	public function blog_comment(){
		$this -> load -> view('blog_comments');
	}	 



	public function  index_logined(){
		$user= $this ->session -> userdata('user');

		//加载分页类
		$this->load->library('pagination');
		$config['per_page'] = 3;
		$this -> load ->model('user_model');

		$user_blogs = $this-> user_model ->get_blog_count_by_user($user ->user_id);

		$total_rows = $this -> user_model -> get_blog_id_total(
			$user ->user_id,$this -> uri ->segment(3),$config['per_page']
		);
		$config['base_url'] = 'http://localhost/php/admin/index_logined';

		$config['total_rows'] = count($user_blogs);
		
		$this->pagination->initialize($config);

		$link = $this ->pagination ->create_links();

		$this -> load ->view('index_logined',array(
			'user_blogs' =>$user_blogs,
			'links'=>$link,
		));
	}




	public function  add_blog(){
		 //接数据  post  get  put修改数据库内容  delete
		$title = $this -> input -> post('title');
		$content = $this -> input -> post('content');
		$type_id = $this -> input -> post('type_id');
		//
		$this -> load -> model('user_model');
		$p_blog = $this-> user_model -> p_blog($title,$content,$type_id);
		if($p_blog>0){
			redirect('admin/index_logined');
		}else{
			redirect('admin/index');
		}

	}


}
