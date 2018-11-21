<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 
	public function __construct(){
 		parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('UserModel');
        $this->load->library('session');
        // session_start();
        // $this->load->library('input');
	}
 
	public function index(){

		if ($this->UserModel->isLogin()) {
			// echo 'anda sudah login';
			redirect('dsp');
		}else{
			redirect('user/login');
		}


		// if ($this->UserModel->isLogin()) {
		// 	echo 'anda sudah login';
		// 	print_r($this->session->userdata);
		// }else{
		// 	$this->load->view($this->router->fetch_class().'/login');
		// }
	}
 
	public function register(){


		$input_email = $this->input->post('email');
		if (isset($input_email) && $input_email != '') {
			$user=[
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'password'=>md5($this->input->post('password')), //ENCRIPT
	        ];
	 
			$email_check=$this->UserModel->email_check($user['email']);
	 
			if($email_check){
				$this->UserModel->register($user);
				$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
				redirect('user/login');
			}

			else{
				//IF EMAIL ALREADY REGISTERED
				$this->session->set_flashdata('error_msg', 'Email Already Registered,Try again.');
				redirect('user'); 
			}
		}else{

			$this->load->view($this->router->fetch_class().'/register');
		}
	}

	public function login(){
		$input_email = $this->input->post('email');
		if (isset($input_email) && $input_email != '') {
			if ($this->UserModel->isLogin()) {
				redirect('dashboard'); 	
			}else{
				$user = $this->UserModel->login_user($this->input->post('email'), $this->input->post('password'));
				if ($user) {
					$this->session->set_userdata($user);
					redirect('/');
				}else{
					redirect('user/login');
				}
			}
		}else{
			if ($this->UserModel->isLogin()) {
				redirect('/');
			}
			$this->load->view($this->router->fetch_class().'/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('user/login', 'refresh');
	}
 
}
?>