<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Sekolah_model");
        $this->load->model("Jumlahsiswa_model");
    }
	private $_table = "tb_sekolah";
	
	public $id_sekolah;
    public $nama;
    public $alamat;
    public $telp;
	public $status;
	public $email;
    public $keterangan;
    public $jenis;
    public $rayon;
	public $jenjang;
	public $akreditasi;
    public $longtitude;
    public $latitude;

	public function index()
    {
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view("sekolah/dashboard", $data);
    }
	public function tk()
    {
        $data["sekolah"] = $this->Sekolah_model->getBytk();
        $this->load->view("sekolah/jenis", $data);
    }
    public function sd()
    {
        $data["sekolah"] = $this->Sekolah_model->getBysd();
        $this->load->view("sekolah/jenis", $data);
    }
    public function add()
    {
        $sekolah = $this->Sekolah_model;
            $sekolah->save();
            redirect(site_url('sekolah/index'));
    }
    public function tambah()
    {
        $this->load->view('sekolah/tambah');
    }
    public function edit($id_sekolah = null)
    {
        $sekolah = $this->Sekolah_model;
        $data["sekolah"] = $sekolah->getById($id_sekolah);
        $this->load->view("sekolah/edit", $data);
	}
	public function update(){
        $this->Sekolah_model->update();
        redirect(site_url('sekolah/index'));
    }
    public function delete($id_sekolah=null)
    {
        if (!isset($id_sekolah)) show_404();
        
        if ($this->Sekolah_model->delete($id_sekolah)) {
            redirect(site_url('sekolah/index'));
        }
    }
}
