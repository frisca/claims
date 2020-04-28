<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function index()
		{
			$condition = array('role' => 1);
			$data['admin'] = $this->global_model->getDataByCondition('pengguna', $condition)->result();
			$this->load->view('admin/index', $data);
		}

		public function add(){
			$this->load->view('admin/add');
		}
	}
?>