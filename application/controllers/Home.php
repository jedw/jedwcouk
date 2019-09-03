<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function posts()
	{
		$this->load->model('mymodel');
		$data['posts'] = $this->mymodel->getPosts();
		$this->load->view('posts',$data);
	}

	public function post()
	{
		$this->load->model('mymodel');
		$data['posts'] = $this->mymodel->getPost($this->uri->segment(3));
		$this->load->view('posts',$data);
	}
}
