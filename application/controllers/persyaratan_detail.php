<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Persyaratan_Detail extends CI_Controller {

		public $data = array();
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
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

		public function lists($id)
		{
			$condition = array('id_persyaratan' => $id);
			$data['persyaratan'] = $this->global_model->getDataByCondition('persyaratan', $condition)->row();
			$data['persyaratan_detail'] = $this->global_model->getDataByCondition('detail_persyaratan', $condition)->result();
			$this->load->view('persyaratan-detail/index', $data);
		}

		public function add($id){
			$this->load->library('CKEditor');
			$this->load->library('CKFinder');

			//Add Ckfinder to Ckeditor
			$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');
			$data['id_persyaratan'] = $id;
			$this->load->view('persyaratan-detail/add', $data);
		}

		public function processAdd($id){
			$data = array(
				'urutan' => $this->input->post('urutan'),
				'persyaratan' => $this->input->post('persyaratan'),
				'id_persyaratan' => $id,
				'files' => empty($this->input->post('files')) ? "" : $this->input->post('files')
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

		public function edit($persyaratan_detail, $persyaratan){
			$this->load->library('CKEditor');
			$this->load->library('CKFinder');

			//Add Ckfinder to Ckeditor
			$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');
			$condition = array(
				'id_detail_persyaratan' => $persyaratan_detail
			);
			$data['persyaratan'] = $this->global_model->getDataByCondition('detail_persyaratan', $condition)->row();
			$this->load->view('persyaratan-detail/edit', $data);
		}

		public function processEdit($persyaratan_detail, $persyaratan){
			$condition = array(
				'id_detail_persyaratan' => $persyaratan_detail
			);
			$data = array(
				'urutan' => $this->input->post('urutan'),
				'persyaratan' => $this->input->post('persyaratan'),
				'files' => empty($this->input->post('files')) ? "" : $this->input->post('files')
			);
			$res = $this->global_model->updateData('detail_persyaratan', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data detail persyaratan gagal diubah');
				return redirect(base_url() . 'persyaratan_detail/edit/' . $persyaratan . '/' . $persyaratan_detail);
			}
			$this->session->set_flashdata('success', 'Data detail persyaratan berhasil diubah');
			return redirect(base_url() . 'persyaratan_detail/lists/' . $persyaratan);
		}

		public function delete($persyaratan_detail, $persyaratan){
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