<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Baseben_Model', 'baseben');
	}

	public function index()
	{
		$load['menu'] = 'pengaturan-umum';

		// Judul Halaman, Nama View Halaman, Nama Topping Javascript, Data Yang Dimuat
		$this->template('Pengaturan Umum', 'settings/umum_v', 'settings/top/umum_v', $load);
	}

}

