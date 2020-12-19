<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    private $_table = "tb_guru";

    public $id_guru;
    public $id_sekolah;
    public $nip;
	public $nama;
	public $email;
    public $telp;
    public $jabatan;
	public $lulusan;
	public $jenis;
    public $jeniskelamin;
    public $tempat_lahir;
    public $tanggal_lahir;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function idguru($id_sekolah)
    {
      $this->db->where('id_sekolah',$id_sekolah);
      return $this->db->get('tb_guru')->result();
    }
    public function getById($id_guru)
    {
        return $this->db->get_where($this->_table, ["id_guru" => $id_guru])->result();
    }
    public function totalguru()
    {
        return $this->db->count_all('tb_guru');   
    }
    public function jenis($where)
    {
        $this->db->like('jenis',$where);
        return $this->db->get('tb_guru')->num_rows();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_guru = " ";
        $this->id_sekolah = $post["id_sekolah"];
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->telp = $post["telp"];
        $this->jabatan = $post["jabatan"];
        $this->lulusan = $post["lulusan"];
        $this->jenis = $post["jenis"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_guru = $post["id_guru"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->telp = $post["telp"];
        $this->jabatan = $post["jabatan"];
        $this->lulusan = $post["lulusan"];
        $this->jenis = $post["jenis"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        return $this->db->update($this->_table, $this, array('id_guru' => $post['id_guru']));
    }

    public function delete($id_guru)
    {
        return $this->db->delete($this->_table, array("id_guru" => $id_guru));
    }
}