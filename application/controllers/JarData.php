<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class JarData extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('JardataModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->JardataModel->search($searchParams);
		}else{

			$model = $this->JardataModel->all();
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
				'nama_barang' => $this->input->post('nama_barang'),
				'merk' => $this->input->post('merk'),
				'type_jardata' => $this->input->post('type_jardata'),
				'no_seri' => $this->input->post('no_seri'),
				'versi_firmware' => $this->input->post('versi_firmware'),
				'keterangan' => $this->input->post('keterangan'),	
			];
			//JIKA SUBMIT DATA
			if ($this->JardataModel->save($data)){
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

		$model=$this->JardataModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'nama_barang' => $this->input->post('nama_barang'),
				'merk' => $this->input->post('merk'),
				'type_jardata' => $this->input->post('type_jardata'),
				'no_seri' => $this->input->post('no_seri'),
				'versi_firmware' => $this->input->post('versi_firmware'),
				'keterangan' => $this->input->post('keterangan'),
			];
			
			if ($this->JardataModel->update($model)){
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
		$data['jardata']=$this->JardataModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->JardataModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}