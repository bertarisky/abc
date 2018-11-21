<?php
require_once 'needLogin.php';
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DataCenterGenset extends needLogin {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('DataCenterGensetModel');
		$this->load->helper('url');
        $this->load->library('session');
	}
 
	public function index(){

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->DataCenterGensetModel->search($searchParams);
		}else{

			$model = $this->DataCenterGensetModel->all();
		}

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/index', [
			'model' => $model,
		]);
		$this->load->view('footer');

	}

	public function pdf(){

		$this->load->library('html2pdf_lib');

		if ($this->input->get('search') == true){
			$searchParams = $this->input->get();
			
			$model = $this->DataCenterGensetModel->search($searchParams);
		}else{

			$model = $this->DataCenterGensetModel->all();
		}

		ob_start();
		    $this->load->view($this->router->fetch_class().'/pdf', [
			'model' => $model,
			
			]);

		    $html = ob_get_contents();
        ob_end_clean();
        
        require_once(APPPATH.'libraries/html2pdf/html2pdf.class.php');
	    $pdf = new HTML2PDF('P','A4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Data_Center_Genset.pdf', 'D');

	}

	public function add(){
		needLogin();

		if ($this->input->post('simpan') == 'simpan'){

			$data = [
				'kontrak' => $this->input->post('kontrak'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'seri' => $this->input->post('seri'),
				'kapasitas' => $this->input->post('kapasitas'),
				'milik' => $this->input->post('milik'),
			];
			//JIKA SUBMIT DATA
			if ($this->DataCenterGensetModel->save($data)){
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
		needLogin();

		$model=$this->DataCenterGensetModel->get($id);
		$alert = '';

		if ($this->input->post('simpan') == 'simpan'){
			//JIKA SUBMIT DATA
			$model = [
				'id' => $id,
				'kontrak' => $this->input->post('kontrak'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'seri' => $this->input->post('seri'),
				'kapasitas' => $this->input->post('kapasitas'),
				'milik' => $this->input->post('milik'),
			];
			
			if ($this->DataCenterGensetModel->update($model)){
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
		$data['model']=$this->DataCenterGensetModel->get($id);
		$data['another'] = 'ifi';

		$this->load->view('header');
		$this->load->view($this->router->fetch_class().'/view', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		if ($this->DataCenterGensetModel->delete($id)) {
			redirect($this->router->fetch_class().'/index'); 
		}else{
			echo "SOMETHING WRONG WHEN DELETING";
		}
	}
 
}