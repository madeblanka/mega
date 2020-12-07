<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model
{
    private $_table = "tb_mapel";
	
	public $id_mapel;
    public $id_guru;
    public $matapelajaran;
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_mapel)
    {
        return $this->db->get_where($this->_table, ["id_mapel" => $id_mapel])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_mapel = $post["id_mapel"];
        $this->id_guru = $post["id_guru"];
        $this->matapelajaran = $post["matapelajaran"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_mapel = $post["id_mapel"];
        $this->id_guru = $post["id_guru"];
        $this->matapelajaran = $post["matapelajaran"];
        return $this->db->update($this->_table, $this, array('id_mapel' => $post['id_mapel']));
    }

    public function delete($id_mapel)
    {
        return $this->db->delete($this->_table, array("id_mapel" => $id_mapel));
    }
}