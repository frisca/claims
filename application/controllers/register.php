<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Register extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function index()
		{
			$this->load->view('register');
		}

		public function processRegister(){
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'status' => 1,
				'role' => 2
			);
			$row = $this->global_model->insertData('pengguna', $data);
			if($row == true){
				$this->session->set_flashdata('success', 'Anda berhasil daftar');
				redirect(base_url() . 'register/index');
			}else{
				$this->session->set_flashdata('error', 'Anda gagal daftar');
				redirect(base_url() . 'register/index');
			}
		}
	}
?>