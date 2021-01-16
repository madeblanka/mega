<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model
{
    private $_table = "tb_staff";
	
	public $id_staff;
    public $id_sekolah;
    public $nama;
    public $telp;
	public $alamat;
	public $jabatan;
    public $status;
    public $jeniskelamin;

    public function getAll()
    {
        if($this->session->userdata['id_sekolah'] != null){
            $this->db->where('id_sekolah',$this->session->userdata['id_sekolah']);
            return $this->db->get($this->_table)->result();
        }else{
            return $this->db->get($this->_table)->result();
        }
    }
    public function idstaff($id_sekolah)
    {
      $this->db->where('id_sekolah',$id_sekolah);
      return $this->db->get('tb_staff')->result();
    }
    public function getById($id_staff)
    {
        return $this->db->get_where($this->_table, ["id_staff" => $id_staff])->row();
    }
    public function totalstaff()
    {
        return $this->db->count_all('tb_staff');   
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_staff = $post["id_staff"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->telp = $post["telp"];
        $this->alamat = $post["alamat"];
        $this->jabatan = $post["jabatan"];
        $this->status = $post["status"];
        $this->jeniskelamin = $post["jeniskelamin"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_staff = $post["id_staff"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->telp = $post["telp"];
        $this->alamat = $post["alamat"];
        $this->jabatan = $post["jabatan"];
        $this->status = $post["status"];
        $this->jeniskelamin = $post["jeniskelamin"];
        return $this->db->update($this->_table, $this, array('id_staff' => $post['id_staff']));
    }

    public function delete($id_staff)
    {
        return $this->db->delete($this->_table, array("id_staff" => $id_staff));
    }
}