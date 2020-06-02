<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Jenis_Formulir extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function index()
		{
			$data['jenis_formulir'] = $this->global_model->getAllData('jenis_formulir')->result();
			$this->load->view('jenis-formulir/index', $data);
		}

		public function add(){
			$this->load->view('jenis-formulir/add');
		}

		public function processAdd(){
			$data = array(
				'jenis_formulir' => $this->input->post('jenis_formulir'),
				'status' => $this->input->post('status'),
				'dibuat_oleh' => $this->session->userdata('id'),
				'dibuat_tanggal' => date('Y-m-d')
			);
			$res = $this->global_model->insertData('jenis_formulir', $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data jenis klaim gagal disimpan');
				return redirect(base_url() . 'jenis_formulir/add');
			}
			$this->session->set_flashdata('success', 'Data jenis klaim berhasil disimpan');
			return redirect(base_url() . 'jenis_formulir/index');
		}

		public function detail($id){
			$condition = array(
				'id_jenis' => $id
			);
			$data['jenis_formulir'] = $this->global_model->getDataByCondition('jenis_formulir', $condition)->row();
			$this->load->view('jenis-formulir/detail', $data);
		}

		public function edit($id){
			$condition = array(
				'id_jenis' => $id
			);
			$data['jenis_formulir'] = $this->global_model->getDataByCondition('jenis_formulir', $condition)->row();
			$this->load->view('jenis-formulir/edit', $data);
		}

		public function processEdit($id){
			$condition = array('id_jenis' => $id);
			$data = array(
				'jenis_formulir' => $this->input->post('jenis_formulir'),
				'status' => $this->input->post('status'),
				'diubah_oleh' => $this->session->userdata('id'),
				'diubah_tanggal' => date('Y-m-d')
			);
			$res = $this->global_model->updateData('jenis_formulir', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data jenis klaim gagal diubah');
				return redirect(base_url() . 'jenis_formulir/edit/' . $id);
			}
			$this->session->set_flashdata('success', 'Data jenis klaim berhasil diubah');
			return redirect(base_url() . 'jenis_formulir/index');
		}

		public function delete($id){
			$condition = array(
				'id_jenis' => $id
			);
			$res = $this->global_model->deleteData('jenis_formulir', $condition);
			if($res == false){
				$this->session->set_flashdata('error', 'Data jenis klaim gagal dihapus');
				return redirect(base_url() . 'jenis_formulir/index/' . $id);
			}
			$this->session->set_flashdata('success', 'Data jenis klaim berhasil dihapus');
			return redirect(base_url() . 'jenis_formulir/index');
		}
	}
?>