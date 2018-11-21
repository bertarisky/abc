<?php 
require_once 'BaseModel.php';
 
class DataCenterAcModel extends BaseModel{

	public $table_name = 'data_center_ac';

	
	public function search($searchParams)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

}
