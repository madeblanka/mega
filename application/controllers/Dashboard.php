<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model("Guru_model");
		$this->load->model("Sekolah_model");
		$this->load->model("Staff_model");
		$this->load->model("User_model");
		$this->load->model("Pengumuman_model");
		$this->load->model("Jumlahsiswa_model");
		$this->load->helper(array('url','download'));	
    }

	public function dashboard()
	{
		$data["guru"] = $this->Guru_model->totalguru();
		$data["sekolah"] = $this->Sekolah_model->totalsekolah();
		$data["staff"] = $this->Staff_model->totalstaff();
		$data["totaluser"] = $this->User_model->totaluser();
		$data["user"] = $this->User_model->getAll();
		$data["pengumuman"] = $this->Pengumuman_model->terbaru();
		$data["jumlahsiswa1"] = $this->Jumlahsiswa_model->jumlahsiswa1();
		$data["jumlahsiswa2"] = $this->Jumlahsiswa_model->jumlahsiswa2();
		$data["jumlahsiswa3"] = $this->Jumlahsiswa_model->jumlahsiswa3();
		$data["jumlahsiswa4"] = $this->Jumlahsiswa_model->jumlahsiswa4();
		$data["jumlahsiswa5"] = $this->Jumlahsiswa_model->jumlahsiswa5();
		$this->load->view('dashboard',$data);
	}
	public function download($lampiran){				
		force_download('pengumuman/'.$lampiran, NULL);
	}	
}
