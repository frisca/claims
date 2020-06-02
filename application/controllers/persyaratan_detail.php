<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Persyaratan_Detail extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function lists($id)
		{
			$condition = array('id_persyaratan' => $id);
			$data['persyaratan'] = $this->global_model->getDataByCondition('persyaratan', $condition)->row();
			$data['persyaratan_detail'] = $this->global_model->getDataByCondition('detail_persyaratan', $condition)->result();
			$this->load->view('persyaratan-detail/index', $data);
		}

		public function add($id){
			$data['id_persyaratan'] = $id;
			$this->load->view('persyaratan-detail/add', $data);
		}

		public function processAdd($id){
			$data = array(
				'urutan' => $this->input->post('urutan'),
				'persyaratan' => $this->input->post('persyaratan'),
				'id_persyaratan' => $id,
				'files' => $this->input->post('files')
				// 'persyaratan' => $this->input->post('persyaratan')
			);
			$res = $this->global_model->insertData('detail_persyaratan', $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data detail persyaratan gagal disimpan');
				return redirect(base_url() . 'persyaratan_detail/add/' . $id);
			}
			$this->session->set_flashdata('success', 'Data detail persyaratan berhasil disimpan');
			return redirect(base_url() . 'persyaratan_detail/lists/' . $id);
		}

		public function detail($persyaratan, $persyaratan_detail){
			$condition = array(
				'id_detail_persyaratan' => $persyaratan_detail
			);
			$data['persyaratan'] = $this->global_model->getDataByCondition('detail_persyaratan', $condition)->row();
			$this->load->view('persyaratan-detail/detail', $data);
		}

		public function edit($persyaratan, $persyaratan_detail){
			$condition = array(
				'id_detail_persyaratan' => $persyaratan_detail
			);
			$data['persyaratan'] = $this->global_model->getDataByCondition('detail_persyaratan', $condition)->row();
			$this->load->view('persyaratan-detail/edit', $data);
		}

		public function processEdit($persyaratan, $persyaratan_detail){
			$condition = array(
				'id_detail_persyaratan' => $persyaratan_detail
			);
			$data = array(
				'urutan' => $this->input->post('urutan'),
				'persyaratan' => $this->input->post('persyaratan'),
				'files' => $this->input->post('files')
			);
			$res = $this->global_model->updateData('detail_persyaratan', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data detail persyaratan gagal diubah');
				return redirect(base_url() . 'persyaratan_detail/edit/' . $persyaratan . '/' . $persyaratan_detail);
			}
			$this->session->set_flashdata('success', 'Data detail persyaratan berhasil diubah');
			return redirect(base_url() . 'persyaratan_detail/lists/' . $persyaratan);
		}

		public function delete($persyaratan, $persyaratan_detail){
			$condition = array(
				'id_detail_persyaratan' => $persyaratan_detail
			);
			$res = $this->global_model->deleteData('detail_persyaratan', $condition);
			if($res == false){
				$this->session->set_flashdata('error', 'Data detail persyaratan gagal dihapus');
				return redirect(base_url() . 'persyaratan_detail/lists/' . $persyaratan);
			}
			$this->session->set_flashdata('success', 'Data detail persyaratan berhasil dihapus');
			return redirect(base_url() . 'persyaratan_detail/lists/' . $persyaratan);
		}
	}
?>