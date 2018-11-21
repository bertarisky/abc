<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class RadioMobil extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('RadioMobilModel');
		$this->load->model('PemeliharaanModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->RadioMobilModel->search($searchParams);
		}else{

			$model = $this->RadioMobilModel->all();
		}	


		//PREPARE DATA PEMELIHARAAN
		$data_pemeliharaan = $this->PemeliharaanModel->allByMasterTable('radio_mobil');

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
				
				'radio_merk' => $this->input->post('radio_merk'),
				'radio_jenis' => $this->input->post('radio_jenis'),
				'radio_seri' => $this->input->post('radio_seri'),
				'radio_id' => $this->input->post('radio_id'),
				'radio_dayapancar' => $this->input->post('radio_dayapancar'),
				'radio_sensitivitas' => $this->input->post('radio_sensitivitas'),
				'radio_kondisi_bb' => $this->input->post('radio_kondisi_bb'),
				'radio_kondisi_rr' => $this->input->post('radio_kondisi_rr'),
				'radio_kondisi_rb' => $this->input->post('radio_kondisi_rb'),

				'antena_merk' => $this->input->post('antena_merk'),
				'antena_jenis' => $this->input->post('antena_jenis'),
				'antena_seri' => $this->input->post('antena_seri'),
				'antena_gain' => $this->input->post('antena_gain'),
				'antena_kondisi_bb' => $this->input->post('antena_kondisi_bb'),
				'antena_kondisi_rr' => $this->input->post('antena_kondisi_rr'),
				'antena_kondisi_rb' => $this->input->post('antena_kondisi_rb'),

				'no_pol' => $this->input->post('no_pol'),
			];
			//JIKA SUBMIT DATA
			if ($this->RadioMobilModel->save($data)){

				//SIMPAN DATA PEMELIHARAAN
				$id_tabel = $this->db->insert_id();

				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id_tabel;
				$data_pemeliharaan['nama_tabel'] = 'radio_mobil';
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

		$model=$this->RadioMobilModel->get($id);
		if(!$model){
			redirect($this->router->fetch_class().'/index'); 
		}
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				
				'radio_merk' => $this->input->post('radio_merk'),
				'radio_jenis' => $this->input->post('radio_jenis'),
				'radio_seri' => $this->input->post('radio_seri'),
				'radio_id' => $this->input->post('radio_id'),
				'radio_dayapancar' => $this->input->post('radio_dayapancar'),
				'radio_sensitivitas' => $this->input->post('radio_sensitivitas'),
				'radio_kondisi_bb' => $this->input->post('radio_kondisi_bb'),
				'radio_kondisi_rr' => $this->input->post('radio_kondisi_rr'),
				'radio_kondisi_rb' => $this->input->post('radio_kondisi_rb'),

				'antena_merk' => $this->input->post('antena_merk'),
				'antena_jenis' => $this->input->post('antena_jenis'),
				'antena_seri' => $this->input->post('antena_seri'),
				'antena_gain' => $this->input->post('antena_gain'),
				'antena_kondisi_bb' => $this->input->post('antena_kondisi_bb'),
				'antena_kondisi_rr' => $this->input->post('antena_kondisi_rr'),
				'antena_kondisi_rb' => $this->input->post('antena_kondisi_rb'),

				'no_pol' => $this->input->post('no_pol'),
			];

			
				$this->RadioMobilModel->update($model);

				$this->PemeliharaanModel->deleteByMasterTable($id, $this->RadioMobilModel->table_name);
				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id;
				$data_pemeliharaan['nama_tabel'] = 'radio_mobil';
				$this->PemeliharaanModel->save($data_pemeliharaan);


				redirect($this->router->fetch_class().'/index'); 
		}
		
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'pemeliharaan' => $this->PemeliharaanModel->getByMasterTable($id, $this->RadioMobilModel->table_name),
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){

		$data['model']= $this->RadioMobilModel->get($id);
		$data['pemeliharaan'] = $this->PemeliharaanModel->getByMasterTable($id, $this->RadioMobilModel->table_name);

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->RadioMobilModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}