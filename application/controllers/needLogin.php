<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class needLogin extends CI_Controller {
	public function __construct(){
 		parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('UserModel');
        $this->load->library('session');
        $this->load->helper('userhelper');

	}
}
?>