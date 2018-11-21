<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Komputer extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('KomputerModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->KomputerModel->search($searchParams);
		}else{

			$model = $this->KomputerModel->all();
		}

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/index', [
			'model' => $model,
		]);
		$this->load->view('footer');

	}

	public function add(){

		if ($this->input->post('simpan') == 'simpan'){

			$data = [
				'jenis' => $this->input->post('jenis'),
				'no_seri' => $this->input->post('no_seri'),
				'cpu' => $this->input->post('cpu'),
				'memory' => $this->input->post('memory'),
				'harddisk' => $this->input->post('harddisk'),
				'kegunaan' => $this->input->post('kegunaan'),
				'posisi' => $this->input->post('posisi'),
				'kontrak' => $this->input->post('kontrak'),
				'penanggungjawab' => $this->input->post('penanggungjawab'),
				'keterangan' => $this->input->post('keterangan'),	
			];
			//JIKA SUBMIT DATA
			if ($this->KomputerModel->save($data)){
				redirect($this->router->fetch_class().'/view/'.$this->db->insert_id()); 
			}
			else{
				$alert ="input data gagal";
			} 
		}
		//JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/add');
		$this->load->view('footer');
	}

	public function edit($id){

		$model=$this->KomputerModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'jenis' => $this->input->post('jenis'),
				'no_seri' => $this->input->post('no_seri'),
				'cpu' => $this->input->post('cpu'),
				'memory' => $this->input->post('memory'),
				'harddisk' => $this->input->post('harddisk'),
				'kegunaan' => $this->input->post('kegunaan'),
				'posisi' => $this->input->post('posisi'),
				'kontrak' => $this->input->post('kontrak'),
				'penanggungjawab' => $this->input->post('penanggungjawab'),
				'keterangan' => $this->input->post('keterangan'),
			];
			
			if ($this->KomputerModel->update($model)){
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
		$data['komputer']=$this->KomputerModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->KomputerModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}