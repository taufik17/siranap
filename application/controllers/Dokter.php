<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'dokter/tampil_datadokter';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'dokter';
		$isi['data']		= $this->db->query("SELECT * FROM dokter ORDER BY nama ASC");
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'dokter/form_tambahdokter';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'tambah dokter';
		$isi['id_dokter']		= '';
		$isi['nama']			= '';
		$isi['alamat']			= '';
		$isi['spesialis']		= '';
		$isi['jenis_kelamin']	= '';
		$isi['ttl']				= '';
		$isi['no_telp']			= '';
		$isi['usia']			= '';
		$isi['tarif']			= '';
		$this->load->view('tampilan_home',$isi);
	}

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'dokter/form_tambahdokter';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'Edit Data Dokter';

		$key = $this->uri->segment(3);
		$this->db->where('id_dokter',$key);
		$query = $this->db->get('dokter');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id_dokter']		= $row->id_dokter;
				$isi['nama']			= $row->nama;
				$isi['alamat']			= $row->alamat;
				$isi['spesialis']		= $row->spesialis;
				$isi['jenis_kelamin']	= $row->jenis_kelamin;
				$isi['ttl']				= $row->ttl;
				$isi['no_telp']			= $row->no_telp;
				$isi['usia']			= $row->usia;
				$isi['tarif']			= $row->tarif;
			}
		}
		else
		{
			$isi['id_dokter']		= '';
			$isi['nama']			= '';
			$isi['alamat']			= '';
			$isi['spesialis']		= '';
			$isi['jenis_kelamin']	= '';
			$isi['ttl']				= '';
			$isi['no_telp']			= '';
			$isi['usia']			= '';
			$isi['tarif']			= '';
		}

		$this->load->view('tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		$key = $this->input->post('id_dokter');
		$data['id_dokter']		= $this->input->post('id_dokter');
		$data['nama']			= $this->input->post('nama');
		$data['alamat']			= $this->input->post('alamat');
		$data['spesialis']		= $this->input->post('spesialis');
		$data['jenis_kelamin']	= $this->input->post('jenis_kelamin');
		$data['ttl']			= $this->input->post('ttl');
		$data['no_telp']		= $this->input->post('no_telp');
		$data['usia']			= $this->input->post('usia');
		$data['tarif']			= $this->input->post('tarif');

		$this->load->model('model_dokter');
		$query = $this->model_dokter->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_dokter->getupdate($key,$data);
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
			$this->model_dokter->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('dokter/tambah');
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();
		$this->load->model('model_dokter');

		$key = $this->uri->segment(3);
		$this->db->where('id_dokter',$key);
		$query = $this->db->get('dokter');
		if($query->num_rows()>0)
		{
			$this->model_dokter->getdelete($key);
		}
		redirect('dokter');
	}
}
