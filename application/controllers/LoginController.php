<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encryption');
	}
	public function index()
	{
		show_404();
	}

	public function login() {
		try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Ambil data dari form
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                
                // Lakukan validasi jika diperlukan
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                
                // Cek apakah validasi berhasil
                if ($this->form_validation->run() == FALSE) {
                    // Validasi gagal, tampilkan form login kembali
                    $this->load->view('auth/login');
                } else {
                    // Validasi berhasil, cek login
                    $this->load->model('auth/AuthModel');
                    if ($this->AuthModel->login($username, $password)) {
                        // Redirect ke halaman utama jika login berhasil
                        redirect('home');
                        return;
                    } else {
                        // Tampilkan pesan error jika login gagal
                        $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
                        redirect('auth/login');
                        return;
                    }
                }
            } else {
                // Jika bukan request POST, tampilkan form login
                $this->load->view('home');
            }
        } catch(\Exception $e) {
            log_message('error', 'Exception: ' . $e->getMessage());
            show_error('Terjadi kesalahan dalam aplikasi.');
        }
	}

	public function logout()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url());
	}

	public function forgotPassword() {
		$this->load->view('auth/forgot-password');
	}
}
?>
