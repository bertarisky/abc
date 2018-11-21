<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PirantiLunak extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('PirantiLunakModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->PirantiLunakModel->search($searchParams);
		}else{

			$model = $this->PirantiLunakModel->all();
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
				'nama' => $this->input->post('nama'),
				'tentang' => $this->input->post('tentang'),
				'tgl_pembuatan' => $this->input->post('tgl_pembuatan'),
				'penanda_tangan' => $this->input->post('penanda_tangan'),
				'dokumen' => $this->input->post('dokumen'),
				'keterangan' => $this->input->post('keterangan'),
			];
			//JIKA SUBMIT DATA
			if ($this->PirantiLunakModel->save($data)){
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

		$model=$this->PirantiLunakModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'jenis' => $this->input->post('jenis'),
				'nama' => $this->input->post('nama'),
				'tentang' => $this->input->post('tentang'),
				'tgl_pembuatan' => $this->input->post('tgl_pembuatan'),
				'penanda_tangan' => $this->input->post('penanda_tangan'),
				'dokumen' => $this->input->post('dokumen'),
				'keterangan' => $this->input->post('keterangan'),
			];
			
			if ($this->PirantiLunakModel->update($model)){
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
		$data['piranti_lunak']=$this->PirantiLunakModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->PirantiLunakModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}