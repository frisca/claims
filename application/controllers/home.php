<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('global_model');
		$this->load->model('jawaban_pertanyaan_model');
	}

	public function index()
	{
		$data['pertanyaan'] = $this->jawaban_pertanyaan_model->getPertanyaanByDesc()->row();
		$this->load->view('index', $data);
	}
}

?>