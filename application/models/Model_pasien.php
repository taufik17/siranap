<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pasien extends CI_model {

	public function getdata($key)
	{
		$this->db->where('NIK',$key);
		$hasil = $this->db->get('pasien');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('NIK',$key);
		$this->db->update('pasien',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('pasien',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('NIK',$key);
		$this->db->delete('pasien');
	}

}
