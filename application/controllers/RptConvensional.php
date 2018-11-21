<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class RptConvensional extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('RptConvensionalModel');
		$this->load->model('PemeliharaanModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->RptConvensionalModel->search($searchParams);
		}else{

			$model = $this->RptConvensionalModel->all();
		}	


		//PREPARE DATA PEMELIHARAAN
		$data_pemeliharaan = $this->PemeliharaanModel->allByMasterTable('rpt_convensional');

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
				'site' => $this->input->post('site'),
				
				'rpt_nomor' => $this->input->post('rpt_nomor'),
				'rpt_kontrak' => $this->input->post('rpt_kontrak'),
				'rpt_nama' => $this->input->post('rpt_nama'),
				'rpt_merk' => $this->input->post('rpt_merk'),
				'rpt_jenis' => $this->input->post('rpt_jenis'),
				'rpt_teknologi' => $this->input->post('rpt_teknologi'),
				'rpt_seri' => $this->input->post('rpt_seri'),
				'rpt_versi' => $this->input->post('rpt_versi'),
				'rpt_frek_rx' => $this->input->post('rpt_frek_rx'),
				'rpt_frek_tx' => $this->input->post('rpt_frek_tx'),
				'rpt_tone_rx' => $this->input->post('rpt_tone_rx'),
				'rpt_tone_tx' => $this->input->post('rpt_tone_tx'),
				'rpt_sensitivitas' => $this->input->post('rpt_sensitivitas'),
				'rpt_dayapancar' => $this->input->post('rpt_dayapancar'),
				'rpt_power' => $this->input->post('rpt_power'),
				'rpt_rak' => $this->input->post('rpt_rak'),
				'rpt_kondisi_bb' => $this->input->post('rpt_kondisi_bb'),
				'rpt_kondisi_rr' => $this->input->post('rpt_kondisi_rr'),
				'rpt_kondisi_rb' => $this->input->post('rpt_kondisi_rb'),

				'antena_merk' => $this->input->post('antena_merk'),
				'antena_jenis' => $this->input->post('antena_jenis'),
				'antena_gain' => $this->input->post('antena_gain'),
				'antena_posisi' => $this->input->post('antena_posisi'),
				'antena_kontrak' => $this->input->post('antena_kontrak'),

				'kabel_merk' => $this->input->post('kabel_merk'),
				'kabel_jenis' => $this->input->post('kabel_jenis'),
				'kabel_panjang' => $this->input->post('kabel_panjang'),
				'kabel_kontrak' => $this->input->post('kabel_kontrak'),
			];
			//JIKA SUBMIT DATA
			if ($this->RptConvensionalModel->save($data)){

				//SIMPAN DATA PEMELIHARAAN
				$id_tabel = $this->db->insert_id();

				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id_tabel;
				$data_pemeliharaan['nama_tabel'] = 'rpt_convensional';
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

		$model=$this->RptConvensionalModel->get($id);
		if(!$model){
			redirect($this->router->fetch_class().'/index'); 
		}
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'kesatuan' => $this->input->post('kesatuan'),
				'site' => $this->input->post('site'),
				
				'rpt_nomor' => $this->input->post('rpt_nomor'),
				'rpt_kontrak' => $this->input->post('rpt_kontrak'),
				'rpt_nama' => $this->input->post('rpt_nama'),
				'rpt_merk' => $this->input->post('rpt_merk'),
				'rpt_jenis' => $this->input->post('rpt_jenis'),
				'rpt_teknologi' => $this->input->post('rpt_teknologi'),
				'rpt_seri' => $this->input->post('rpt_seri'),
				'rpt_versi' => $this->input->post('rpt_versi'),
				'rpt_frek_rx' => $this->input->post('rpt_frek_rx'),
				'rpt_frek_tx' => $this->input->post('rpt_frek_tx'),
				'rpt_tone_rx' => $this->input->post('rpt_tone_rx'),
				'rpt_tone_tx' => $this->input->post('rpt_tone_tx'),
				'rpt_sensitivitas' => $this->input->post('rpt_sensitivitas'),
				'rpt_dayapancar' => $this->input->post('rpt_dayapancar'),
				'rpt_power' => $this->input->post('rpt_power'),
				'rpt_rak' => $this->input->post('rpt_rak'),
				'rpt_kondisi_bb' => $this->input->post('rpt_kondisi_bb'),
				'rpt_kondisi_rr' => $this->input->post('rpt_kondisi_rr'),
				'rpt_kondisi_rb' => $this->input->post('rpt_kondisi_rb'),

				'antena_merk' => $this->input->post('antena_merk'),
				'antena_jenis' => $this->input->post('antena_jenis'),
				'antena_gain' => $this->input->post('antena_gain'),
				'antena_posisi' => $this->input->post('antena_posisi'),
				'antena_kontrak' => $this->input->post('antena_kontrak'),

				'kabel_merk' => $this->input->post('kabel_merk'),
				'kabel_jenis' => $this->input->post('kabel_jenis'),
				'kabel_panjang' => $this->input->post('kabel_panjang'),
				'kabel_kontrak' => $this->input->post('kabel_kontrak'),
			];

			
				$this->RptConvensionalModel->update($model);

				$this->PemeliharaanModel->deleteByMasterTable($id, $this->RptConvensionalModel->table_name);
				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id;
				$data_pemeliharaan['nama_tabel'] = 'rpt_convensional';
				$this->PemeliharaanModel->save($data_pemeliharaan);


				redirect($this->router->fetch_class().'/index'); 
		}
		
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'pemeliharaan' => $this->PemeliharaanModel->getByMasterTable($id, $this->RptConvensionalModel->table_name),
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){

		$data['model']= $this->RptConvensionalModel->get($id);
		$data['pemeliharaan'] = $this->PemeliharaanModel->getByMasterTable($id, $this->RptConvensionalModel->table_name);

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->RptConvensionalModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}