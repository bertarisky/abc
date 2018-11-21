<?php 
require_once 'BaseModel.php';
 
class RadioMobilModel extends BaseModel{

	public $table_name = 'radio_mobil';

	
	public function search($searchParams)
	{
		$this->db->select("radio_mobil.*, pemeliharaan_radio_mobil.waktu, pemeliharaan_radio_mobil.kegiatan, pemeliharaan_radio_mobil.hasil, pemeliharaan_radio_mobil.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_radio_mobil', 'radio_mobil.id = pemeliharaan_radio_mobil.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
