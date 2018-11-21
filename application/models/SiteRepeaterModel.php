<?php 
require_once 'BaseModel.php';
require_once 'AlatSiteRepeaterModel.php';
 
class SiteRepeaterModel extends BaseModel{

	public $table_name = 'site_repeater';

	
	public function search($searchParams)
	{
		$this->db->select("site_repeater.*, pemeliharaan_site_repeater.waktu, pemeliharaan_site_repeater.kegiatan, pemeliharaan_site_repeater.hasil, pemeliharaan_site_repeater.personil_pelaksana");
		$this->db->from($this->table_name);
		$this->db->join('pemeliharaan_site_repeater', 'site_repeater.id = pemeliharaan_site_repeater.id_tabel', 'left');
		unset($searchParams['search']); //SEMENTARA
		foreach ($searchParams as $key => $value) {
			if ($value != '') {
				$this->db->like($key, $value);
			}
		}

		return $this->db->get()->result_array();
	}

	public function getSelter($id){
		$a = $this->db->get('site_repeater_selter', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_selter', $id)->result_array()[0];
		}
		return [];
	}

	public function getTower($id){
		$a = $this->db->get('site_repeater_tower', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_tower', $id)->result_array()[0];
			}
		return [];
	}

	public function getGenset($id){
		$a = $this->db->get('site_repeater_genset', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_genset', $id)->result_array()[0];
			}
		return [];
	}

	public function getUps($id){
		$a = $this->db->get('site_repeater_ups', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_ups', $id)->result_array()[0];
			}
		return [];
	}

	public function getBatere($id){
		$a = $this->db->get('site_repeater_batere', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_batere', $id)->result_array()[0];
			}
		return [];
	}

	public function getRak($id){
		$a = $this->db->get('site_repeater_rak', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_rak', $id)->result_array()[0];
			}
		return [];
	}

	public function getKontak($id){
		$a = $this->db->get('site_repeater_kontak', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_kontak', $id)->result_array()[0];
			}
		return [];
	}

	public function getPemeliharaan($id){
		$a = $this->db->get('site_repeater_pemeliharaan', $id)->result_array();
		if (isset($a[0])) {
			return $this->db->get('site_repeater_pemeliharaan', $id)->result_array()[0];
			}
		return [];
	}

	public function getChilds($id_site_repeater){
		$site_repeater = $this->get($id_site_repeater);

		$model = $site_repeater;
		$childs['selter'] = $this->SiteRepeaterModel->getSelter($model['id_selter']);
		$childs['tower'] = $this->SiteRepeaterModel->getTower($model['id_tower']);
		$childs['genset'] = $this->SiteRepeaterModel->getGenset($model['id_genset']);
		$childs['ups'] = $this->SiteRepeaterModel->getUps($model['id_ups']);
		$childs['batere'] = $this->SiteRepeaterModel->getBatere($model['id_batere']);
		$childs['rak'] = $this->SiteRepeaterModel->getRak($model['id_rak']);
		$childs['kontak'] = $this->SiteRepeaterModel->getKontak($model['id_kontak']);
		$childs['pemeliharaan'] = $this->SiteRepeaterModel->getPemeliharaan($model['id_pemeliharaan']);

		return $childs;
	}

}
