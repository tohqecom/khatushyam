<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index(){
		$data = ['content' => 'content'];
        $this->load->view('main', $data);
	}

	public function fullStoryOfKhatushyamji(){
		$data = ['content' => 'shyamji-story'];
        $this->load->view('main', $data);
	}
}
