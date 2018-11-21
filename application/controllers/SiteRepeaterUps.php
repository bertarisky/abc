<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class SiteRepeaterUps extends needLogin {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('SiteRepeaterUpsModel');
		$this->load->helper('url');
        $this->load->library('session');
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->SiteRepeaterUpsModel->search($searchParams);
		}else{

			$model = $this->SiteRepeaterUpsModel->all();
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
				'nomor' => $this->input->post('nomor'),
				'kontrak' => $this->input->post('kontrak'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'seri' => $this->input->post('seri'),
				'kapasitas' => $this->input->post('kapasitas'),
				'milik' => $this->input->post('milik'),
			];
			//JIKA SUBMIT DATA
			if ($this->SiteRepeaterUpsModel->save($data)){
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

		$model=$this->SiteRepeaterUpsModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'nomor' => $this->input->post('nomor'),
				'kontrak' => $this->input->post('kontrak'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'seri' => $this->input->post('seri'),
				'kapasitas' => $this->input->post('kapasitas'),
				'milik' => $this->input->post('milik'),
			];
			
			if ($this->SiteRepeaterUpsModel->update($model)){
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
		$data['model']=$this->SiteRepeaterUpsModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->SiteRepeaterUpsModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}