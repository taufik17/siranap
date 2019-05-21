<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ruangan extends CI_model {

	public function getdata($key)
	{
		$this->db->where('nama_ruangan',$key);
		$hasil = $this->db->get('ruangan');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('nama_ruangan',$key);
		$this->db->update('ruangan',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('ruangan',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('nama_ruangan',$key);
		$this->db->delete('ruangan');
	}

}
