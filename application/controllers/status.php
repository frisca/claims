<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Status extends CI_Controller {

		public function __construct(){
			parent::__construct();
            $this->load->model('formulir_model');
            $this->load->model('global_model');
            $this->load->model('persyaratan_model');
            $this->load->library('pdf');
		}

		public function process()
		{
            $data['status'] = $this->formulir_model->getListFormulirProses()->result();
			$this->load->view('status-proses/index', $data);
        }

        public function process_detail($id)
		{
            $data['status'] = $this->formulir_model->getListFormulirProsesDetailById($id)->result();
            $data['formulir'] = $id;
            $data['formulirs'] = $this->global_model->getDataByCondition('formulir', array('id_formulir' => $id))->result();
            $data['total'] = $this->formulir_model->getCountFormulirDt($id)->row();
            // var_dump($data['total']);exit();
            $res = $this->global_model->updateData('formulir', array('id_formulir' => $id), array('read' => 1));
            $this->load->view('status-proses/detail', $data);
        }

        public function processUpdate($id){
            $formulir = $this->global_model->getDataByCondition('formulir_dt', array('id_formulir' => $id))->result();
            $tamp = $this->input->post('checkbox_file');

            // $tamps['status'] = [];
            $tamps = [];
            // foreach($formulir as $key=>$value){
            for($i=0;$i<count($tamp);$i++){
                $con = array('id_formulir_dt' => (int)$tamp[$i]);
                $data = array('status' => 2);
                $res = $this->global_model->updateData('formulir_dt', $con, $data);
            }

            $total = $this->formulir_model->getCountFormulirDt($id)->row();
            if ($total->total > 0){
                $condition = array('id_formulir' => $id);
                $data = array('status' => 3, 'read' => 0);
                $changeStatusFormulir = $this->global_model->updateData('formulir', $condition, $data);
            }else{
                $condition = array('id_formulir' => $id);
                $data = array('status' => 2, 'read' => 0);
                $changeStatusFormulir = $this->global_model->updateData('formulir', $condition, $data);
            }

            if($res == true){
                $this->session->set_flashdata('success', 'Status process berhasil diapprove');
                return redirect(base_url() . 'status/process');
            }else{
                $this->session->set_flashdata('error', 'Status process gagal diapprove');
                return redirect(base_url() . 'status/process_detail/' . $id);
            }
        }

        public function reject()
		{
            if($this->session->userdata('role') == 2){
                $data['status'] = $this->formulir_model->getListFormulirRejectById($this->session->userdata('id'))->result();
            }else{
                $data['status'] = $this->formulir_model->getListFormulirReject()->result();
            }
			$this->load->view('status-reject/index', $data);
        }

        public function detail_reject($id){
            $formulir = $this->global_model->getDataByCondition('formulir', array('id_formulir'=>$id))->row();
			$persyaratan = $this->global_model->getDataByCondition('persyaratan', array('id_jenis'=>$formulir->id_jenis_formulir))->row();
			$data['persyaratan'] = $this->persyaratan_model->getListDetailPersyaratan($persyaratan->id_persyaratan)->result();
			$data['syarat'] = $this->global_model->getDataByCondition('persyaratan', array('id_jenis'=>$formulir->id_jenis_formulir))->row();
			$data['formulir'] = $formulir;
            $data['total'] = $this->formulir_model->getCountFormulirDt($id)->row();
            $data['status'] = $this->formulir_model->getListFormulirRejectDetailById($id)->result();
            // var_dump($data['status']);exit();
            $this->load->view('status-reject/detail_reject', $data);
        }

        public function uploadRejectBerkas($id){
            if(!empty($_FILES['userfile']['name'])) {

                $filesCount = count($_FILES['userfile']['name']);

                for($i = 0; $i < $filesCount; $i++) {
                    $config['upload_path'] = './upload/';

                    $formulir_dt = $this->global_model->getDataByCondition('formulir_dt', array('id_formulir_dt' => $this->input->post('id_formulir_dt')[$i]))->row();
                    
                    unlink($config['upload_path'] . $formulir_dt->files);

                    $_FILES['userFile']['name'] = $_FILES['userfile']['name'][$i];
                    $_FILES['userFile']['type'] = $_FILES['userfile']['type'][$i];
                    $_FILES['userFile']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
                    $_FILES['userFile']['error'] = $_FILES['userfile']['error'][$i];
                    $_FILES['userFile']['size'] = $_FILES['userfile']['size'][$i];

                    
                    $config['allowed_types'] = 'pdf|doc|txt|jpg|png';

                    $this->load->library('upload', $config);

                    if($this->upload->do_upload('userFile')){
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name'];
                        $uploadData[$i]['createdDate'] = date("Y-m-d H:i:s");
                        $form = array(
                            'files' => $uploadData[$i]['file_name'],
                            'id_detail_persyaratan' => $this->input->post('det_persyaratan')[$i]
                        );
                        $con = array('id_formulir_dt' => $this->input->post('id_formulir_dt')[$i]);
                        $res1 = $this->global_model->updateData('formulir_dt', $con, $form);
                    }else{
                        // var_dump('gagal');exit();
                        $this->session->set_flashdata('error', 'Dokumen gagal diupload');
                        return redirect(base_url() . 'status/detail_reject/' . $id);
                    }

                }

                if($res1 == true){
                    $con = array('id_formulir' => $id);
                    $data = array('status' => 1, 'read' => 0);
                    $res = $this->global_model->updateData('formulir', $con, $data);
                    if($res == true){
                        $this->session->set_flashdata('success', 'Dokumen berhasil diupload');
                        return redirect(base_url() . 'status/reject');
                    }
                    $this->session->set_flashdata('error', 'Dokumen gagal diupload');
                    return redirect(base_url() . 'status/detail_reject/' . $id);
                }else{
                    $this->session->set_flashdata('error', 'Dokumen gagal diupload');
                    return redirect(base_url() . 'status/detail_reject/' . $id);
                }
            }
        }

        public function approve()
		{
            if($this->session->userdata('role') == 2){
                $data['status'] = $this->formulir_model->getListFormulirApproveById($this->session->userdata('id'))->result();
            }else{
                $data['status'] = $this->formulir_model->getListFormulirApprove()->result();
            }
			$this->load->view('status-approve/index', $data);
        }

        public function download($link){
			$tamp = str_replace("%20", " ", $link);				
			force_download('upload/' . $tamp,NULL);
        }
        
        public function detail_approve($id)
		{
            $data['status'] = $this->formulir_model->getListFormulirApproveDetailById($id)->result();
            $data['formulir'] = $id;
            $data['formulirs'] = $this->global_model->getDataByCondition('formulir', array('id_formulir' => $id))->result();
            $data['total'] = $this->formulir_model->getCountFormulirDt($id)->row();
            // var_dump($data['total']);exit();
            if($this->session->userdata('role') == 2){
                $res = $this->global_model->updateData('formulir', array('id_formulir' => $id), array('read' => 1));
            }
            $this->load->view('status-approve/detail_approve', $data);
        }

        public function det_reject($id)
		{
            $data['status'] = $this->formulir_model->getListFormulirRejectDetailById($id)->result();
            $data['formulir'] = $id;
            $data['formulirs'] = $this->global_model->getDataByCondition('formulir', array('id_formulir' => $id))->result();
            $data['total'] = $this->formulir_model->getCountFormulirDt($id)->row();
            $this->load->view('status-reject/det_reject', $data);
        }
    }
?>