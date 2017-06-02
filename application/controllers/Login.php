<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function user()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Login';
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header', $data);
            $this->load->view('login');
            $this->load->view('footer');

        }else
        {
            $this->user_model->user_login();
            $this->load->view('news/success');
        }
        
    }
      
}