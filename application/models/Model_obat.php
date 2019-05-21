<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_obat extends CI_model {

	public function getdata($key)
	{
		$this->db->where('kode_obat',$key);
		$hasil = $this->db->get('obat');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kode_obat',$key);
		$this->db->update('obat',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('obat',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('kode_obat',$key);
		$this->db->delete('obat');
	}

}
