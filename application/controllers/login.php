<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
	public function __constuct(){
		parent::__construct();
	}
	public function index(){
        if($this->session->userdata('username')){
            redirect('admin');
        }
		if(isset($_POST['password'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'],md5($_POST['password']))){
                $this->session->set_userdata('username',$_POST['username']);
				redirect('admin');
			}else{
				redirect('login');
			}
		}
		$this->load->view('login');
	}
	public function key(){
		echo md5("encript-Aritza");
	}
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
