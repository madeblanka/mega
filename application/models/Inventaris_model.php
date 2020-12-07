<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_model extends CI_Model
{
    private $_table = "tb_inventaris";
	
	public $id_inventaris;
    public $id_sekolah;
    public $nama;
    public $status;
    public $jumlah;
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_inventaris)
    {
        return $this->db->get_where($this->_table, ["id_inventaris" => $id_inventaris])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_inventaris = $post["id_inventaris"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->status = $post["status"];
        $this->jumlah = $post["jumlah"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_inventaris = $post["id_inventaris"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->status = $post["status"];
        $this->jumlah = $post["jumlah"];
        return $this->db->update($this->_table, $this, array('id_inventaris' => $post['id_inventaris']));
    }

    public function delete($id_inventaris)
    {
        return $this->db->delete($this->_table, array("id_inventaris" => $id_inventaris));
    }
}