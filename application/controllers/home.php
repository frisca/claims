<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('global_model');
		$this->load->model('jawaban_pertanyaan_model');
	}

	public function index()
	{
		$data['questions'] = $this->jawaban_pertanyaan_model->getPertanyaanByDesc()->result();
		$data['total'] = $this->global_model->getAllData('pertanyaan')->num_rows();
		$this->load->view('index', $data);
	}

	public function getJawaban(){
		$pertanyaan = $this->input->post('pertanyaanid');
		$jawaban = $this->input->post('jawaban');
		$condition = array(
			'id_pertanyaan' => $pertanyaan,
			'jawaban' => $jawaban
		);
		$data = $this->jawaban_pertanyaan_model->getJawabanPertanyaanByJawaban($pertanyaan, $jawaban)->row();
		// $data = $this->global_model->getDataByCondition('pertanyaan', array('id_pertanyaan' => $hasil->hasil))->row();
		echo json_encode($data);
	}
}

?>