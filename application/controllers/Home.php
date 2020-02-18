<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index(){
		$this->load->view('home');
	}

	public function posts(){
		$data['posts'] = $this->mymodel->getPosts();
		$this->load->view('posts', $data);
	}

	public function post(){
		$data['posts'] = $this->mymodel->getPost($this->uri->segment(3));
		$this->load->view('posts', $data);
	}
}
