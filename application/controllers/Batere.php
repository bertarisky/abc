<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Batere extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('BatereModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->BatereModel->search($searchParams);
		}else{

			$model = $this->BatereModel->all();
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
				'merk' => $this->input->post('merk'),
				'type' => $this->input->post('type'),
				'no_seri' => $this->input->post('no_seri'),
				'arus' => $this->input->post('arus'),
				'thn_pembuatan' => $this->input->post('thn_pembuatan'),	
				'kontrak' => $this->input->post('kontrak'),
			];
			//JIKA SUBMIT DATA
			if ($this->BatereModel->save($data)){
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

		$model=$this->BatereModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'merk' => $this->input->post('merk'),
				'type' => $this->input->post('type'),
				'no_seri' => $this->input->post('no_seri'),
				'arus' => $this->input->post('arus'),
				'thn_pembuatan' => $this->input->post('thn_pembuatan'),	
				'kontrak' => $this->input->post('kontrak'),
			];
			
			if ($this->BatereModel->update($model)){
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
		$data['batere']=$this->BatereModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->BatereModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}