<?php 
require_once 'BaseModel.php';
 
class SatelitVsatModel extends BaseModel{

	public $table_name = 'satelit_vsat';

	
	public function search($searchParams)
	{
		$this->db->select("satelit_vsat.*, pemeliharaan_satelit_vsat.waktu, pemeliharaan_satelit_vsat.kegiatan, pemeliharaan_satelit_vsat.hasil, pemeliharaan_satelit_vsat.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_satelit_vsat', 'satelit_vsat.id = pemeliharaan_satelit_vsat.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
