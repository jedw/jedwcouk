<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret extends CI_Controller {

	public function index()
	{
		$this->load->view('secret');
	}

	public function verify()
	{
		$this->load->library('session');
		if($this->input->post('passcode')== "pink"){
			$this->session->set_userdata('admin', 'TRUE');
			redirect('/secret/review', 'refresh');
		}
		else {
			$this->session->set_userdata('admin', 'FALSE');
			$this->load->view('secret');
		}

	}

	public function newpost()
	{
		$this->load->view('newpost');
	}

	public function insert()
	{
		if(!isset($_SESSION['admin'])){
			$this->load->helper('url');
			 redirect('/secret', 'refresh');
		}else{
		$this->load->model('secretmodel');
		$data = array (
                    'title' => $this->input->post('title'),
                    'date' => $this->input->post('date'),
                    'body' => $this->input->post('body'),
					'tags' => $this->input->post('tags')
                );
        $this->secretmodel->insert($data);
				echo"<p>New post added</p>"; //this is naughty becasue it's breaking the MVC pattern
			}
		//$this->load->view('secret');
	}

	public function review()
	{
		if(!isset($_SESSION['admin'])){
			$this->load->helper('url');
			 redirect('/secret', 'refresh');
		}else{
		$this->load->model('mymodel');
		$data['posts'] = $this->mymodel->getPosts();
		$this->load->view('review',$data);
	}
	}

	public function delete()
	{
    if(!isset($_SESSION['admin'])){
			$this->load->helper('url');
			 redirect('/secret', 'refresh');
		}else{
		$this->load->model('secretmodel');
		$id = $this->uri->segment(3);
		$this->secretmodel->delete_row($id);
		$this->review();
	}
	}

	public function destroy()
	{
			unset($_SESSION['admin']);
			$this->session->sess_destroy();
			redirect('/', 'refresh');
	}


}
