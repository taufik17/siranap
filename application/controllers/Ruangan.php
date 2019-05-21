<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'ruangan/tampil_dataruangan';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'ruangan';
		$isi['data']		= $this->db->query("SELECT * FROM ruangan");
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'ruangan/form_tambahruangan';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'tambah ruangan';
		$isi['nama_ruangan']	= '';
		$isi['kelas']			= '';
		$isi['tarif_ruangan']	= '';
		$this->load->view('tampilan_home',$isi);
	}

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	= 'ruangan/form_tambahruangan';
		$isi['judul']		= 'Entitas';
		$isi['sub_judul']	= 'Edit Data Ruangan';

		$key = $this->uri->segment(3);
		$this->db->where('nama_ruangan',$key);
		$query = $this->db->get('ruangan');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['nama_ruangan']	= $row->nama_ruangan;
				$isi['kelas']			= $row->kelas;
				$isi['tarif_ruangan']	= $row->tarif_ruangan;
			}
		}
		else
		{
			$isi['nama_ruangan']	= '';
			$isi['kelas']			= '';
			$isi['tarif_ruangan']	= '';
		}

		$this->load->view('tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		$key = $this->input->post('nama_ruangan');
		$data['nama_ruangan']	= $this->input->post('nama_ruangan');
		$data['kelas']			= $this->input->post('kelas');
		$data['tarif_ruangan']	= $this->input->post('tarif_ruangan');

		$this->load->model('model_ruangan');
		$query = $this->model_ruangan->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_ruangan->getupdate($key,$data);
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
			$this->model_ruangan->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('ruangan/tambah');
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();
		$this->load->model('model_ruangan');

		$key = $this->uri->segment(3);
		$this->db->where('nama_ruangan',$key);
		$query = $this->db->get('ruangan');
		if($query->num_rows()>0)
		{
			$this->model_ruangan->getdelete($key);
		}
		redirect('ruangan');
	}
}
