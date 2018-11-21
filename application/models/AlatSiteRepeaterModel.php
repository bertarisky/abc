<?php 
require_once 'BaseModel.php';
require_once 'SiteRepeaterModel.php';
 
class AlatSiteRepeaterModel extends BaseModel{

	public $table_name = 'alat_site_repeater';

	
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

	public function getBySiteRepeater($id){
		return $this->db->get_where($this->table_name,['id_site_repeater'=>$id])->result_array();
	}

	public function deleteBySiteRepeater($id){
		return $this->db->delete($this->table_name,['id_site_repeater'=>$id]);
	}

	public function siteRepeater(){
		$siteRepeater = new SiteRepeaterModel();
		return $siteRepeater->get($this->id_site_repeater);
	}

}
