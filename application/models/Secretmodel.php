<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class secretmodel extends CI_Model {

public $title;
public $date;
public $body;
public $tags;

	public function __construct()
    {
        parent::__construct();
    }

	public function insert($data) {
        $insert = new secretmodel;
        $insert = $data;
        $this->db->insert('blog',$insert);
    }

		function delete_row($id)
		{
				$this->db->where('id', $id);
				$this->db->delete('blog');
		}
}
