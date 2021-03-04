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
			$token = 'OgAvg2hAI3Ra';
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

		// if ($token_status->login == 1 and $token !== false) #if logged in to intranet
		// {
		// 	$con = array(
		// 		'table_name' => 'sch_pengguna',
		// 		'join' => array(
		// 			array('sch_ref_biro', 'sch_ref_biro.biro_id = sch_pengguna.id_biro', 'left')
		// 		)
		// 	);

		// 	$param['join'] = array(
		// 		array('ref_biro', 'ref_biro.biro_id = pengguna.id_biro', 'left'),
		// 		array('ref_bagian', 'ref_bagian.bagian_id = pengguna.id_bagian')
		// 	);

		// 	$param['where'] = array(array('username', $token_status->nip));
		// 	$param['select'] = 'pengguna.*,ref_biro.biro_nama,ref_bagian.bagian_nama';
		// 	$user	= $this->mm->get('pengguna', $param, 'roar');


		// 	$param2['where'] = array(array('bagian_id', $user['id_bagian']));
		// 	$pengaturan	= $this->mm->get('pengaturan', $param2, 'roar');


		// 	if (count($user) > 0) {
		// 		$newdata = array(
		// 			'id_pengguna'  => $user['id_pengguna'],
		// 			'username'  => $user['username'],
		// 			'id_unit'  => $user['id_biro'],
		// 			'id_bagian'  => $user['id_bagian'],
		// 			'bagian'  => $user['bagian_nama'],
		// 			'biro'  => $user['biro_nama'],
		// 			'provinsi' => $pengaturan['pengaturan_provinsi'],
		// 			'email'     => '',
		// 			'nama'     => $user['nama'],
		// 			'level_super'     => $user['level_super'],
		// 			'level'     => $user['level'],
		// 			'status'     => $user['status'],
		// 			'logged_in' => TRUE
		// 		);
		// 		if (isset($user['id_pengguna'])) {
		// 			$this->mm->save('pengguna', array('last_login' => date('Y-m-d H:i:s')), array('where' => array('id_pengguna' =>  $user['id_pengguna'])));
		// 			$this->session->set_flashdata('pesan_warning', pesan_warning('success', 'Anda berhasil masuk ke sistem'));
		// 			$this->session->set_userdata($newdata);
		// 		}
		// 	} else {
		// 		$param['join'] = array(
		// 			array('ref_biro', 'ref_biro.biro_id = ref_pegawai.biro_id', 'left'),
		// 			array('ref_bagian', 'ref_bagian.bagian_id = ref_pegawai.bagian_id')
		// 		);
		// 		$param['where'] = array(array('pegawai_nip', $token_status->nip));
		// 		$param['select'] = 'ref_pegawai.*,ref_biro.biro_nama,ref_bagian.bagian_nama';
		// 		$user	= $this->mm->get('ref_pegawai', $param, 'roar');


		// 		$newdata = array(
		// 			'id_pengguna'  => $user['pegawai_nip'],
		// 			'username'  => $user['pegawai_nip'],
		// 			'id_unit'  => $user['biro_id'],
		// 			'id_bagian'  => $user['bagian_id'],
		// 			'bagian'  => $user['bagian_nama'],
		// 			'biro'  => $user['biro_nama'],
		// 			'provinsi' => '',
		// 			'email'     => '',
		// 			'nama'     => $user['pegawai_nama'],
		// 			'level'     => 00,
		// 			'status'     => $user['pegawai_status'],
		// 			'logged_in' => TRUE
		// 		);
		// 		//var_dump($newdata);die();
		// 		if (isset($user['pegawai_nip'])) {
		// 			$this->mm->save('ref_pegawai', array('last_login' => date('Y-m-d H:i:s')), array('where' => array('pegawai_nip' =>  $user['pegawai_nip'])));
		// 			$this->session->set_flashdata('pesan_warning', pesan_warning('success', 'Anda berhasil masuk ke sistem'));
		// 			$this->session->set_userdata($newdata);
		// 		} else {
		// 			redirect('http://intranet.kemendag.go.id');
		// 		}
		// 	}
		// } else if ($this->session->userdata('logged_in') == true) {
		// } else {
		// 	redirect('http://intranet.kemendag.go.id');
		// }
	}

	public function index() 
	{
		$this->load->helper('cookie');
		$token = get_cookie('external_intra_token');

		if($token == ''){
			$token = 'OgAvg2hAI3Ra';
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

		$con = array(
			'table_name' => 'sch_pengguna',
			'join' => array(
				array('sch_ref_biro', 'sch_ref_biro.biro_id = sch_pengguna.id_biro'),
				array('ref_bagian', 'ref_bagian.bagian_id = pengguna.id_bagian')
			),
			'where' => array(
				'username' => $token_status->nip
			)
		);

		$data = $this->baseben->get($con);

		pre($data);


	}
}
