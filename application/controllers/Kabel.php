<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kabel extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('KabelModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->KabelModel->search($searchParams);
		}else{

			$model = $this->KabelModel->all();
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
				'type_kabel' => $this->input->post('type_kabel'),
				'panjang' => $this->input->post('panjang'),
				'roll' => $this->input->post('roll'),
				'kontrak' => $this->input->post('kontrak'),	
			];
			//JIKA SUBMIT DATA
			if ($this->KabelModel->save($data)){
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

		$model=$this->KabelModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'merk' => $this->input->post('merk'),
				'type_kabel' => $this->input->post('type_kabel'),
				'panjang' => $this->input->post('panjang'),
				'roll' => $this->input->post('roll'),
				'kontrak' => $this->input->post('kontrak'),	
			];
			
			if ($this->KabelModel->update($model)){
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
		$data['kabel']=$this->KabelModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->KabelModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}