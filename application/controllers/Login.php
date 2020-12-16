<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Sekolah_model');
	}
    private $_table = "tb_user";

    public $id_user;
    public $username;
    public $password;

	public function index()
    {
        $this->load->view("login");
    }
    public function loginuptd()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->User_model->doLogin())
            {
                $this->session->set_flashdata('msg','NIP tidak ditemukan !!!');
                echo "<script>
                alert('Selamat Datang !'); </script>";
                redirect('dashboard/dashboard');
        }else{
            $this->session->set_flashdata('msg','NIP tidak ditemukan !!!');
            redirect('pegawai');
        }
        $this->load->view("login");
    }
    }
    public function loginsekolah()
    {
     // jika form login disubmit
     if($this->input->post()){
        if($this->User_model->doLogin())
        {
                echo "<script>
                        alert('Selamat Datang !');
                        window.location.href='../dashboard/dashboard';
                        </script>";
    }else{
        echo "<script>
                alert('Username atau Password yang anda masukan Salah!');
                window.location.href='dashboard/index';
                </script>";
    }
        $this->load->view("login");
    }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // hancurkan semua sesi
        echo "<script>
        alert('Terimakasih !');
        window.location.href='index';
        </script>";

    }

}
