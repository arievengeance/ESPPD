<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('FILE_ENCRYPTION_BLOCKS', 10000);

class MY_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Baseben_Model', 'baseben');

	
	}


	public function template($judul, $content, $topping, $data) 
	{
		$view['judul'] = $judul;
		$view['content'] = $content;
		$view['topping'] = $topping;
		$view['data'] = $data;
		$this->load->view('template/main', $view);
	}


}
