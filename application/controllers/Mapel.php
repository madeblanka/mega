<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Mapel_model");
        $this->load->model("Guru_model");
    }
	private $_table = "tb_mapel";
	
	public $id_mapel;
    public $id_guru;
    public $matapelajaran;
  
	public function index()
    {
        $data["mapel"] = $this->Mapel_model->getAll();
        $this->load->view("mapel/dashboard", $data);
    }

    public function add()
    {
        $mapel = $this->Mapel_model;
            $mapel->save();
            redirect(site_url('mapel/index'));
    }
    public function tambah()
    {
        $data["guru"] = $this->Guru_model->getAll();
        $this->load->view('mapel/tambah',$data);
    }
    public function edit($id_mapel = null)
    {
        $mapel = $this->Mapel_model;
        $data["guru"] = $this->Guru_model->getAll();
        $data["mapel"] = $mapel->getById($id_mapel);
        $this->load->view("mapel/edit", $data);
	}
	public function update(){
		$this->Mapel_model->update();
        redirect(site_url('mapel/index'));
    }
    public function delete($id_mapel=null)
    {
        if (!isset($id_mapel)) show_404();
        
        if ($this->Mapel_model->delete($id_mapel)) {
            redirect(site_url('mapel/index'));
        }
    }
}
