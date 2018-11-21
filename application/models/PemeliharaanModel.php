<?php 
require_once 'BaseModel.php';
 
class PemeliharaanModel extends BaseModel{

	public $table_name = 'pemeliharaan';

	
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

	public function allByMasterTable($nama_tabel){
		$this->db->select('*');
		$this->db->from('pemeliharaan');
		$this->db->where('nama_tabel', $nama_tabel);

		return $this->db->get()->result_array();
	}


	public function getByMasterTable($id, $nama_tabel){
		$this->db->select('*');
		$this->db->from('pemeliharaan');
		$this->db->where('id_tabel', $id);
		$this->db->where('nama_tabel', $nama_tabel);

		$data = $this->db->get()->result_array();
		if (isset($data[0])) {
			return $data[0];
		}
		return NULL;
	}

	public function deleteByMasterTable($id, $nama_tabel){
		return $this->db->delete($this->table_name,['id_tabel'=>$id, 'nama_tabel' => $nama_tabel]);
	}
}
