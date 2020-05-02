<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Pertanyaan_Detail extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function index()
		{
			$data['pertanyaan'] = $this->global_model->getAllData('pertanyaan')->result();
			$this->load->view('pertanyaan/index', $data);
		}
	}
?>