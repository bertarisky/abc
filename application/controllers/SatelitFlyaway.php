<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class SatelitFlyaway extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('SatelitFlyawayModel');
		$this->load->model('PemeliharaanModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->SatelitFlyawayModel->search($searchParams);
		}else{

			$model = $this->SatelitFlyawayModel->all();
		}	


		//PREPARE DATA PEMELIHARAAN
		$data_pemeliharaan = $this->PemeliharaanModel->allByMasterTable('satelit_flyaway');

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

				'antena_merk' => $this->input->post('antena_merk'),
				'antena_jenis' => $this->input->post('antena_jenis'),
				'antena_ukuran' => $this->input->post('antena_ukuran'),
				'antena_kondisi_bb' => $this->input->post('antena_kondisi_bb'),
				'antena_kondisi_rr' => $this->input->post('antena_kondisi_rr'),
				'antena_kondisi_rb' => $this->input->post('antena_kondisi_rb'),

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

				'codec_merk' => $this->input->post('codec_merk'),
				'codec_jenis' => $this->input->post('codec_jenis'),
				'codec_seri' => $this->input->post('codec_seri'),
				'codec_versi' => $this->input->post('codec_versi'),
				'codec_kondisi_bb' => $this->input->post('codec_kondisi_bb'),
				'codec_kondisi_rr' => $this->input->post('codec_kondisi_rr'),
				'codec_kondisi_rb' => $this->input->post('codec_kondisi_rb'),

				'kamera_merk' => $this->input->post('kamera_merk'),
				'kamera_jenis' => $this->input->post('kamera_jenis'),
				'kamera_seri' => $this->input->post('kamera_seri'),
				'kamera_kondisi_bb' => $this->input->post('kamera_kondisi_bb'),
				'kamera_kondisi_rr' => $this->input->post('kamera_kondisi_rr'),
				'kamera_kondisi_rb' => $this->input->post('kamera_kondisi_rb'),

				'televisi_merk' => $this->input->post('televisi_merk'),
				'televisi_jenis' => $this->input->post('televisi_jenis'),
				'televisi_seri' => $this->input->post('televisi_seri'),
				'televisi_kondisi_bb' => $this->input->post('televisi_kondisi_bb'),
				'televisi_kondisi_rr' => $this->input->post('televisi_kondisi_rr'),
				'televisi_kondisi_rb' => $this->input->post('televisi_kondisi_rb'),

				'laptop_merk' => $this->input->post('laptop_merk'),
				'laptop_jenis' => $this->input->post('laptop_jenis'),
				'laptop_seri' => $this->input->post('laptop_seri'),
				'laptop_kondisi_bb' => $this->input->post('laptop_kondisi_bb'),
				'laptop_kondisi_rr' => $this->input->post('laptop_kondisi_rr'),
				'laptop_kondisi_rb' => $this->input->post('laptop_kondisi_rb'),
			];
			//JIKA SUBMIT DATA
			if ($this->SatelitFlyawayModel->save($data)){

				//SIMPAN DATA PEMELIHARAAN
				$id_tabel = $this->db->insert_id();

				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id_tabel;
				$data_pemeliharaan['nama_tabel'] = 'satelit_flyaway';
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

		$model=$this->SatelitFlyawayModel->get($id);
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

				'antena_merk' => $this->input->post('antena_merk'),
				'antena_jenis' => $this->input->post('antena_jenis'),
				'antena_ukuran' => $this->input->post('antena_ukuran'),
				'antena_kondisi_bb' => $this->input->post('antena_kondisi_bb'),
				'antena_kondisi_rr' => $this->input->post('antena_kondisi_rr'),
				'antena_kondisi_rb' => $this->input->post('antena_kondisi_rb'),

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

				'codec_merk' => $this->input->post('codec_merk'),
				'codec_jenis' => $this->input->post('codec_jenis'),
				'codec_seri' => $this->input->post('codec_seri'),
				'codec_versi' => $this->input->post('codec_versi'),
				'codec_kondisi_bb' => $this->input->post('codec_kondisi_bb'),
				'codec_kondisi_rr' => $this->input->post('codec_kondisi_rr'),
				'codec_kondisi_rb' => $this->input->post('codec_kondisi_rb'),

				'kamera_merk' => $this->input->post('kamera_merk'),
				'kamera_jenis' => $this->input->post('kamera_jenis'),
				'kamera_seri' => $this->input->post('kamera_seri'),
				'kamera_kondisi_bb' => $this->input->post('kamera_kondisi_bb'),
				'kamera_kondisi_rr' => $this->input->post('kamera_kondisi_rr'),
				'kamera_kondisi_rb' => $this->input->post('kamera_kondisi_rb'),

				'televisi_merk' => $this->input->post('televisi_merk'),
				'televisi_jenis' => $this->input->post('televisi_jenis'),
				'televisi_seri' => $this->input->post('televisi_seri'),
				'televisi_kondisi_bb' => $this->input->post('televisi_kondisi_bb'),
				'televisi_kondisi_rr' => $this->input->post('televisi_kondisi_rr'),
				'televisi_kondisi_rb' => $this->input->post('televisi_kondisi_rb'),

				'laptop_merk' => $this->input->post('laptop_merk'),
				'laptop_jenis' => $this->input->post('laptop_jenis'),
				'laptop_seri' => $this->input->post('laptop_seri'),
				'laptop_kondisi_bb' => $this->input->post('laptop_kondisi_bb'),
				'laptop_kondisi_rr' => $this->input->post('laptop_kondisi_rr'),
				'laptop_kondisi_rb' => $this->input->post('laptop_kondisi_rb'),
			];

			
				$this->SatelitFlyawayModel->update($model);

				$this->PemeliharaanModel->deleteByMasterTable($id, $this->SatelitFlyawayModel->table_name);
				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id;
				$data_pemeliharaan['nama_tabel'] = 'satelit_flyaway';
				$this->PemeliharaanModel->save($data_pemeliharaan);


				redirect($this->router->fetch_class().'/index'); 
		}
		
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'pemeliharaan' => $this->PemeliharaanModel->getByMasterTable($id, $this->SatelitFlyawayModel->table_name),
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){

		$data['model']= $this->SatelitFlyawayModel->get($id);
		$data['pemeliharaan'] = $this->PemeliharaanModel->getByMasterTable($id, $this->SatelitFlyawayModel->table_name);

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->SatelitFlyawayModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}