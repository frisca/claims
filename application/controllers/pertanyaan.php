<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Pertanyaan extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function index()
		{
			$data['pertanyaan'] = $this->global_model->getAllData('pertanyaan')->result();
			$this->load->view('pertanyaan/index', $data);
		}

		public function add(){
			$this->load->view('pertanyaan/add');
		}

		public function processAdd(){
			$data = array(
				'pertanyaan' => $this->input->post('pertanyaan'),
				'urutan' => $this->input->post('urutan'),
				'status' => $this->input->post('status'),
				'dibuat_oleh' => $this->session->userdata('id'),
				'dibuat_tanggal' => date('Y-m-d'),
				'pilihan_jawaban_1' => $this->input->post('pilihan_jawaban_1'),
				'pilihan_jawaban_2' => $this->input->post('pilihan_jawaban_2')
			);
			$res = $this->global_model->insertData('pertanyaan', $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data pertanyaan gagal disimpan');
				return redirect(base_url() . 'pertanyaan/add');
			}
			$this->session->set_flashdata('success', 'Data pertanyaan berhasil disimpan');
			return redirect(base_url() . 'pertanyaan/index');
		}

		public function edit($id){
			$condition = array(
				'id_pertanyaan' => $id
			);
			$data['pertanyaan'] = $this->global_model->getDataByCondition('pertanyaan', $condition)->row();
			$this->load->view('pertanyaan/edit', $data);
		}

		public function processEdit($id){
			$condition = array('id_pertanyaan' => $id);
			$data = array(
				'pertanyaan' => $this->input->post('pertanyaan'),
				'status' => $this->input->post('status'),
				'urutan' => $this->input->post('urutan'),
				'diubah_oleh' => $this->session->userdata('id'),
				'diubah_tanggal' => date('Y-m-d'),
				'pilihan_jawaban_1' => $this->input->post('pilihan_jawaban_1'),
				'pilihan_jawaban_2' => $this->input->post('pilihan_jawaban_2')
			);
			$res = $this->global_model->updateData('pertanyaan', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data pertanyaan gagal diubah');
				return redirect(base_url() . 'pertanyaan/edit/' . $id);
			}
			$this->session->set_flashdata('success', 'Data pertanyaan berhasil diubah');
			return redirect(base_url() . 'pertanyaan/index');
		}

		public function delete($id){
			$condition = array(
				'id_pertanyaan' => $id
			);
			$res = $this->global_model->deleteData('pertanyaan', $condition);
			if($res == false){
				$this->session->set_flashdata('error', 'Data pertanyaan gagal dihapus');
				return redirect(base_url() . 'pertanyaan/index/' . $id);
			}
			$this->session->set_flashdata('success', 'Data pertanyaan berhasil dihapus');
			return redirect(base_url() . 'pertanyaan/index');
		}

		public function detail($id){
			$condition = array(
				'id_pertanyaan' => $id
			);
			$data['pertanyaan'] = $this->global_model->getDataByCondition('pertanyaan', $condition)->row();
			$this->load->view('pertanyaan/detail', $data);
		}
	}
?>