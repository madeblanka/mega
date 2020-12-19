<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Guru_model");
        $this->load->model("Sekolah_model");
    }
	private $_table = "tb_guru";

    public $id_guru;
    public $id_sekolah;
    public $nip;
	public $nama;
	public $email;
    public $telp;
    public $jabatan;
	public $lulusan;
	public $jenis;
    public $jeniskelamin;
    public $tempat_lahir;
	public $tanggal_lahir;
	
	public function index()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("guru/dashboard", $data);
    }
    public function print()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("guru/print", $data);
    }
    public function jenis()
    {
        $data["guru"] = $this->Guru_model->idguru($this->session->userdata('id_sekolah'));
        $this->load->view("guru/jenis", $data);
    }
    public function grafikswasta()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("grafik/guruswasta",$data);
    }
    public function grafiknegeri()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view("grafik/gurunegeri",$data);
    }
    
	public function add()
    {
        $guru = $this->Guru_model;
            $guru->save();
            redirect(site_url('guru/index'));
    }
    public function tambah()
    {
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view('guru/tambah',$data);
    }
    public function edit($id_guru = null)
    {
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $guru = $this->Guru_model;
        $data["guru"] = $guru->getById($id_guru);
        $this->load->view("guru/edit", $data);
	}
	public function update(){
		$this->Guru_model->update();
        redirect(site_url('Guru/index'));
    }
    public function delete($id_guru=null)
    {
        if (!isset($id_guru)) show_404();
        
        if ($this->Guru_model->delete($id_guru)) {
            redirect(site_url('Guru/index'));
        }
    }
}
