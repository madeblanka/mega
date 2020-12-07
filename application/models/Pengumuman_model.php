<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{
    private $_table = "tb_pengumuman";
	
	public $id_pengumuman;
    public $judul;
    public $deskripsi;
    public $lampiran;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function terbaru()
    {
        $this->db->select("*");
        $this->db->from("tb_pengumuman");
        $this->db->limit(1);
        $this->db->order_by('id_pengumuman',"DESC");
        $query = $this->db->get();
        return $result = $query->result();
    }
    public function getById($id_pengumuman)
    {
        return $this->db->get_where($this->_table, ["id_pengumuman" => $id_pengumuman])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pengumuman = $post["id_pengumuman"];
        $this->judul = $post["judul"];
        $this->deskripsi = $post["deskripsi"];
        $this->lampiran = $post["lampiran"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pengumuman = $post["id_pengumuman"];
        $this->judul = $post["judul"];
        $this->deskripsi = $post["deskripsi"];
        $this->lampiran = $post["lampiran"];
        return $this->db->update($this->_table, $this, array('id_pengumuman' => $post['id_pengumuman']));
    }

    public function delete($id_pengumuman)
    {
        return $this->db->delete($this->_table, array("id_pengumuman" => $id_pengumuman));
    }
}