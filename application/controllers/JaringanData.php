<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class JaringanData extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('JaringanDataModel');
		$this->load->model('PemeliharaanModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->JaringanDataModel->search($searchParams);
		}else{

			$model = $this->JaringanDataModel->all();
		}	


		//PREPARE DATA PEMELIHARAAN
		$data_pemeliharaan = $this->PemeliharaanModel->allByMasterTable('jaringan_data');

		foreach ($data_pemeliharaan as $value) {
			$pemeliharaan[$value['id_tabel']] = $value;
		}


		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/index', [
			'model' => $model,
			'pemeliharaan' => $pemeliharaan
		]);
		$this->load->view('footer');

	}

	public function add(){

		if ($this->input->post('simpan') == 'simpan'){

			

			$data = [
				'kesatuan' => $this->input->post('kesatuan'),
				'nama_perangkat' => $this->input->post('nama_perangkat'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'seri' => $this->input->post('seri'),
				'versi' => $this->input->post('versi'),
				'posisi' => $this->input->post('posisi'),
				'rak' => $this->input->post('rak'),
				'kondisi_bb' => $this->input->post('kondisi_bb'),
				'kondisi_rr' => $this->input->post('kondisi_rr'),
				'kondisi_rb' => $this->input->post('kondisi_rb'),
			];
			//JIKA SUBMIT DATA
			if ($this->JaringanDataModel->save($data)){

				//SIMPAN DATA PEMELIHARAAN
				$id_tabel = $this->db->insert_id();

				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id_tabel;
				$data_pemeliharaan['nama_tabel'] = 'jaringan_data';
				$this->PemeliharaanModel->save($data_pemeliharaan);

				//END SIMPAN DATA PEMELIHARAAN

				redirect($this->router->fetch_class().'/view/'.$id_tabel); 
			}
			else{
				$alert ="Input Data Gagal";
			} 
		}
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/add');
		$this->load->view('footer');
	}

	public function edit($id){

		$model=$this->JaringanDataModel->get($id);
		if(!$model){
			redirect($this->router->fetch_class().'/index'); 
		}
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				'nama_perangkat' => $this->input->post('nama_perangkat'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'seri' => $this->input->post('seri'),
				'versi' => $this->input->post('versi'),
				'posisi' => $this->input->post('posisi'),
				'rak' => $this->input->post('rak'),
				'kondisi_bb' => $this->input->post('kondisi_bb'),
				'kondisi_rr' => $this->input->post('kondisi_rr'),
				'kondisi_rb' => $this->input->post('kondisi_rb'),
			];

			
				$this->JaringanDataModel->update($model);

				$this->PemeliharaanModel->deleteByMasterTable($id, $this->JaringanDataModel->table_name);
				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id;
				$data_pemeliharaan['nama_tabel'] = 'jaringan_data';
				$this->PemeliharaanModel->save($data_pemeliharaan);


				redirect($this->router->fetch_class().'/index'); 
		}
		
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'pemeliharaan' => $this->PemeliharaanModel->getByMasterTable($id, $this->JaringanDataModel->table_name),
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){

		$data['model']= $this->JaringanDataModel->get($id);
		$data['pemeliharaan'] = $this->PemeliharaanModel->getByMasterTable($id, $this->JaringanDataModel->table_name);

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->JaringanDataModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}