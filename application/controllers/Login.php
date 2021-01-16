<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Sekolah_model');
        $this->load->model("Guru_model");
        $this->load->model("Staff_model");
        $this->load->model("Pengumuman_model");
        $this->load->model("Jumlahsiswa_model");
        $this->load->model("Siswa_model");
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
        if ($this->input->post()) {
            if ($this->User_model->doLogin()) {
                redirect('login/pilihsekolah');
                
            } else {
                echo "<script>
                alert('Username atau Password yang anda masukan Salah!');
                window.location.href='index';
                </script>";
            }
        }
    }

    public function pilihsekolah(){
        $data["sekolahs"] = $this->Sekolah_model->getAll();
        $this->load->view("pilihsekolah.php", $data);
    }

    public function submit_sekolah(){
        $id_sekolah = $this->input->post('id_sekolah');
        $this->session->set_userdata('id_sekolah', $id_sekolah);
        redirect('dashboard/dashboard');
    }

    public function loginsekolah()
    {
        $id_sekolah = $this->input->post('id_sekolah');
        $where = array(
            'id_sekolah' => $id_sekolah
        );

        $cek = $this->Sekolah_model->getById($id_sekolah);
        // var_dump($cek); exit();
        if ($cek != null) {

            $data_session = array(
                'id_sekolah' => $id_sekolah,
                'status' => 'login',
                'role' => $cek->jenjang
            );

            $this->session->set_userdata($data_session);

            $data['sekolah'] = $this->Sekolah_model->hasil($id_sekolah);
            $this->load->view("sekolah/dashboard", $data);
        } else {

            $this->session->set_flashdata('msg', 'ID Sekolah tidak ditemukan !!!');
            redirect('login');
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
