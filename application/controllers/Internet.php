<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Internet extends needLogin {
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('InternetModel');
		$this->load->helper('url');
		// $this->load->helper("input");
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->InternetModel->search($searchParams);
		}else{

			$model = $this->InternetModel->all();
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
				'id_pelanggan' => $this->input->post('id_pelanggan'),
				'jenis' => $this->input->post('jenis'),
				'bandwidth' => $this->input->post('bandwidth'),
				'posisi_node' => $this->input->post('posisi_node'),
				'perangkat_last' => $this->input->post('perangkat_last'),
				'biaya_bulanan' => $this->input->post('biaya_bulanan'),
				'pemanfaatan' => $this->input->post('pemanfaatan'),
				'tanggungjwb_pembayaran' => $this->input->post('tanggungjwb_pembayaran'),
				'pemeliharaan' => $this->input->post('pemeliharaan'),	
			];
			//JIKA SUBMIT DATA
			if ($this->InternetModel->save($data)){
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

		$model=$this->InternetModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kesatuan' => $this->input->post('kesatuan'),
				'id_pelanggan' => $this->input->post('id_pelanggan'),
				'jenis' => $this->input->post('jenis'),
				'bandwidth' => $this->input->post('bandwidth'),
				'posisi_node' => $this->input->post('posisi_node'),
				'perangkat_last' => $this->input->post('perangkat_last'),
				'biaya_bulanan' => $this->input->post('biaya_bulanan'),
				'pemanfaatan' => $this->input->post('pemanfaatan'),
				'tanggungjwb_pembayaran' => $this->input->post('tanggungjwb_pembayaran'),
				'pemeliharaan' => $this->input->post('pemeliharaan'),
			];
			
			if ($this->InternetModel->update($model)){
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
		$data['internet']=$this->InternetModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->InternetModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}