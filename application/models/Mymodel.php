<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

	public $id;
	public $title;
	public $date;
	public $tags;
	public $body;

	public function __construct()
    {
        parent::__construct();
    }

	public function getPosts ()
	{
        //$data[] = new mymodel;

		$this->db->order_by("id","desc");
        $q = $this->db->get('blog','desc');
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

	function getPost($postid)
	{
		//$data[] = new mymodel;

		$q = $this->db->get_where('blog', array('id' => $postid));
		if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
	}
}
