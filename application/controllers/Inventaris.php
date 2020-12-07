<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Inventaris_model");
    }
	private $_table = "tb_inventaris";
	
	public $id_inventaris;
    public $id_sekolah;
    public $nama;
    public $status;
	public $jumlah;
	
	public function index()
    {
        $data["inventaris"] = $this->Inventaris_model->getAll();
        $this->load->view("inventaris/dashboard", $data);
    }

    public function add()
    {
        $inventaris = $this->Inventaris_model;
            $inventaris->save();
            redirect(site_url('inventaris/index'));
    }
    public function tambah()
    {
        $this->load->view('inventaris/tambah');
    }
    public function edit($id_inventaris = null)
    {
        $inventaris = $this->Inventaris_model;
        $data["inventaris"] = $inventaris->getById($id_inventaris);
        $this->load->view("inventaris/edit", $data);
	}
	public function update(){
		$this->Inventaris_model->update();
        redirect(site_url('Inventaris/index'));
    }
    public function delete($id_inventaris=null)
    {
        if (!isset($id_inventaris)) show_404();
        
        if ($this->Inventaris_model->delete($id_inventaris)) {
            redirect(site_url('Inventaris/index'));
        }
    }
}
