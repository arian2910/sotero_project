<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __constuct(){
		parent::__construct();
	}
	public function index(){
		
		$this->load->view('adminView');
	}
}
