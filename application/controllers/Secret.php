<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret extends CI_Controller {

	public function index(){
		$this->load->view('secret');
	}

	public function verify(){
		if($this->input->post('passcode')== "pink"){
			$this->session->set_userdata('admin', 'TRUE');
			$this->review();
		}else{
			$this->session->set_userdata('admin', 'FALSE');
			$this->load->view('secret');
		}
	}

	public function newpost(){
		$this->load->view('newpost');
	}

	public function insert(){
		if(!isset($_SESSION['admin'])){
			$this->load->helper('url');
			$this->index();
		}else{
			$data = array (
				'title' => $this->input->post('title'),
				'date' => $this->input->post('date'),
				'body' => $this->input->post('body'),
				'tags' => $this->input->post('tags')
			);
        	$this->secretmodel->insert($data);
			$this->review();
		}
	}

	public function review(){
		if(!isset($_SESSION['admin'])){
			$this->load->helper('url');
			$this->index();
		}else{
			$data['posts'] = $this->mymodel->getPosts();
			$this->load->view('review',$data);
		}
	}

	public function delete(){
    	if(!isset($_SESSION['admin'])){
			$this->load->helper('url');
			$this->index();
		}else{
			$id = $this->uri->segment(3);
			$this->secretmodel->delete_row($id);
			$this->review();
		}
	}

	public function destroy(){
		unset($_SESSION['admin']);
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
}