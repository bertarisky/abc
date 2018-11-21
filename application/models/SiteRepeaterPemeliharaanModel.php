<?php 
require_once 'BaseModel.php';
 
class SiteRepeaterPemeliharaanModel extends BaseModel{

	public $table_name = 'site_repeater_pemeliharaan';

	
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
