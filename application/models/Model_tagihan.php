<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tagihan extends CI_model {

	public function gettampildatatagihan()
	{
		$data = "SELECT
				rawat_inap.NIK,
				pasien.nama_pasien,
				dokter.nama,
				dokter.tarif,
				rawat_inap.nama_ruangan,
				ruangan.tarif_ruangan,
				rawat_inap.waktu_masuk,
				rawat_inap.waktu_keluar,
				obat_pasien.kode_obat,
				obat.nama_obat,
				obat.harga_obat
				FROM
				rawat_inap
				INNER JOIN dokter ON rawat_inap.id_dokter = dokter.id_dokter
				INNER JOIN ruangan ON rawat_inap.nama_ruangan = ruangan.nama_ruangan
				INNER JOIN pasien ON rawat_inap.NIK = pasien.NIK
				INNER JOIN obat_pasien ON obat_pasien.NIK = pasien.NIK
				INNER JOIN obat ON obat_pasien.kode_obat = obat.kode_obat";
		return $this->db->query($data);
	}
}
