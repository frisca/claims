<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Jawaban_Pertanyaan extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
			$this->load->model('jawaban_pertanyaan_model');
		}

		public function lists($id)
		{
			$condition = array('id_pertanyaan' => $id);
			$data['pertanyaan'] = $this->global_model->getDataByCondition('pertanyaan', $condition)->row();
			// var_dump($data['pertanyaan']);exit();
			$data['jawaban_pertanyaan'] = $this->jawaban_pertanyaan_model->getLisJawabanPertanyaan($id)->result();
			$this->load->view('jawaban-pertanyaan/index', $data);
		}

		public function add($id){
			$condition = array('id_pertanyaan' => $id);
			$data['pertanyaan_detail'] = $this->global_model->getDataByCondition('pertanyaan', $condition)->row();
			$data['pertanyaan'] = $this->global_model->getAllData('pertanyaan')->result();
			$this->load->view('jawaban-pertanyaan/add', $data);
		}

		public function processAdd($id){
			$data = array(
				'id_pertanyaan' => $id,
				'jawaban' => $this->input->post('jawaban'),
				'hasil' => $this->input->post('hasil')
			);
			$res = $this->global_model->insertData('jawaban_pertanyaan', $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data jawaban pertanyaan gagal disimpan');
				return redirect(base_url() . 'jawaban_pertanyaan/add/' . $id);
			}
			$this->session->set_flashdata('success', 'Data jawaban pertanyaan berhasil disimpan');
			return redirect(base_url() . 'jawaban_pertanyaan/lists/' . $id);
		}

		public function edit($pertanyaan, $jawaban){
			$con_pertanyaan = array('id_pertanyaan' => $pertanyaan);
			$data['pertanyaan_detail'] = $this->global_model->getDataByCondition('pertanyaan', $con_pertanyaan)->row();

			$condition = array('id_jawaban' => $jawaban);
			$data['jawaban_pertanyaan'] = $this->global_model->getDataByCondition('jawaban_pertanyaan', $condition)->row();
			$data['pertanyaan'] = $this->global_model->getAllData('pertanyaan')->result();
			$this->load->view('jawaban-pertanyaan/edit', $data);
		}

		public function processEdit($pertanyaan, $jawaban){
			$condition = array('id_pertanyaan' => $pertanyaan);
			$data = array(
				'jawaban' => $this->input->post('jawaban'),
				'hasil' => $this->input->post('hasil')
			);
			$res = $this->global_model->updateData('jawaban_pertanyaan', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data jawaban pertanyaan gagal disimpan');
				return redirect(base_url() . 'jawaban_pertanyaan/edit/' . $pertanyaan . '/' . $pertanyaan);
			}
			$this->session->set_flashdata('success', 'Data jawaban pertanyaan berhasil disimpan');
			return redirect(base_url() . 'jawaban_pertanyaan/lists/' . $pertanyaan);
		}

		public function detail($pertanyaan, $jawaban){
			$con_pertanyaan = array('id_pertanyaan' => $pertanyaan);
			$data['pertanyaan_detail'] = $this->global_model->getDataByCondition('pertanyaan', $con_pertanyaan)->row();

			$condition = array('id_jawaban' => $jawaban);
			$data['jawaban_pertanyaan'] = $this->global_model->getDataByCondition('jawaban_pertanyaan', $condition)->row();
			$data['pertanyaan'] = $this->global_model->getAllData('pertanyaan')->result();
			$this->load->view('jawaban-pertanyaan/detail', $data);
		}

		public function delete($pertanyaan, $jawaban){
			$condition = array(
				'id_jawaban' => $jawaban
			);
			$res = $this->global_model->deleteData('jawaban_pertanyaan', $condition);
			if($res == false){
				$this->session->set_flashdata('error', 'Data jawaban pertanyaan gagal dihapus');
				return redirect(base_url() . 'jawaban_pertanyaan/lists/' . $pertanyaan);
			}
			$this->session->set_flashdata('success', 'Data jawaban pertanyaan berhasil dihapus');
			return redirect(base_url() . 'jawaban_pertanyaan/lists/' . $pertanyaan);
		}
	}
?>