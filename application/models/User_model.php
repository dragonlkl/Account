<?php

class User_model extends CI_Model{
	public function __construct()
    {
        $this->load->database();
    }

    
    public function user_login()
	{
	    $this->load->helper('url');

	    // $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'username' => $this->input->post('username',TRUE),
	        'text' => $this->input->post('password',TRUE)
	    );

	    return $this->db->insert('news', $data);
	}

    
}