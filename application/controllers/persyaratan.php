<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Persyaratan extends CI_Controller {

		public $data = array();
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
			$this->load->model('persyaratan_model');
			$this->load->helper('ckeditor_helper');
		 
			 
			//Ckeditor's configuration
			$this->data['ckeditor'] = array(
			 
			 	//ID of the textarea that will be replaced
			 	'id' => 'content',
				'path' => 'js/ckeditor',
			 
				 //Optionnal values
				 'config' => array(
				 'toolbar' => "Full", //Using the Full toolbar
				 'width' => "550px", //Setting a custom width
				 'height' => '100px', //Setting a custom height		 
			),
			 
			 //Replacing styles from the "Styles tool"
			 'styles' => array(
			 
			 //Creating a new style named "style 1"
			 'style 1' => array (
			 'name' => 'Blue Title',
			 'element' => 'h2',
			 'styles' => array(
			 'color' => 'Blue',
			 'font-weight' => 'bold'
			 )
			 ),
			 
			 //Creating a new style named "style 2"
			 'style 2' => array (
			 'name' => 'Red Title',
			 'element' => 'h2',
			 'styles' => array(
			 'color' => 'Red',
			 'font-weight' => 'bold',
			 'text-decoration' => 'underline'
			 )
			 ) 
			 )
			 );
			 
			 $this->data['ckeditor_2'] = array(
			 
			 //ID of the textarea that will be replaced
			 'id' => 'content_2',
			 'path' => 'js/ckeditor',
			 
			 //Optionnal values
			 'config' => array(
			 'width' => "100%", //Setting a custom width
			 'height' => '100px', //Setting a custom height
			 'toolbar' => array( //Setting a custom toolbar
			 array('Bold', 'Italic'),
			 array('Underline', 'Strike', 'FontSize'),
			 array('Smiley'),
			 '/'
			 )
			 ),
			 
			 //Replacing styles from the "Styles tool"
			 'styles' => array(
			 
			 //Creating a new style named "style 1"
			 'style 3' => array (
			 'name' => 'Green Title',
			 'element' => 'h3',
			 'styles' => array(
			 'color' => 'Green',
			 'font-weight' => 'bold'
			 )
			 )
			 
			 )
			 ); 
		}

		public function index()
		{
			$data['persyaratan'] = $this->persyaratan_model->getLisPersyaratan()->result();
			$this->load->view('persyaratan/index', $data);
		}

		public function add(){
			$this->load->library('CKEditor');
			$this->load->library('CKFinder');

			//Add Ckfinder to Ckeditor
			$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');
			$condition = array('status' => 1);
			$data['jenis_formulir'] = $this->global_model->getDataByCondition('jenis_formulir', $condition)->result();
			$this->load->view('persyaratan/add', $data);
		}

		public function processAdd(){
			$data = array(
				'id_jenis' => $this->input->post('id_jenis'),
				'status' => $this->input->post('status'),
				'dibuat_oleh' => $this->session->userdata('id'),
				'dibuat_tanggal' => date('Y-m-d'),
				'nama_persyaratan' => $this->input->post('nama_persyaratan')
				// 'persyaratan' => $this->input->post('persyaratan')
			);
			$res = $this->global_model->insertData('persyaratan', $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data persyaratan gagal disimpan');
				return redirect(base_url() . 'persyaratan/add');
			}
			$this->session->set_flashdata('success', 'Data persyaratan berhasil disimpan');
			return redirect(base_url() . 'persyaratan/index');
		}

		public function edit($id){
			$condition = array(
				'id_persyaratan' => $id
			);
			$data['persyaratan'] = $this->global_model->getDataByCondition('persyaratan', $condition)->row();

			$conditions = array('status' => 1);
			$data['jenis_formulir'] = $this->global_model->getDataByCondition('jenis_formulir', $conditions)->result();
			$this->load->view('persyaratan/edit', $data);
		}

		public function processEdit($id){
			$condition = array('id_persyaratan' => $id);
			$data = array(
				'id_jenis' => $this->input->post('id_jenis'),
				'status' => $this->input->post('status'),
				'diubah_oleh' => $this->session->userdata('id'),
				'diubah_tanggal' => date('Y-m-d'),
				'nama_persyaratan' => $this->input->post('nama_persyaratan')
				// 'persyaratan' => $this->input->post('persyaratan')
			);
			$res = $this->global_model->updateData('persyaratan', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data persyaratan gagal diubah');
				return redirect(base_url() . 'persyaratan/edit/' . $id);
			}
			$this->session->set_flashdata('success', 'Data persyaratan berhasil diubah');
			return redirect(base_url() . 'persyaratan/index');
		}

		public function delete($id){
			$condition = array(
				'id_persyaratan' => $id
			);
			$res = $this->global_model->deleteData('persyaratan', $condition);
			if($res == false){
				$this->session->set_flashdata('error', 'Data persyaratan gagal dihapus');
				return redirect(base_url() . 'persyaratan/index/' . $id);
			}
			$this->session->set_flashdata('success', 'Data persyaratan berhasil dihapus');
			return redirect(base_url() . 'persyaratan/index');
		}

		public function detail($id){
			$condition = array(
				'id_persyaratan' => $id
			);
			$data['persyaratan'] = $this->global_model->getDataByCondition('persyaratan', $condition)->row();
			$conditions = array('status' => 1);
			$data['jenis_formulir'] = $this->global_model->getDataByCondition('jenis_formulir', $conditions)->result();
			$this->load->view('persyaratan/detail', $data);
		}
	}
?>