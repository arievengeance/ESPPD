<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Baseben_model', 'baseben');
	}

	public function index() 
	{
		echo "KONTOL";
	}
}
