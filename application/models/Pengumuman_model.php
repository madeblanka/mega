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
        $this->lampiran =$this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pengumuman = $post["id_pengumuman"];
        $this->judul = $post["judul"];
        $this->deskripsi = $post["deskripsi"];
        
        if (!empty($_FILES["lampiran"]["name"])) {
            $this->lampiran = $this->_uploadImage();
        } else {
            $this->lampiran = $post["lama"];
        }
      
        
        return $this->db->update($this->_table, $this, array('id_pengumuman' => $post['id_pengumuman']));
    }

    public function delete($id_pengumuman)
    {
        $this->_deleteImage($id_pengumuman);
       return $this->db->delete($this->_table, array("id_pengumuman" => $id_pengumuman));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'pengumuman/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['file_name']            = $this->id_pengumuman;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('lampiran')) {
            return $this->upload->data("file_name");
        }
        //print_r($this->upload->display_errors());
    }
    private function _deleteImage($id_pengumuman)
    {
        $pengumuman = $this->getById($id_pengumuman);
            $filename = explode(".", $pengumuman->lampiran)[0];
            return array_map('unlink', glob(FCPATH."pengumuman/$filename.*"));
    }
}