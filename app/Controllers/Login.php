<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		$id_user = $this->session->userdata('id_user');
		if(empty($id_user)){
			$this->load->view('login');
		} else {
			echo '<script>alert("Anda sudah login!");
			window.history.back();;
					</script>';
		}
	}

	public function login_admin()
	{	
		$data['u'] = $this->input->post('user');
		$data['p'] = $this->input->post('pass');
		$this->load->model('M_Login');
		$this->M_Login->cek_login($data);
	}
	
}
