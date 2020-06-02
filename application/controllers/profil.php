<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Profil extends CI_Controller {
		
		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
		}

		public function edit(){
			$condition = array(
				'id_pengguna' => $this->session->userdata('id')
			);
			$data['user'] = $this->global_model->getDataByCondition('pengguna', $condition)->row();
			$this->load->view('profil/edit', $data);
		}

		public function processEdit(){
			$condition = array(
				'id_pengguna' => $this->session->userdata('id')
			);

			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email')
			);

			$res = $this->global_model->updateData('pengguna', $condition, $data);
			if($res == false){
				$this->session->set_flashdata('error', 'Data profil gagal diubah');
				return redirect(base_url() . 'profil/edit/' . $this->session->userdata('id'));
			}
			$this->session->set_flashdata('success', 'Data profil berhasil diubah');
			return redirect(base_url() . 'profil/edit/' . $this->session->userdata('id'));
		}

		public function change_password(){
			$this->load->view('profil/change_password');
		}

		public function processPassword(){
			$condition = array(
				'id_pengguna' => $this->session->userdata('id')
			);
			$user = $this->global_model->getDataByCondition('pengguna', $condition)->row();
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');

			if(md5($old_password) != $user->password){
				$this->session->set_flashdata('error', 'Password lama tidak sesuai');
				return redirect(base_url() . 'profil/change_password/');
			}else{
				$data = array(
					'password' => md5($new_password)
				);
				$res = $this->global_model->updateData('pengguna', $condition, $data);
				if($res == false){
					$this->session->set_flashdata('error', 'Password gagal diubah');
					return redirect(base_url() . 'profil/change_password/');
				}
				$this->session->set_flashdata('success', 'Password berhasil diubah. Silahkan logout terlebih dahulu.');
				return redirect(base_url() . 'profil/change_password/');
			}
		}

	}
?>