<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class secretmodel extends CI_Model{

    public $id;
    public $title;
    public $date;
    public $body;
    public $tags;

	public function __construct(){
        parent::__construct();
    }

    public function insert($data) {
        $this->db->insert('blog', $data);
    }

	function delete_row($id){
		$this->db->where('id', $id);
		$this->db->delete('blog');
	}
}