<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class RptTrunking extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('RptTrunkingModel');
		$this->load->model('PemeliharaanModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->RptTrunkingModel->search($searchParams);
		}else{

			$model = $this->RptTrunkingModel->all();
		}

		//PREPARE DATA PEMELIHARAAN
		$data_pemeliharaan = $this->PemeliharaanModel->allByMasterTable('rpt_trunking');

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
				
				'rbs_kontrak' => $this->input->post('rbs_kontrak'),
				'rbs_rbs' => $this->input->post('rbs_rbs'),
				'rbs_merk' => $this->input->post('rbs_merk'),
				'rbs_jenis' => $this->input->post('rbs_jenis'),
				'rbs_teknologi' => $this->input->post('rbs_teknologi'),
				'rbs_seri' => $this->input->post('rbs_seri'),
				'rbs_versi' => $this->input->post('rbs_versi'),
				'rbs_setup_sensitivitas' => $this->input->post('rbs_setup_sensitivitas'),
				'rbs_setup_dayapancar' => $this->input->post('rbs_setup_dayapancar'),
				'rbs_setup_bandwith' => $this->input->post('rbs_setup_bandwith'),
				'rbs_rak' => $this->input->post('rbs_rak'),
				'rbs_kondisi_bb' => $this->input->post('rbs_kondisi_bb'),
				'rbs_kondisi_rr' => $this->input->post('rbs_kondisi_rr'),
				'rbs_kondisi_rb' => $this->input->post('rbs_kondisi_rb'),

				'router_merk' => $this->input->post('router_merk'),
				'router_seri' => $this->input->post('router_seri'),
				'router_versi' => $this->input->post('router_versi'),
				'router_kontrak' => $this->input->post('router_kontrak'),
				'router_rak' => $this->input->post('router_rak'),
				'router_kondisi_bb' => $this->input->post('router_kondisi_bb'),
				'router_kondisi_rr' => $this->input->post('router_kondisi_rr'),
				'router_kondisi_rb' => $this->input->post('router_kondisi_rb'),

				'switch_merk' => $this->input->post('switch_merk'),
				'switch_seri' => $this->input->post('switch_seri'),
				'switch_versi' => $this->input->post('switch_versi'),
				'switch_kontrak' => $this->input->post('switch_kontrak'),
				'switch_rak' => $this->input->post('switch_rak'),
				'switch_kondisi_bb' => $this->input->post('switch_kondisi_bb'),
				'switch_kondisi_rr' => $this->input->post('switch_kondisi_rr'),
				'switch_kondisi_rb' => $this->input->post('switch_kondisi_rb'),

				'antenarx_merk' => $this->input->post('antenarx_merk'),
				'antenarx_seri' => $this->input->post('antenarx_seri'),
				'antenarx_gain' => $this->input->post('antenarx_gain'),
				'antenarx_posisi' => $this->input->post('antenarx_posisi'),
				'antenarx_pola' => $this->input->post('antenarx_pola'),
				'antenarx_kontrak' => $this->input->post('antenarx_kontrak'),
				'antenarx_kondisi_bb' => $this->input->post('antenarx_kondisi_bb'),
				'antenarx_kondisi_rr' => $this->input->post('antenarx_kondisi_rr'),
				'antenarx_kondisi_rb' => $this->input->post('antenarx_kondisi_rb'),

				'antenatx_merk' => $this->input->post('antenatx_merk'),
				'antenatx_seri' => $this->input->post('antenatx_seri'),
				'antenatx_gain' => $this->input->post('antenatx_gain'),
				'antenatx_posisi' => $this->input->post('antenatx_posisi'),
				'antenatx_pola' => $this->input->post('antenatx_pola'),
				'antenatx_kontrak' => $this->input->post('antenatx_kontrak'),
				'antenatx_kondisi_bb' => $this->input->post('antenatx_kondisi_bb'),
				'antenatx_kondisi_rr' => $this->input->post('antenatx_kondisi_rr'),
				'antenatx_kondisi_rb' => $this->input->post('antenatx_kondisi_rb'),

				'tta_merk' => $this->input->post('tta_merk'),
				'tta_seri' => $this->input->post('tta_seri'),
				'tta_gain' => $this->input->post('tta_gain'),
				'tta_posisi' => $this->input->post('tta_posisi'),
				'tta_kontrak' => $this->input->post('tta_kontrak'),
				'tta_kondisi_bb' => $this->input->post('tta_kondisi_bb'),
				'tta_kondisi_rr' => $this->input->post('tta_kondisi_rr'),
				'tta_kondisi_rb' => $this->input->post('tta_kondisi_rb'),

				'rmc_merk' => $this->input->post('rmc_merk'),
				'rmc_seri' => $this->input->post('rmc_seri'),
				'rmc_channel' => $this->input->post('rmc_channel'),
				'rmc_rak' => $this->input->post('rmc_rak'),
				'rmc_kontrak' => $this->input->post('rmc_kontrak'),
				'rmc_kondisi_bb' => $this->input->post('rmc_kondisi_bb'),
				'rmc_kondisi_rr' => $this->input->post('rmc_kondisi_rr'),
				'rmc_kondisi_rb' => $this->input->post('rmc_kondisi_rb'),

				'txcobiner_merk' => $this->input->post('txcobiner_merk'),
				'txcobiner_seri' => $this->input->post('txcobiner_seri'),
				'txcobiner_channel' => $this->input->post('txcobiner_channel'),
				'txcobiner_rak' => $this->input->post('txcobiner_rak'),
				'txcobiner_kontrak' => $this->input->post('txcobiner_kontrak'),
				'txcobiner_kondisi_bb' => $this->input->post('txcobiner_kondisi_bb'),
				'txcobiner_kondisi_rr' => $this->input->post('txcobiner_kondisi_rr'),
				'txcobiner_kondisi_rb' => $this->input->post('txcobiner_kondisi_rb'),

				'kabelrx_merk' => $this->input->post('kabelrx_merk'),
				'kabelrx_jenis' => $this->input->post('kabelrx_jenis'),
				'kabelrx_panjang' => $this->input->post('kabelrx_panjang'),
				'kabelrx_kontrak' => $this->input->post('kabelrx_kontrak'),
				'kabelrx_kondisi_bb' => $this->input->post('kabelrx_kondisi_bb'),
				'kabelrx_kondisi_rr' => $this->input->post('kabelrx_kondisi_rr'),
				'kabelrx_kondisi_rb' => $this->input->post('kabelrx_kondisi_rb'),

				'kabeltx_merk' => $this->input->post('kabeltx_merk'),
				'kabeltx_jenis' => $this->input->post('kabeltx_jenis'),
				'kabeltx_panjang' => $this->input->post('kabeltx_panjang'),
				'kabeltx_kontrak' => $this->input->post('kabeltx_kontrak'),
				'kabeltx_kondisi_bb' => $this->input->post('kabeltx_kondisi_bb'),
				'kabeltx_kondisi_rr' => $this->input->post('kabeltx_kondisi_rr'),
				'kabeltx_kondisi_rb' => $this->input->post('kabeltx_kondisi_rb'),
			];
			//JIKA SUBMIT DATA
			if ($this->RptTrunkingModel->save($data)){

				//SIMPAN DATA PEMELIHARAAN
				$id_tabel = $this->db->insert_id();

				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id_tabel;
				$data_pemeliharaan['nama_tabel'] = 'rpt_trunking';
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

		$model=$this->RptTrunkingModel->get($id);
		if(!$model){
			redirect($this->router->fetch_class().'/index'); 
		}
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'kesatuan' => $this->input->post('kesatuan'),
				'site' => $this->input->post('site'),
				
				'rbs_kontrak' => $this->input->post('rbs_kontrak'),
				'rbs_rbs' => $this->input->post('rbs_rbs'),
				'rbs_merk' => $this->input->post('rbs_merk'),
				'rbs_jenis' => $this->input->post('rbs_jenis'),
				'rbs_teknologi' => $this->input->post('rbs_teknologi'),
				'rbs_seri' => $this->input->post('rbs_seri'),
				'rbs_versi' => $this->input->post('rbs_versi'),
				'rbs_setup_sensitivitas' => $this->input->post('rbs_setup_sensitivitas'),
				'rbs_setup_dayapancar' => $this->input->post('rbs_setup_dayapancar'),
				'rbs_setup_bandwith' => $this->input->post('rbs_setup_bandwith'),
				'rbs_rak' => $this->input->post('rbs_rak'),
				'rbs_kondisi_bb' => $this->input->post('rbs_kondisi_bb'),
				'rbs_kondisi_rr' => $this->input->post('rbs_kondisi_rr'),
				'rbs_kondisi_rb' => $this->input->post('rbs_kondisi_rb'),

				'router_merk' => $this->input->post('router_merk'),
				'router_seri' => $this->input->post('router_seri'),
				'router_versi' => $this->input->post('router_versi'),
				'router_kontrak' => $this->input->post('router_kontrak'),
				'router_rak' => $this->input->post('router_rak'),
				'router_kondisi_bb' => $this->input->post('router_kondisi_bb'),
				'router_kondisi_rr' => $this->input->post('router_kondisi_rr'),
				'router_kondisi_rb' => $this->input->post('router_kondisi_rb'),

				'switch_merk' => $this->input->post('switch_merk'),
				'switch_seri' => $this->input->post('switch_seri'),
				'switch_versi' => $this->input->post('switch_versi'),
				'switch_kontrak' => $this->input->post('switch_kontrak'),
				'switch_rak' => $this->input->post('switch_rak'),
				'switch_kondisi_bb' => $this->input->post('switch_kondisi_bb'),
				'switch_kondisi_rr' => $this->input->post('switch_kondisi_rr'),
				'switch_kondisi_rb' => $this->input->post('switch_kondisi_rb'),

				'antenarx_merk' => $this->input->post('antenarx_merk'),
				'antenarx_seri' => $this->input->post('antenarx_seri'),
				'antenarx_gain' => $this->input->post('antenarx_gain'),
				'antenarx_posisi' => $this->input->post('antenarx_posisi'),
				'antenarx_pola' => $this->input->post('antenarx_pola'),
				'antenarx_kontrak' => $this->input->post('antenarx_kontrak'),
				'antenarx_kondisi_bb' => $this->input->post('antenarx_kondisi_bb'),
				'antenarx_kondisi_rr' => $this->input->post('antenarx_kondisi_rr'),
				'antenarx_kondisi_rb' => $this->input->post('antenarx_kondisi_rb'),

				'antenatx_merk' => $this->input->post('antenatx_merk'),
				'antenatx_seri' => $this->input->post('antenatx_seri'),
				'antenatx_gain' => $this->input->post('antenatx_gain'),
				'antenatx_posisi' => $this->input->post('antenatx_posisi'),
				'antenatx_pola' => $this->input->post('antenatx_pola'),
				'antenatx_kontrak' => $this->input->post('antenatx_kontrak'),
				'antenatx_kondisi_bb' => $this->input->post('antenatx_kondisi_bb'),
				'antenatx_kondisi_rr' => $this->input->post('antenatx_kondisi_rr'),
				'antenatx_kondisi_rb' => $this->input->post('antenatx_kondisi_rb'),

				'tta_merk' => $this->input->post('tta_merk'),
				'tta_seri' => $this->input->post('tta_seri'),
				'tta_gain' => $this->input->post('tta_gain'),
				'tta_posisi' => $this->input->post('tta_posisi'),
				'tta_kontrak' => $this->input->post('tta_kontrak'),
				'tta_kondisi_bb' => $this->input->post('tta_kondisi_bb'),
				'tta_kondisi_rr' => $this->input->post('tta_kondisi_rr'),
				'tta_kondisi_rb' => $this->input->post('tta_kondisi_rb'),

				'rmc_merk' => $this->input->post('rmc_merk'),
				'rmc_seri' => $this->input->post('rmc_seri'),
				'rmc_channel' => $this->input->post('rmc_channel'),
				'rmc_rak' => $this->input->post('rmc_rak'),
				'rmc_kontrak' => $this->input->post('rmc_kontrak'),
				'rmc_kondisi_bb' => $this->input->post('rmc_kondisi_bb'),
				'rmc_kondisi_rr' => $this->input->post('rmc_kondisi_rr'),
				'rmc_kondisi_rb' => $this->input->post('rmc_kondisi_rb'),

				'txcobiner_merk' => $this->input->post('txcobiner_merk'),
				'txcobiner_seri' => $this->input->post('txcobiner_seri'),
				'txcobiner_channel' => $this->input->post('txcobiner_channel'),
				'txcobiner_rak' => $this->input->post('txcobiner_rak'),
				'txcobiner_kontrak' => $this->input->post('txcobiner_kontrak'),
				'txcobiner_kondisi_bb' => $this->input->post('txcobiner_kondisi_bb'),
				'txcobiner_kondisi_rr' => $this->input->post('txcobiner_kondisi_rr'),
				'txcobiner_kondisi_rb' => $this->input->post('txcobiner_kondisi_rb'),

				'kabelrx_merk' => $this->input->post('kabelrx_merk'),
				'kabelrx_jenis' => $this->input->post('kabelrx_jenis'),
				'kabelrx_panjang' => $this->input->post('kabelrx_panjang'),
				'kabelrx_kontrak' => $this->input->post('kabelrx_kontrak'),
				'kabelrx_kondisi_bb' => $this->input->post('kabelrx_kondisi_bb'),
				'kabelrx_kondisi_rr' => $this->input->post('kabelrx_kondisi_rr'),
				'kabelrx_kondisi_rb' => $this->input->post('kabelrx_kondisi_rb'),

				'kabeltx_merk' => $this->input->post('kabeltx_merk'),
				'kabeltx_jenis' => $this->input->post('kabeltx_jenis'),
				'kabeltx_panjang' => $this->input->post('kabeltx_panjang'),
				'kabeltx_kontrak' => $this->input->post('kabeltx_kontrak'),
				'kabeltx_kondisi_bb' => $this->input->post('kabeltx_kondisi_bb'),
				'kabeltx_kondisi_rr' => $this->input->post('kabeltx_kondisi_rr'),
				'kabeltx_kondisi_rb' => $this->input->post('kabeltx_kondisi_rb'),
			];

			
				$this->RptTrunkingModel->update($model);

				$this->PemeliharaanModel->deleteByMasterTable($id, $this->RptTrunkingModel->table_name);
				$data_pemeliharaan = $this->input->post('pemeliharaan');
				$data_pemeliharaan['id_tabel'] = $id;
				$data_pemeliharaan['nama_tabel'] = 'rpt_trunking';
				$this->PemeliharaanModel->save($data_pemeliharaan);


				redirect($this->router->fetch_class().'/index'); 
		}
		
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'pemeliharaan' => $this->PemeliharaanModel->getByMasterTable($id, $this->RptTrunkingModel->table_name),
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){

		$data['model']= $this->RptTrunkingModel->get($id);
		$data['pemeliharaan'] = $this->PemeliharaanModel->getByMasterTable($id, $this->RptTrunkingModel->table_name);

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->RptTrunkingModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}