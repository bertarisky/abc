<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Server extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('ServerModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->ServerModel->search($searchParams);
		}else{

			$model = $this->ServerModel->all();
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
				'merk' => $this->input->post('merk'),
				'type_server' => $this->input->post('type_server'),
				'no_seri' => $this->input->post('no_seri'),
				'cpu' => $this->input->post('cpu'),
				'memory' => $this->input->post('memory'),
				'internal_hardisk' => $this->input->post('internal_hardisk'),
				'pemanfaatan' => $this->input->post('pemanfaatan'),
				'kondisi_bb' => $this->input->post('kondisi_bb'),
				'kondisi_rr' => $this->input->post('kondisi_rr'),
				'kondisi_rb' => $this->input->post('kondisi_rb'),
				'akses_waktu' => $this->input->post('akses_waktu'),
				'akses_kegiatan' => $this->input->post('akses_kegiatan'),
				'akses_pelaksana' => $this->input->post('akses_pelaksana'),
				'kontrak' => $this->input->post('kontrak'),
			];
			//JIKA SUBMIT DATA
			if ($this->ServerModel->save($data)){
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

		$model=$this->ServerModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				'merk' => $this->input->post('merk'),
				'type_server' => $this->input->post('type_server'),
				'no_seri' => $this->input->post('no_seri'),
				'cpu' => $this->input->post('cpu'),
				'memory' => $this->input->post('memory'),
				'internal_hardisk' => $this->input->post('internal_hardisk'),
				'pemanfaatan' => $this->input->post('pemanfaatan'),
				'kondisi_bb' => $this->input->post('kondisi_bb'),
				'kondisi_rr' => $this->input->post('kondisi_rr'),
				'kondisi_rb' => $this->input->post('kondisi_rb'),
				'akses_waktu' => $this->input->post('akses_waktu'),
				'akses_kegiatan' => $this->input->post('akses_kegiatan'),
				'akses_pelaksana' => $this->input->post('akses_pelaksana'),
				'kontrak' => $this->input->post('kontrak'),
			];
			
			if ($this->ServerModel->update($model)){
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
		$data['server']=$this->ServerModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->ServerModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}