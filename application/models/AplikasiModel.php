<?php 
require_once 'BaseModel.php';
 
class AplikasiModel extends BaseModel{

	public $table_name = 'aplikasi';

	
	public function search($searchParams)
	{
		$this->db->select("aplikasi.*, pemeliharaan_aplikasi.waktu, pemeliharaan_aplikasi.kegiatan, pemeliharaan_aplikasi.hasil, pemeliharaan_aplikasi.personil_pelaksana");

		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_aplikasi', 'aplikasi.id = pemeliharaan_aplikasi.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
