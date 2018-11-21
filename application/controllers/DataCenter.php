<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DataCenter extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('DataCenterModel');
		$this->load->model('DataCenterAcModel');
		$this->load->model('DataCenterBangunanModel');
		$this->load->model('DataCenterBatereModel');
		$this->load->model('DataCenterCctvModel');
		$this->load->model('DataCenterDvrModel');
		$this->load->model('DataCenterGensetModel');
		$this->load->model('DataCenterKontakModel');
		$this->load->model('DataCenterPemeliharaanModel');
		$this->load->model('DataCenterRakModel');
		$this->load->model('DataCenterUpsModel');
		$this->load->helper('url');
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->DataCenterModel->search($searchParams);
		}else{

			$model = $this->DataCenterModel->all();
		}

		$temp = $model;
		foreach ($temp as $key => $value) {
			$childs = $this->DataCenterModel->getChilds($value['id']);
			foreach ($childs as $keyd => $value) {
				$model[$key][$keyd] = $value;
			}
		}
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/index', [
			'model' => $model,
			
		]);
		$this->load->view('footer');

	}

	public function pdf(){

		$this->load->library('html2pdf_lib');

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->DataCenterModel->search($searchParams);
		}else{

			$model = $this->DataCenterModel->all();
		}

		$temp = $model;
		foreach ($temp as $key => $value) {
			$childs = $this->DataCenterModel->getChilds($value['id']);
			foreach ($childs as $keyd => $value) {
				$model[$key][$keyd] = $value;
			}
		}

		ob_start();
		    $this->load->view($this->router->fetch_class().'/pdf', [
			'model' => $model,
			
			]);

		    $html = ob_get_contents();
        ob_end_clean();
        
        require_once(APPPATH.'libraries/html2pdf/html2pdf.class.php');
	    $pdf = new HTML2PDF('L','A4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Data_Center.pdf', 'D');

	}


	public function add(){
		needLogin();

		if ($this->input->post('simpan') == 'simpan'){

			$data = [
				'grounding' => $this->input->post('grounding'),
				
				'id_ac' => $this->input->post('id_ac'),
				'id_bangunan' => $this->input->post('id_bangunan'),
				'id_batere' => $this->input->post('id_batere'),
				'id_kamera_cctv' => $this->input->post('id_kamera_cctv'),
				'id_dvr' => $this->input->post('id_dvr'),
				'id_genset' => $this->input->post('id_genset'),
				'id_kontak' => $this->input->post('id_kontak'),
				'id_pemeliharaan' => $this->input->post('id_pemeliharaan'),
				'id_rak' => $this->input->post('id_rak'),
				'id_ups' => $this->input->post('id_ups'),
			];
			//JIKA SUBMIT DATA
			if ($this->DataCenterModel->save($data)){

				redirect($this->router->fetch_class().'/view/'.$this->db->insert_id()); 
			}
			else{
				$alert ="Input Data Gagal";
			} 
		}

		$masterdata=[];

		$masterdata['acs']=$this->DataCenterAcModel->all();
		$masterdata['bangunans']=$this->DataCenterBangunanModel->all();
		$masterdata['bateres']=$this->DataCenterBatereModel->all();
		$masterdata['cctvs']=$this->DataCenterCctvModel->all();
		$masterdata['dvrs']=$this->DataCenterDvrModel->all();
		$masterdata['gensets']=$this->DataCenterGensetModel->all();
		$masterdata['kontaks']=$this->DataCenterKontakModel->all();
		$masterdata['pemeliharaans']=$this->DataCenterPemeliharaanModel->all();
		$masterdata['raks']=$this->DataCenterRakModel->all();
		$masterdata['upss']=$this->DataCenterUpsModel->all();

		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/add', [
			'masterdata' => $masterdata
		]);
		$this->load->view('footer');
	}

	public function edit($id){
		needLogin();

		$model=$this->DataCenterModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'grounding' => $this->input->post('grounding'),

				'id_ac' => $this->input->post('id_ac'),
				'id_bangunan' => $this->input->post('id_bangunan'),
				'id_batere' => $this->input->post('id_batere'),
				'id_kamera_cctv' => $this->input->post('id_kamera_cctv'),
				'id_dvr' => $this->input->post('id_dvr'),
				'id_genset' => $this->input->post('id_genset'),
				'id_kontak' => $this->input->post('id_kontak'),
				'id_pemeliharaan' => $this->input->post('id_pemeliharaan'),
				'id_rak' => $this->input->post('id_rak'),
				'id_ups' => $this->input->post('id_ups'),
			];

			
			if ($this->DataCenterModel->update($model) || true){ //SEMENTARA

				redirect($this->router->fetch_class().'/index'); 
			}
			else{
				$alert ="input data gagal";
			} 
		}

		$masterdata['acs']=$this->DataCenterAcModel->all();
		$masterdata['bangunans']=$this->DataCenterBangunanModel->all();
		$masterdata['bateres']=$this->DataCenterBatereModel->all();
		$masterdata['cctvs']=$this->DataCenterCctvModel->all();
		$masterdata['dvrs']=$this->DataCenterDvrModel->all();
		$masterdata['gensets']=$this->DataCenterGensetModel->all();
		$masterdata['kontaks']=$this->DataCenterKontakModel->all();
		$masterdata['pemeliharaans']=$this->DataCenterPemeliharaanModel->all();
		$masterdata['raks']=$this->DataCenterRakModel->all();
		$masterdata['upss']=$this->DataCenterUpsModel->all();

		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'alert' => $alert,
			'masterdata' => $masterdata,
		]);
		$this->load->view('footer');
	}

	public function view($id){
		$data['model']=$this->DataCenterModel->get($id);
		$model = $data['model'];
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

		foreach ($childs as $key => $value) {
			$data['model'][$key] = $value;
		}

		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->DataCenterModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}