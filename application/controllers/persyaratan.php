<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Persyaratan extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
			$this->load->model('persyaratan_model');
		}

		public function index()
		{
			$data['persyaratan'] = $this->persyaratan_model->getLisPersyaratan()->result();
			$this->load->view('persyaratan/index', $data);
		}

		public function add(){
			$condition = array('status' => 1);
			$data['jenis_formulir'] = $this->global_model->getDataByCondition('jenis_formulir', $condition)->result();
			$this->load->view('persyaratan/add', $data);
		}
	}
?>