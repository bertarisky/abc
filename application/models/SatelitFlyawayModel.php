<?php 
require_once 'BaseModel.php';
 
class SatelitFlyawayModel extends BaseModel{

	public $table_name = 'satelit_flyaway';

	
	public function search($searchParams)
	{
		$this->db->select("satelit_flyaway.*, pemeliharaan_satelit_flyaway.waktu, pemeliharaan_satelit_flyaway.kegiatan, pemeliharaan_satelit_flyaway.hasil, pemeliharaan_satelit_flyaway.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_satelit_flyaway', 'satelit_flyaway.id = pemeliharaan_satelit_flyaway.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
