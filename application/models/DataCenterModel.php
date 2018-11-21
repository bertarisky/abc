<?php 
require_once 'BaseModel.php';
require_once 'DataCenterBangunanModel.php';
 
class DataCenterModel extends BaseModel{

	public $table_name = 'data_center';

	
	public function search($searchParams)
	{
		$this->db->select("data_center.*, pemeliharaan_data_center.waktu, pemeliharaan_data_center.kegiatan, pemeliharaan_data_center.hasil, pemeliharaan_data_center.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_data_center', 'data_center.id = pemeliharaan_data_center.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

	public function getAc($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_ac WHERE id = ".$data_center['id_ac'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getBangunan($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_bangunan WHERE id = ".$data_center['id_bangunan'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getBatere($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_batere WHERE id = ".$data_center['id_batere'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getCctv($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_cctv WHERE id = ".$data_center['id_kamera_cctv'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getDvr($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_dvr WHERE id = ".$data_center['id_dvr'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getGenset($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_genset WHERE id = ".$data_center['id_genset'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getKontak($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_kontak WHERE id = ".$data_center['id_kontak'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getPemeliharaan($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_pemeliharaan WHERE id = ".$data_center['id_pemeliharaan'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getRak($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_rak WHERE id = ".$data_center['id_rak'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getUps($id){
		$data_center = $this->get($this->id);

		$query		= "SELECT *
					  FROM data_center_ups WHERE id = ".$data_center['id_ups'];
		$result		= $this->db->query($query)->result_array();

		if (isset($result[0])) {
			return $result[0];
		}
		
		return $query;
	}

	public function getChilds($id_data_center){
		$data_center = $this->get($id_data_center);

		$model = $data_center;
		$childs['ac'] = $this->DataCenterModel->getAc($model['id_ac']);
		$childs['bangunan'] = $this->DataCenterModel->getBangunan($model['id_bangunan']);
		$childs['batere'] = $this->DataCenterModel->getBatere($model['id_batere']);
		$childs['cctv'] = $this->DataCenterModel->getCctv($model['id_kamera_cctv']);
		$childs['dvr'] = $this->DataCenterModel->getDvr($model['id_dvr']);
		$childs['genset'] = $this->DataCenterModel->getGenset($model['id_genset']);
		$childs['kontak'] = $this->DataCenterModel->getKontak($model['id_kontak']);
		$childs['pemeliharaan'] = $this->DataCenterModel->getPemeliharaan($model['id_pemeliharaan']);
		$childs['rak'] = $this->DataCenterModel->getRak($model['id_rak']);
		$childs['ups'] = $this->DataCenterModel->getUps($model['id_ups']);

		return $childs;
	}

}
