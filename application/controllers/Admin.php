<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Baseben_model', 'baseben');

		$this->load->helper('cookie');
		$token = get_cookie('external_intra_token');

		if($token == ''){
			$token = 'RdNppliflUwu';
		}

		$ch = curl_init();
		$fields = array(
			'token' => urlencode($token),
			'callback' => 0,
		);
		$fields_string = '';

		foreach ($fields as $key => $value) {
			$fields_string .= $key . '=' . $value . '&';
		}
		$fields_string = rtrim($fields_string, '&');

		curl_setopt($ch, CURLOPT_URL, 'http://intranet.kemendag.go.id/api/token_check/');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

		//execute post
		$result = curl_exec($ch);
		curl_close($ch);

		$token_status = json_decode($result);

		if ($token_status->login == 1 and $token !== false) {
			$con = array(
				'table_name' => 'sch_pengguna',
				'join' => array(
					array('sch_ref_biro', 'sch_ref_biro.biro_id = sch_pengguna.id_biro'),
					array('ref_bagian', 'ref_bagian.bagian_id = pengguna.id_bagian', 'left')
				),
				'where' => array(
					'username' => $token_status->nip
				)
			);
	
			$data_pengguna = $this->baseben->get($con);
	
			$con = array(
				'table_name' => 'sch_pengaturan',
				'where'	=> array(
					'bagian_id' => $data_pengguna[0]['id_bagian']
				)
			);
			$data_pengaturan = $this->baseben->get($con);
	
			if (count($data_pengguna) > 0) {
				$newdata = array(
					'id_pengguna'	=> $data_pengguna[0]['id_pengguna'],
					'username'  	=> $data_pengguna[0]['username'],
					'id_unit'  		=> $data_pengguna[0]['id_biro'],
					'id_bagian'  	=> $data_pengguna[0]['id_bagian'],
					'bagian'  		=> $data_pengguna[0]['bagian_nama'],
					'biro'  		=> $data_pengguna[0]['biro_nama'],
					'provinsi' 		=> $data_pengaturan[0]['pengaturan_provinsi'],
					'email'     	=> '',
					'nama'     		=> $data_pengguna[0]['nama'],
					'level_super'	=> $data_pengguna[0]['level_super'],
					'level'     	=> $data_pengguna[0]['level'],
					'status'     	=> $data_pengguna[0]['status'],
					'logged_in' 	=> TRUE
				);
				if (isset($data_pengguna[0]['id_pengguna'])) {
					$con = array(
						'table_name' 	=> 'sch_pengguna',
						'where'			=> array(
							'id_pengguna' => $data_pengguna[0]['id_pengguna']
						),
						'last_login'	=> date('Y-m-d H:i:s')
						
					);
	
					$save = $this->baseben->update($con);
					$this->session->set_userdata($newdata);
				}
			} else {
				$con = array(
					'table_name' => 'sch_ref_pegawai',
					'join'	=> array(
						array('sch_ref_biro', 'sch_ref_biro.biro_id = sch_ref_pegawai.biro_id', 'left'),
						array('sch_ref_bagian', 'sch_ref_bagian.bagian_id = sch_ref_pegawai.bagian_id')
					),
					'where' => array(
						'pegawai_nip' => $token_status->nip
					)
				);
	
				$data_pengguna = $this->baseben->get($con);
	
				$newdata = array(
					'id_pengguna'	=> $data_pengguna[0]['pegawai_nip'],
					'username'  	=> $data_pengguna[0]['pegawai_nip'],
					'id_unit'  		=> $data_pengguna[0]['biro_id'],
					'id_bagian'  	=> $data_pengguna[0]['bagian_id'],
					'bagian'  		=> $data_pengguna[0]['bagian_nama'],
					'biro'  		=> $data_pengguna[0]['biro_nama'],
					'provinsi' 		=> '',
					'email'     	=> '',
					'nama'     		=> $data_pengguna[0]['pegawai_nama'],
					'level'     	=> 00,
					'status'     	=> $data_pengguna[0]['pegawai_status'],
					'logged_in' 	=> TRUE
				);
				//var_dump($newdata);die();
				if (isset($data_pengguna[0]['pegawai_nip'])) {
					$con = array(
						'table_name' => 'sch_ref_pegawai',
						'where'	=> array(
							'pegawai_nip' => $data_pengguna[0]['pegawai_nip']
						),
						'last_login'	=> date('Y-m-d H:i:s')
					);
	
					$save = $this->basebe->update($con);
					$this->session->set_userdata($newdata);
				} else {
					redirect('http://intranet.kemendag.go.id');
				}
			}
		} else if ($this->session->userdata('logged_in') == true) {

		} else {
			redirect('http://intranet.kemendag.go.id');
		}
	}

	public function index() 
	{
		
	}
}
