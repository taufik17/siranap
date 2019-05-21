<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_tagihan');
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'Tagihan/tampil_datatagihan';
		$isi['judul']		= 'Transaksi';
		$isi['sub_judul']	= 'Tagihan';
		$isi['data']		= $this->Model_tagihan->gettampildatatagihan();
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->load->model('Model_tagihan');
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'Tagihan/form_tambahtagihan';
		$isi['judul']		= 'Transaksi';
		$isi['sub_judul']	= 'Tagihan';
		$this->load->view('tampilan_home',$isi);
	}
}