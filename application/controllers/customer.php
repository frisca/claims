<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Customer extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function index()
		{
			$condition = array('role' => 2);
			$data['user'] = $this->global_model->getDataByCondition('pengguna', $condition)->result();
			$this->load->view('customer/index', $data);
		}

		public function add(){
			$this->load->view('customer/add');
		}

		public function processAdd(){
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
					'email' => $this->input->post('email'),
				'status' => $this->input->post('status'),
				'role' => 2
			);
			$res = $this->global_model->insertData('pengguna', $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data customer gagal disimpan');
				return redirect(base_url() . 'customer/add');
			}
			$this->session->set_flashdata('success', 'Data customer berhasil disimpan');
			return redirect(base_url() . 'customer/index');
		}

		public function edit($id){
			$condition = array(
				'id_pengguna' => $id
			);
			$data['user'] = $this->global_model->getDataByCondition('pengguna', $condition)->row();
			$this->load->view('customer/edit', $data);
		}

		public function processEdit($id){
			$condition = array(
				'id_pengguna' => $id
			);

			$user = $this->global_model->getDataByCondition('pengguna', $condition)->row();
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => (empty($this->input->post('password'))) ? $user->password : md5($this->input->post('password')),
					'email' => $this->input->post('email'),
				'status' => $this->input->post('status'),
				'role' => 2
			);

			$res = $this->global_model->updateData('pengguna', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data customer gagal diubah');
				return redirect(base_url() . 'customer/edit/' . $id);
			}
			$this->session->set_flashdata('success', 'Data customer berhasil diubah');
			return redirect(base_url() . 'customer/index');
		}

		public function detail($id){
			$condition = array(
				'id_pengguna' => $id
			);
			$data['user'] = $this->global_model->getDataByCondition('pengguna', $condition)->row();
			$this->load->view('customer/detail', $data);
		}

		public function delete($id){
			$condition = array(
				'id_pengguna' => $id
			);
			$res = $this->global_model->deleteData('pengguna', $condition);
			if($res == false){
				$this->session->set_flashdata('error', 'Data customer gagal dihapus');
				return redirect(base_url() . 'customer/index/' . $id);
			}
			$this->session->set_flashdata('success', 'Data customer berhasil dihapus');
			return redirect(base_url() . 'customer/index');
		}
	}
?>