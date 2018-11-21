<?php 
require_once 'BaseModel.php';
 
class RptConvensionalModel extends BaseModel{

	public $table_name = 'rpt_convensional';

	
	public function search($searchParams)
	{
		$this->db->select("rpt_convensional.*, pemeliharaan_rpt_convensional.waktu, pemeliharaan_rpt_convensional.kegiatan, pemeliharaan_rpt_convensional.hasil, pemeliharaan_rpt_convensional.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_rpt_convensional', 'rpt_convensional.id = pemeliharaan_rpt_convensional.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
