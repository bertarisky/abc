<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class SiteRepeaterTower extends needLogin {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('SiteRepeaterTowerModel');
		$this->load->helper('url');
        $this->load->library('session');
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->SiteRepeaterTowerModel->search($searchParams);
		}else{

			$model = $this->SiteRepeaterTowerModel->all();
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
				'kontrak' => $this->input->post('kontrak'),
				'jenis' => $this->input->post('jenis'),
				'tinggi' => $this->input->post('tinggi'),
				'milik' => $this->input->post('milik'),
			];
			//JIKA SUBMIT DATA
			if ($this->SiteRepeaterTowerModel->save($data)){
				redirect($this->router->fetch_class().'/view/'.$this->db->insert_id()); 
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
		needLogin();

		$model=$this->SiteRepeaterTowerModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kontrak' => $this->input->post('kontrak'),
				'jenis' => $this->input->post('jenis'),
				'tinggi' => $this->input->post('tinggi'),
				'milik' => $this->input->post('milik'),
			];
			
			if ($this->SiteRepeaterTowerModel->update($model)){
				redirect($this->router->fetch_class().'/index'); 
			}
			else{
				$alert ="input data gagal";
			} 
		}
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/edit',[
			'model' => $model,
			'alert' => $alert
		]);
		$this->load->view('footer');
	}

	public function view($id){
		$data['model']=$this->SiteRepeaterTowerModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->SiteRepeaterTowerModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}