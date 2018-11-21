<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class SatelitVsat extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('SatelitVsatModel');
		$this->load->model('PemeliharaanModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->SatelitVsatModel->search($searchParams);
		}else{

			$model = $this->SatelitVsatModel->all();
		}	


		//PREPARE DATA PEMELIHARAAN
		$data_pemeliharaan = $this->PemeliharaanModel->allByMasterTable('satelit_vsat');

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
				'jenis_antena' => $this->input->post('jenis_antena'),

				'disk_merk' => $this->input->post('disk_merk'),
				'disk_jenis' => $this->input->post('disk_jenis'),
				'disk_ukuran' => $this->input->post('disk_ukuran'),
				'disk_kondisi_bb' => $this->input->post('disk_kondisi_bb'),
				'disk_kondisi_rr' => $this->input->post('disk_kondisi_rr'),
				'disk_kondisi_rb' => $this->input->post('disk_kondisi_rb'),

				'sspa_merk' => $this->input->post('sspa_merk'),
				'sspa_jenis' => $this->input->post('sspa_jenis'),
				'sspa_seri' => $this->input->post('sspa_seri'),
				'sspa_frekuensi' => $this->input->post('sspa_frekuensi'),
				'sspa_daya' => $this->input->post('sspa_daya'),
				'sspa_kondisi_bb' => $this->input->post('sspa_kondisi_bb'),
				'sspa_kondisi_rr' => $this->input->post('sspa_kondisi_rr'),
				'sspa_kondisi_rb' => $this->input->post('sspa_kondisi_rb'),

				'up_merk' => $this->input->post('up_merk'),
				'up_jenis' => $this->input->post('up_jenis'),
				'up_seri' => $this->input->post('up_seri'),
				'up_frekuensi' => $this->input->post('up_frekuensi'),
				'up_daya' => $this->input->post('up_daya'),
				'up_kondisi_bb' => $this->input->post('up_kondisi_bb'),
				'up_kondisi_rr' => $this->input->post('up_kondisi_rr'),
				'up_kondisi_rb' => $this->input->post('up_kondisi_rb'),

				'lna_merk' => $this->input->post('lna_merk'),
				'lna_jenis' => $this->input->post('lna_jenis'),
				'lna_seri' => $this->input->post('lna_seri'),
				'lna_frekuensi' => $this->input->post('lna_frekuensi'),
				'lna_kondisi_bb' => $this->input->post('lna_kondisi_bb'),
				'lna_kondisi_rr' => $this->input->post('lna_kondisi_rr'),
				'lna_kondisi_rb' => $this->input->post('lna_kondisi_rb'),

				'feedhorn_merk' => $this->input->post('feedhorn_merk'),
				'feedhorn_jenis' => $this->input->post('feedhorn_jenis'),
				'feedhorn_seri' => $this->input->post('feedhorn_seri'),
				'feedhorn_kondisi_bb' => $this->input->post('feedhorn_kondisi_bb'),
				'feedhorn_kondisi_rr' => $this->input->post('feedhorn_kondisi_rr'),
				'feedhorn_kondisi_rb' => $this->input->post('feedhorn_kondisi_rb'),

				'modem_merk' => $this->input->post('modem_merk'),
				'modem_jenis' => $this->input->post('modem_jenis'),
				'modem_seri' => $this->input->post('modem_seri'),
				'modem_kondisi_bb' => $this->input->post('modem_kondisi_bb'),
				'modem_kondisi_rr' => $this->input->post('modem_kondisi_rr'),
				'modem_kondisi_rb' => $this->input->post('modem_kondisi_rb'),
			];
			//JIKA SUBMIT DATA
			if ($this->SatelitVsatModel->save($data)){

				//SIMPAN DATA PEMELIHARAAN
				$id_tabel = $this->db->insert_id();

				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id_tabel;
				$data_pemeliharaan['nama_tabel'] = 'satelit_vsat';
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

		$model=$this->SatelitVsatModel->get($id);
		if(!$model){
			redirect($this->router->fetch_class().'/index'); 
		}
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				'jenis_antena' => $this->input->post('jenis_antena'),

				'disk_merk' => $this->input->post('disk_merk'),
				'disk_jenis' => $this->input->post('disk_jenis'),
				'disk_ukuran' => $this->input->post('disk_ukuran'),
				'disk_kondisi_bb' => $this->input->post('disk_kondisi_bb'),
				'disk_kondisi_rr' => $this->input->post('disk_kondisi_rr'),
				'disk_kondisi_rb' => $this->input->post('disk_kondisi_rb'),

				'sspa_merk' => $this->input->post('sspa_merk'),
				'sspa_jenis' => $this->input->post('sspa_jenis'),
				'sspa_seri' => $this->input->post('sspa_seri'),
				'sspa_frekuensi' => $this->input->post('sspa_frekuensi'),
				'sspa_daya' => $this->input->post('sspa_daya'),
				'sspa_kondisi_bb' => $this->input->post('sspa_kondisi_bb'),
				'sspa_kondisi_rr' => $this->input->post('sspa_kondisi_rr'),
				'sspa_kondisi_rb' => $this->input->post('sspa_kondisi_rb'),

				'up_merk' => $this->input->post('up_merk'),
				'up_jenis' => $this->input->post('up_jenis'),
				'up_seri' => $this->input->post('up_seri'),
				'up_frekuensi' => $this->input->post('up_frekuensi'),
				'up_daya' => $this->input->post('up_daya'),
				'up_kondisi_bb' => $this->input->post('up_kondisi_bb'),
				'up_kondisi_rr' => $this->input->post('up_kondisi_rr'),
				'up_kondisi_rb' => $this->input->post('up_kondisi_rb'),

				'lna_merk' => $this->input->post('lna_merk'),
				'lna_jenis' => $this->input->post('lna_jenis'),
				'lna_seri' => $this->input->post('lna_seri'),
				'lna_frekuensi' => $this->input->post('lna_frekuensi'),
				'lna_kondisi_bb' => $this->input->post('lna_kondisi_bb'),
				'lna_kondisi_rr' => $this->input->post('lna_kondisi_rr'),
				'lna_kondisi_rb' => $this->input->post('lna_kondisi_rb'),

				'feedhorn_merk' => $this->input->post('feedhorn_merk'),
				'feedhorn_jenis' => $this->input->post('feedhorn_jenis'),
				'feedhorn_seri' => $this->input->post('feedhorn_seri'),
				'feedhorn_kondisi_bb' => $this->input->post('feedhorn_kondisi_bb'),
				'feedhorn_kondisi_rr' => $this->input->post('feedhorn_kondisi_rr'),
				'feedhorn_kondisi_rb' => $this->input->post('feedhorn_kondisi_rb'),

				'modem_merk' => $this->input->post('modem_merk'),
				'modem_jenis' => $this->input->post('modem_jenis'),
				'modem_seri' => $this->input->post('modem_seri'),
				'modem_kondisi_bb' => $this->input->post('modem_kondisi_bb'),
				'modem_kondisi_rr' => $this->input->post('modem_kondisi_rr'),
				'modem_kondisi_rb' => $this->input->post('modem_kondisi_rb'),
			];

			
				$this->SatelitVsatModel->update($model);

				$this->PemeliharaanModel->deleteByMasterTable($id, $this->SatelitVsatModel->table_name);
				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id;
				$data_pemeliharaan['nama_tabel'] = 'satelit_vsat';
				$this->PemeliharaanModel->save($data_pemeliharaan);


				redirect($this->router->fetch_class().'/index'); 
		}
		
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'pemeliharaan' => $this->PemeliharaanModel->getByMasterTable($id, $this->SatelitVsatModel->table_name),
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){

		$data['model']= $this->SatelitVsatModel->get($id);
		$data['pemeliharaan'] = $this->PemeliharaanModel->getByMasterTable($id, $this->SatelitVsatModel->table_name);

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->SatelitVsatModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}