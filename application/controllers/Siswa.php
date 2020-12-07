<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
    }
	private $_table = "tb_siswa";
	
	public $id_siswa;
    public $nis;
    public $nama;
    public $alamat;
	public $telp;
	public $kelas;
    public $jeniskelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
	public $tanggal_masuk;
	public $tanggal_keluar;
    public $status_masuk;
    public $status_keluar;
    public $agama;
	public $kewarganegaraan;

	public function index()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("siswa/dashboard", $data);
    }

    public function grafikpria()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("grafik/siswapria",$data);
    }
    public function grafikbanding()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("grafik/siswapria",$data);
    }
    public function grafikperempuan()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("grafik/siswaperempuan",$data);
    }
    public function add()
    {
        $siswa = $this->Siswa_model;
            $siswa->save();
            redirect(site_url('siswa/index'));
    }
    public function tambah()
    {
        $this->load->view('siswa/tambah');
    }
    public function edit($nis = null)
    {
        $siswa = $this->Siswa_model;
        $data["siswa"] = $siswa->getById($nis);
        $this->load->view("siswa/edit", $data);
	}
	public function update(){
		$this->Siswa_model->update();
        redirect(site_url('siswa/index'));
    }
    public function delete($nis=null)
    {
        if (!isset($nis)) show_404();
        
        if ($this->Siswa_model->delete($nis)) {
            redirect(site_url('siswa/index'));
        }
    }
}
