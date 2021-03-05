<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends MY_Controller
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

	public function umum() 
	{
		$load['menu'] = 'pengaturan-umum';

		$con = array( 
			'table_name' => 'sch_pengaturan',
			'join'	=> array(
				array('sch_ref_wilayah', 'sch_ref_wilayah.wilayah_id = sch_pengaturan.pengaturan_provinsi')
			),
			'where'	=> array(
				'bagian_id' => $this->session->userdata('id_bagian')
			)
		);
		$data_pengaturan = $this->baseben->get($con);

		$con = array(
			'table_name' => 'sch_ref_wilayah',
			'order_by'	=> array('wilayah_nama', 'asc')
		);
		$data_wilayah = $this->baseben->get($con);
		
		$load['umum'] 		= $data_pengaturan;
		$load['provinces'] 	= $data_wilayah;

		$this->template('Pengaturan Umum', 'settings/umum_v', 'settings/top/umum_v', $load);
	}

	public function getUmum_json() 
	{
		$pengaturan_id =  $this->input->post('pengaturan_id');

		$con = array(
			'table_name' => 'sch_pengaturan',
			'where' => array(
				'pengaturan_id' => $pengaturan_id
			)
		);

		$get_data = $this->baseben->get($con);

		echo json_encode($get_data[0]);
	}

}

