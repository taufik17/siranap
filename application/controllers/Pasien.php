<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'pasien/tampil_datapasien';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'pasien';
		$isi['data']		= $this->db->query("SELECT * FROM pasien ORDER BY nama_pasien ASC");
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'pasien/form_tambahpasien';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'tambah pasien';
		$isi['NIK']				= '';
		$isi['nama_pasien']			= '';
		$isi['alamat']			= '';
		$isi['ttl']				= '';
		$isi['jenis_kelamin']	= '';
		$isi['usia']			= '';
		$isi['penyakit']		= '';
		$isi['no_telp']			= '';
		$this->load->view('tampilan_home',$isi);
	}

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'pasien/form_tambahpasien';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'Edit Data Pasien';

		$key = $this->uri->segment(3);
		$this->db->where('NIK',$key);
		$query = $this->db->get('pasien');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['NIK']				= $row->NIK;
				$isi['nama_pasien']		= $row->nama_pasien;
				$isi['alamat']			= $row->alamat;
				$isi['ttl']				= $row->ttl;
				$isi['jenis_kelamin']	= $row->jenis_kelamin;
				$isi['usia']			= $row->usia;
				$isi['penyakit']		= $row->penyakit;
				$isi['no_telp']			= $row->no_telp;
			}
		}
		else
		{
			$isi['NIK']				= '';
			$isi['nama_pasien']			= '';
			$isi['alamat']			= '';
			$isi['ttl']				= '';
			$isi['jenis_kelamin']	= '';
			$isi['usia']			= '';
			$isi['penyakit']		= '';
			$isi['no_telp']			= '';
		}

		$this->load->view('tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		$key = $this->input->post('NIK');
		$data['NIK']			= $this->input->post('NIK');
		$data['nama_pasien']	= $this->input->post('nama_pasien');
		$data['alamat']			= $this->input->post('alamat');
		$data['ttl']			= $this->input->post('ttl');
		$data['jenis_kelamin']	= $this->input->post('jenis_kelamin');
		$data['usia']			= $this->input->post('usia');
		$data['penyakit']		= $this->input->post('penyakit');
		$data['no_telp']		= $this->input->post('no_telp');

		$this->load->model('model_pasien');
		$query = $this->model_pasien->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_pasien->getupdate($key,$data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses diupdate </div>');
		}
		else
		{
			$this->model_pasien->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('pasien/tambah');
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();
		$this->load->model('model_pasien');

		$key = $this->uri->segment(3);
		$this->db->where('NIK',$key);
		$query = $this->db->get('pasien');
		if($query->num_rows()>0)
		{
			$this->model_pasien->getdelete($key);
		}
		redirect('pasien');
	}
}
