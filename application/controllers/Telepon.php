<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Telepon extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('TeleponModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->TeleponModel->search($searchParams);
		}else{

			$model = $this->TeleponModel->all();
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
				'kesatuan' => $this->input->post('kesatuan'),
				'no_telepon' => $this->input->post('no_telepon'),
				'pengguna' => $this->input->post('pengguna'),
				'posisi_node' => $this->input->post('posisi_node'),
				'perawatan' => $this->input->post('perawatan'),	
			];
			//JIKA SUBMIT DATA
			if ($this->TeleponModel->save($data)){
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

		$model=$this->TeleponModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				'no_telepon' => $this->input->post('no_telepon'),
				'pengguna' => $this->input->post('pengguna'),
				'posisi_node' => $this->input->post('posisi_node'),
				'perawatan' => $this->input->post('perawatan'),	
			];
			
			if ($this->TeleponModel->update($model)){
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
		$data['telepon']=$this->TeleponModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->TeleponModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}