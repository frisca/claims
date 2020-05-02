<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('global_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function processLogin(){
		$condition = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$row = $this->global_model->getDataByCondition('pengguna', $condition)->num_rows();
		if($row > 0){
			$res = $this->global_model->getDataByCondition("pengguna", $condition)->row();
			$data_session = array(
				'username'  => $res->username,
				'id'		=> $res->id_pengguna,
				'logged_in' => 1,
				'role'		=> (int)$res->role
			);
			$this->session->set_userdata($data_session);
			redirect(base_url() . 'home/index');
		}else{
			$this->session->set_flashdata('error', 'Username dan password invalid');
			redirect(base_url() . 'login/index');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */