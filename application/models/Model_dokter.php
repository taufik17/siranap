<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dokter extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_dokter',$key);
		$hasil = $this->db->get('dokter');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_dokter',$key);
		$this->db->update('dokter',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('dokter',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id_dokter',$key);
		$this->db->delete('dokter');
	}
}
