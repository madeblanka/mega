<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Staff_model");
        $this->load->model("Sekolah_model");
    }
	private $_table = "tb_staff";
	
	public $id_staff;
    public $id_sekolah;
    public $nama;
    public $telp;
	public $alamat;
	public $jabatan;
    public $status;
    public $jeniskelamin;

	public function index()
    {
        $data["staff"] = $this->Staff_model->getAll();
        $this->load->view("staff/dashboard", $data);
    }

    public function add()
    {
        $staff = $this->Staff_model;
            $staff->save();
            redirect(site_url('staff/index'));
    }
    public function tambah()
    {
       
        $this->load->view('staff/tambah',$data);
    }
    public function edit($id_staff = null)
    {
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $staff = $this->Staff_model;
        $data["staff"] = $staff->getById($id_staff);
        $this->load->view("staff/edit", $data);
	}
	public function update(){
		$this->Staff_model->update();
        redirect(site_url('staff/index'));
    }
    public function delete($id_staff=null)
    {
        if (!isset($id_staff)) show_404();
        
        if ($this->Staff_model->delete($id_staff)) {
            redirect(site_url('staff/index'));
        }
    }
}
