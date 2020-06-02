<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Formulir extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
			$this->load->model('persyaratan_model');
			$this->load->model('formulir_model');
		}

		public function index()
		{
			$id = $this->input->post('id_jenis');
			$data['pengguna'] = $this->global_model->getDataByCondition('pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
			$data['det_pengguna'] = $this->global_model->getDataByCondition('detail_pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
			$data['formulir'] = $id;
			$this->load->view('formulir/index', $data);
		}

		public function processAdd(){
			$pengguna = $this->global_model->getDataByCondition('detail_pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
			if(empty($pengguna)){
				$data = array(
					'alamat' => $this->input->post('alamat'),
					'kode_pos' => $this->input->post('kode_pos'),
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kelurahan' => $this->input->post('kelurahan'),
					'no_tlp' => $this->input->post('no_tlp'),
					'no_ktp' => $this->input->post('no_ktp'),
					'id_pengguna' => $this->session->userdata('id')
				);
				$result = $this->global_model->insertData('detail_pengguna', $data);
				if($result == true){
					$res = $this->global_model->getDataByCondition('detail_pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
					$form = array(
						'id_detail_pengguna' => $res->id_detail_pengguna,
						'id_pengguna' => $this->session->userdata('id'),
						'id_jenis_formulir' => $this->input->post('formulir'),
						'status' => 0
					);
					$hasil = $this->global_model->insertData('formulir', $form);
					if($hasil == true){
						return redirect(base_url() . 'formulir/list_persyaratan/' . $this->input->post('formulir'));
					}else{

					}
				}else{

				}
			}else{
				$data = array(
					'alamat' => $this->input->post('alamat'),
					'kode_pos' => $this->input->post('kode_pos'),
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kelurahan' => $this->input->post('kelurahan'),
					'no_tlp' => $this->input->post('no_tlp'),
					'no_ktp' => $this->input->post('no_ktp'),
					'id_pengguna' => $this->session->userdata('id')
				);
				$result = $this->global_model->updateData('detail_pengguna', array('id_detail_pengguna' => $pengguna->id_detail_pengguna), $data);
				if($result == true){
					$form = array(
						'id_detail_pengguna' => $pengguna->id_detail_pengguna,
						'id_pengguna' => $this->session->userdata('id'),
						'id_jenis_formulir' => $this->input->post('formulir'),
						'status' => 0
					);
					$hasil = $this->global_model->insertData('formulir', $form);
					if($hasil == true){
						return redirect(base_url() . 'formulir/list_persyaratan/' . $this->input->post('formulir'));
					}else{
						
					}
				}
			}
		}

		public function list_persyaratan($id){
			$persyaratan = $this->global_model->getDataByCondition('persyaratan', array('id_jenis'=>$id))->row();
			$data['persyaratan'] = $this->persyaratan_model->getListDetailPersyaratan($persyaratan->id_persyaratan)->result();
			$data['syarat'] = $this->global_model->getDataByCondition('persyaratan', array('id_jenis'=>$id))->row();
			$this->load->view('formulir/list_persyaratan', $data);
		}

		public function persyaratan(){
			$data['persyaratan'] = $this->formulir_model->getListFormulir($this->session->userdata('id'))->result();
			$this->load->view('formulir/persyaratan', $data);
		}
	}
?>