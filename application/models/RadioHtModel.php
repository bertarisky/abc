<?php 
require_once 'BaseModel.php';
 
class RadioHtModel extends BaseModel{

	public $table_name = 'radio_ht';

	
	public function search($searchParams)
	{
		$this->db->select("radio_ht.*, pemeliharaan_radio_ht.waktu, pemeliharaan_radio_ht.kegiatan, pemeliharaan_radio_ht.hasil, pemeliharaan_radio_ht.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_radio_ht', 'radio_ht.id = pemeliharaan_radio_ht.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
