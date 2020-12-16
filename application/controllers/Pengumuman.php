<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Pengumuman_model");
    }
	private $_table = "tb_pengumuman";
	
	public $id_pengumuman;
    public $judul;
    public $deskripsi;
    public $lampiran;
    public $jumlah;
    
    public function index()
    {
        $data["pengumuman"] = $this->Pengumuman_model->getAll();
        $this->load->view("pengumuman/dashboard", $data);
    }

    public function add()
    {
        $pengumuman = $this->Pengumuman_model;
            $pengumuman->save();
            redirect(site_url('pengumuman/index'));
    }
    public function tambah()
    {
        $this->load->view('pengumuman/tambah');
    }
    public function edit($id_pengumuman = null)
    {
        $pengumuman = $this->Pengumuman_model;
        $data["pengumuman"] = $pengumuman->getById($id_pengumuman);
        $this->load->view("pengumuman/edit", $data);
	}
	public function update(){
		$this->Pengumuman_model->update();
        redirect(site_url('pengumuman/index'));
    }
    public function delete($id_pengumuman=null)
    {
        if (!isset($id_pengumuman)) show_404();
        
        if ($this->Pengumuman_model->delete($id_pengumuman)) {
            redirect(site_url('pengumuman/index'));
        }
    }
   
}
