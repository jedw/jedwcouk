<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

	public $id;
	public $title;
	public $date;
	public $tags;
	public $body;

	public function __construct(){
        parent::__construct();
    }

	public function getPosts(){
        $data = $this->db->get('blog')->result();
        return $data;
    }

	public function getPost($postid){
		$data = $this->db->get_where('blog', array('id' => $postid))->result();
        return $data;
    }
    
    public function getPostsByTag($tag){
        $this->db->like('tags', $tag);
        $data = $this->db->get('blog')->result();
        return $data;
    }
}