<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profile extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('ProfileModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->ProfileModel->search($searchParams);
		}else{

			$model = $this->ProfileModel->all();
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
				'nama' => $this->input->post('nama'),
				'pangkat' => $this->input->post('pangkat'),
				'nrp' => $this->input->post('nrp'),
				'pendidikan' => $this->input->post('pendidikan'),
				'kejuruan' => $this->input->post('kejuruan'),
				'kompetensi' => $this->input->post('kompetensi'),
				'keterangan' => $this->input->post('keterangan'),
			];
			//JIKA SUBMIT DATA
			if ($this->ProfileModel->save($data)){
				redirect($this->router->fetch_class().'/view/'.$this->db->insert_id()); 
			}
			else{
				$alert ="Input Data Gagal";
			} 
		}
		// JIKA TIDAK SUBMIT DATA
		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/add');
		$this->load->view('footer');
	}

	public function edit($id){

		$model=$this->ProfileModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				'nama' => $this->input->post('nama'),
				'pangkat' => $this->input->post('pangkat'),
				'nrp' => $this->input->post('nrp'),
				'pendidikan' => $this->input->post('pendidikan'),
				'kejuruan' => $this->input->post('kejuruan'),
				'kompetensi' => $this->input->post('kompetensi'),
				'keterangan' => $this->input->post('keterangan'),
			];
			
			if ($this->ProfileModel->update($model)){
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
		$data['profile']=$this->ProfileModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->ProfileModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}