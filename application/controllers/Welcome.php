<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
        //associative array of data to pass to view
        $data['title'] = 'Mario Seattle';
        $data['page_id'] = 'Mario_Seattle';
        $data['guts'] = 'Hands on CodeIgniter SP16';
        
        //data is pass as second parameter in the view creation
		$this->load->view('welcome_message', $data);
	}
}
