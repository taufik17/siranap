<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'obat/tampil_dataobat';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'obat';
		$isi['data']		= $this->db->query("SELECT * FROM obat ORDER BY nama_obat ASC");
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'obat/form_tambahobat';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'tambah obat';
		$isi['kode_obat']		= '';
		$isi['nama_obat']		= '';
		$isi['jenis_obat']		= '';
		$isi['tempat_simpan']	= '';
		$isi['kedaluwarsa']		= '';
		$isi['harga_obat']		= '';
		$this->load->view('tampilan_home',$isi);
	}

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'obat/form_tambahobat';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'Edit data obat';

		$key = $this->uri->segment(3);
		$this->db->where('kode_obat',$key);
		$query = $this->db->get('obat');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['kode_obat']		= $row->kode_obat;
				$isi['nama_obat']		= $row->nama_obat;
				$isi['jenis_obat']		= $row->jenis_obat;
				$isi['tempat_simpan']	= $row->tempat_simpan;
				$isi['kedaluwarsa']		= $row->kedaluwarsa;
				$isi['harga_obat']		= $row->harga_obat;
			}
		}
		else
		{
			$isi['kode_obat']		= '';
			$isi['nama_obat']		= '';
			$isi['jenis_obat']		= '';
			$isi['tempat_simpan']	= '';
			$isi['kedaluwarsa']		= '';
			$isi['harga_obat']		= '';
		}

		$this->load->view('tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		$key = $this->input->post('kode_obat');
		$data['kode_obat']		= $this->input->post('kode_obat');
		$data['nama_obat']		= $this->input->post('nama_obat');
		$data['jenis_obat']		= $this->input->post('jenis_obat');
		$data['tempat_simpan']	= $this->input->post('tempat_simpan');
		$data['kedaluwarsa']	= $this->input->post('kedaluwarsa');
		$data['harga_obat']		= $this->input->post('harga_obat');

		$this->load->model('model_obat');
		$query = $this->model_obat->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_obat->getupdate($key,$data);
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
			$this->model_obat->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('obat/tambah');
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();
		$this->load->model('model_obat');

		$key = $this->uri->segment(3);
		$this->db->where('kode_obat',$key);
		$query = $this->db->get('obat');
		if($query->num_rows()>0)
		{
			$this->model_obat->getdelete($key);
		}
		redirect('obat');
	}
}
