<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumlahsiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Jumlahsiswa_model");
        $this->load->model("Sekolah_model");
    }
	private $_table = "tb_jumlahsiswa";
	
	public $id_jumlahsiswa;
    public $id_sekolah;
    public $tahun;
    public $jumlah_siswa;
	public $jumlah_siswa_masuk;
	public $jumlah_siswa_keluar;
	
	public function index()
    {
        $data["jumlahsiswa"] = $this->Jumlahsiswa_model->getAll();
        $this->load->view("jumlahsiswa/dashboard", $data);
    }

    public function add()
    {
        $jumlahsiswa = $this->Jumlahsiswa_model;
            $jumlahsiswa->save();
            redirect(site_url('jumlahsiswa/index'));
    }
    public function tambah()
    {
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view('jumlahsiswa/tambah',$data);
    }
    public function edit($id_jumlahsiswa = null)
    {
        $jumlahsiswa = $this->Jumlahsiswa_model;
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $data["jumlahsiswa"] = $jumlahsiswa->getById($id_jumlahsiswa);
        $this->load->view("jumlahsiswa/edit", $data);
	}
	public function update(){
		$this->Jumlahsiswa_model->update();
        redirect(site_url('jumlahsiswa/index'));
    }
    public function delete($id_jumlahsiswa=null)
    {
        if (!isset($id_jumlahsiswa)) show_404();
        
        if ($this->Jumlahsiswa_model->delete($id_jumlahsiswa)) {
            redirect(site_url('jumlahsiswa/index'));
        }
    }
}
