<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Gdg extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('GdgModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->GdgModel->search($searchParams);
		}else{

			$model = $this->GdgModel->all();
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
				'type_gdg' => $this->input->post('type_gdg'),
				'no_seri' => $this->input->post('no_seri'),
				'versi_firmware' => $this->input->post('versi_firmware'),
				'band' => $this->input->post('band'),
				'daya' => $this->input->post('daya'),
				'kontrak' => $this->input->post('kontrak'),
				'keterangan' => $this->input->post('keterangan'),
			];
			//JIKA SUBMIT DATA
			if ($this->GdgModel->save($data)){
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

		$model=$this->GdgModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'nama_barang' => $this->input->post('nama_barang'),
				'merk' => $this->input->post('merk'),
				'type_gdg' => $this->input->post('type_gdg'),
				'no_seri' => $this->input->post('no_seri'),
				'versi_firmware' => $this->input->post('versi_firmware'),
				'band' => $this->input->post('band'),
				'daya' => $this->input->post('daya'),
				'kontrak' => $this->input->post('kontrak'),
				'keterangan' => $this->input->post('keterangan'),
			];
			
			if ($this->GdgModel->update($model)){
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
		$data['gdg']=$this->GdgModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->GdgModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}