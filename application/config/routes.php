<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Setting';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// surat tugas
$route['surat-tugas']   = 'spt/index';

// laporan
$route['laporan']               = 'laporan/index';
$route['laporan/rekapitulasi']  = 'laporan/recapitulation';

// settings menu
$route['settings/umum']         = 'setting/umum';
$route['settings/umum/json']    = 'setting/getUmum_json';
$route['settings/format-nomor'] = 'setting/format_nomor';
$route['settings/pengguna']     = 'setting/pengguna';


