<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListRuang extends CI_Controller {

	public function index()
	{
		$this->load->view('ruangan');
	}
}
