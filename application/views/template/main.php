<?php


$this->load->view('template/header', $judul, $data);
$this->load->view($content, $data);
$this->load->view('template/footer', $topping);
