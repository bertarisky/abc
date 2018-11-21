<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class SiteRepeater extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('SiteRepeaterModel');
		$this->load->model('SiteRepeaterSelterModel');
		$this->load->model('SiteRepeaterTowerModel');
		$this->load->model('SiteRepeaterGensetModel');
		$this->load->model('SiteRepeaterUpsModel');
		$this->load->model('SiteRepeaterBatereModel');
		$this->load->model('SiteRepeaterRakModel');
		$this->load->model('SiteRepeaterPemeliharaanModel');
		$this->load->model('SiteRepeaterKontakModel');
		$this->load->helper('url');
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->SiteRepeaterModel->search($searchParams);
		}else{

			$model = $this->SiteRepeaterModel->all();
		}

		$temp = $model;
		foreach ($temp as $key => $value) {
			$childs = $this->SiteRepeaterModel->getChilds($value['id']);
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

	public function add(){
		needLogin();

		if ($this->input->post('simpan') == 'simpan'){

			$data = [
				'nama_site' => $this->input->post('nama_site'),
				'alamat' => $this->input->post('alamat'),
				'koordinat' => $this->input->post('koordinat'),
				'elevasi' => $this->input->post('elevasi'),
				'jln_akses' => $this->input->post('jln_akses'),
				'grounding' => $this->input->post('grounding'),
				'coverage' => $this->input->post('coverage'),
				'id_selter' => $this->input->post('id_selter'),
				'id_tower' => $this->input->post('id_tower'),
				'id_genset' => $this->input->post('id_genset'),
				'id_ups' => $this->input->post('id_ups'),
				'id_batere' => $this->input->post('id_batere'),
				'id_rak' => $this->input->post('id_rak'),
				'id_pemeliharaan' => $this->input->post('id_pemeliharaan'),
				'id_kontak' => $this->input->post('id_kontak'),
			];
			//JIKA SUBMIT DATA
			if ($this->SiteRepeaterModel->save($data)){

				redirect($this->router->fetch_class().'/view/'.$this->db->insert_id()); 
			}
			else{
				$alert ="Input Data Gagal";
			} 
		}

		$masterdata=[];

		$masterdata['selters']=$this->SiteRepeaterSelterModel->all();
		$masterdata['towers']=$this->SiteRepeaterTowerModel->all();
		$masterdata['gensets']=$this->SiteRepeaterGensetModel->all();
		$masterdata['ups']=$this->SiteRepeaterUpsModel->all();
		$masterdata['bateres']=$this->SiteRepeaterBatereModel->all();
		$masterdata['raks']=$this->SiteRepeaterRakModel->all();
		$masterdata['pemeliharaans']=$this->SiteRepeaterPemeliharaanModel->all();
		$masterdata['kontaks']=$this->SiteRepeaterKontakModel->all();

		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/add', [
			'masterdata' => $masterdata
		]);
		$this->load->view('footer');
	}

	public function edit($id){
		needLogin();

		$model=$this->SiteRepeaterModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'nama_site' => $this->input->post('nama_site'),
				'alamat' => $this->input->post('alamat'),
				'koordinat' => $this->input->post('koordinat'),
				'elevasi' => $this->input->post('elevasi'),
				'jln_akses' => $this->input->post('jln_akses'),
				'grounding' => $this->input->post('grounding'),
				'coverage' => $this->input->post('coverage'),
				'id_selter' => $this->input->post('id_selter'),
				'id_tower' => $this->input->post('id_tower'),
				'id_genset' => $this->input->post('id_genset'),
				'id_ups' => $this->input->post('id_ups'),
				'id_batere' => $this->input->post('id_batere'),
				'id_rak' => $this->input->post('id_rak'),
				'id_pemeliharaan' => $this->input->post('id_pemeliharaan'),
				'id_kontak' => $this->input->post('id_kontak'),
			];
			
			if ($this->SiteRepeaterModel->update($model) || true){ //SEMENTARA

				redirect($this->router->fetch_class().'/index'); 
			}
			else{
				$alert ="input data gagal";
			} 
		}

		$masterdata['selters'] = $this->SiteRepeaterSelterModel->all();
		$masterdata['towers'] = $this->SiteRepeaterTowerModel->all();
		$masterdata['gensets'] = $this->SiteRepeaterGensetModel->all();
		$masterdata['ups']=$this->SiteRepeaterUpsModel->all();
		$masterdata['bateres']=$this->SiteRepeaterBatereModel->all();
		$masterdata['raks']=$this->SiteRepeaterRakModel->all();
		$masterdata['pemeliharaans']=$this->SiteRepeaterPemeliharaanModel->all();
		$masterdata['kontaks']=$this->SiteRepeaterKontakModel->all();


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
		$data['model']=$this->SiteRepeaterModel->get($id);
		$model = $data['model'];
		$childs['selter'] = $this->SiteRepeaterModel->getSelter($model['id_selter']);
		$childs['tower'] = $this->SiteRepeaterModel->getTower($model['id_tower']);
		$childs['genset'] = $this->SiteRepeaterModel->getGenset($model['id_genset']);
		$childs['ups'] = $this->SiteRepeaterModel->getUps($model['id_ups']);
		$childs['batere'] = $this->SiteRepeaterModel->getBatere($model['id_batere']);
		$childs['rak'] = $this->SiteRepeaterModel->getRak($model['id_rak']);
		$childs['kontak'] = $this->SiteRepeaterModel->getKontak($model['id_kontak']);
		$childs['pemeliharaan'] = $this->SiteRepeaterModel->getPemeliharaan($model['id_pemeliharaan']);

		foreach ($childs as $key => $value) {
			$data['model'][$key] = $value;
		}

		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->SiteRepeaterModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}