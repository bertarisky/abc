<?php 
require_once 'BaseModel.php';
 
class RptTrunkingModel extends BaseModel{

	public $table_name = 'rpt_trunking';

	
	public function search($searchParams)
	{
		$this->db->select("rpt_trunking.*, pemeliharaan_rpt_trunking.waktu, pemeliharaan_rpt_trunking.kegiatan, pemeliharaan_rpt_trunking.hasil, pemeliharaan_rpt_trunking.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_rpt_trunking', 'rpt_trunking.id = pemeliharaan_rpt_trunking.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
