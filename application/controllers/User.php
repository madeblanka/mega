<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
    }
	private $_table = "tb_user";
	
	public $id_user;
    public $username;
    public $password;
  
	public function index()
    {
        $data["user"] = $this->User_model->getAll();
        $this->load->view("user/dashboard", $data);
    }

    public function add()
    {
        $user = $this->User_model;
            $user->save();
            redirect(site_url('user/index'));
    }
    public function tambah()
    {
        $this->load->view('user/tambah');
    }
    public function edit($id_user = null)
    {
        $user = $this->User_model;
        $data["user"] = $user->getById($id_user);
        $this->load->view("user/edit", $data);
	}
	public function update(){
		$this->User_model->update();
        redirect(site_url('user/index'));
    }
    public function delete($id_user=null)
    {
        if (!isset($id_user)) show_404();
        
        if ($this->User_model->delete($id_user)) {
            redirect(site_url('user/index'));
        }
    }
}
