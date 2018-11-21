<?php 
require_once 'BaseModel.php';
 
class RadioFixedModel extends BaseModel{

	public $table_name = 'radio_fixed';

	
	public function search($searchParams)
	{
		$this->db->select("radio_fixed.*, pemeliharaan_radio_fixed.waktu, pemeliharaan_radio_fixed.kegiatan, pemeliharaan_radio_fixed.hasil, pemeliharaan_radio_fixed.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_radio_fixed', 'radio_fixed.id = pemeliharaan_radio_fixed.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
