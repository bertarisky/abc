<?php


class BaseModel extends CI_Model{

	public  $id = NULL;

	public function all(){
		return $this->db->get($this->table_name)->result_array();
	}

	public function get($id){
		$this->id = $id;
		$data = $this->db->get_where($this->table_name,['id'=>$id])->result_array();
		if (isset($data[0])) {
			return $data[0];
		}
		return NULL;
	}

	public function save($data){
		return $this->db->insert($this->table_name,$data);
	}

	public function update($data){
		$this->db->where('id',$data['id']);
		$this->db->update($this->table_name,$data);
		
		return $this->db->affected_rows();
	}

	public function delete($id){
		return $this->db->delete($this->table_name,['id'=>$id]);
	}

}


?>