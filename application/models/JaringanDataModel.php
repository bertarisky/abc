<?php 
require_once 'BaseModel.php';
 
class JaringanDataModel extends BaseModel{

	public $table_name = 'jaringan_data';

	
	public function search($searchParams)
	{
		$this->db->select("jaringan_data.*, pemeliharaan_jaringan_data.waktu, pemeliharaan_jaringan_data.kegiatan, pemeliharaan_jaringan_data.hasil, pemeliharaan_jaringan_data.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_jaringan_data', 'jaringan_data.id = pemeliharaan_jaringan_data.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
