<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jumlahsiswa_model extends CI_Model
{
    private $_table = "tb_jumlahsiswa";
	
	public $id_jumlahsiswa;
    public $id_sekolah;
    public $tahun;
    public $jumlah_siswa;
	public $jumlah_siswa_masuk;
	public $jumlah_siswa_keluar;
	
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function idjumlahsiswa($id_sekolah)
    {
      $this->db->where('id_sekolah',$id_sekolah);
      return $this->db->get('tb_jumlahsiswa')->result();
    }
    public function getById($id_jumlahsiswa)
    {
        return $this->db->get_where($this->_table, ["id_jumlahsiswa" => $id_jumlahsiswa])->row();
    }
    public function jumlahsiswa1()
    {
        $this->db->like('tahun','2020','after');
        return $this->db->get('tb_jumlahsiswa')->result();
    }
    public function jumlahsiswa2()
    {
        $this->db->select('jumlah_siswa');
        $this->db->like('tahun','2019','after');
        return $this->db->get('tb_jumlahsiswa')->result();
    }
    public function jumlahsiswa3()
    {
        $this->db->select('jumlah_siswa');
        $this->db->like('tahun','2018','after');
        return $this->db->get('tb_jumlahsiswa')->result();
    }
    public function jumlahsiswa4()
    {
        $this->db->select('jumlah_siswa');
        $this->db->like('tahun','2017','after');
        return $this->db->get('tb_jumlahsiswa')->result();
    }
    public function jumlahsiswa5()
    {
        $this->db->select('jumlah_siswa');
        $this->db->like('tahun','2016','after');
        return $this->db->get('tb_jumlahsiswa')->result();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_jumlahsiswa = $post["id_jumlahsiswa"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->tahun = $post["tahun"];
        $this->jumlah_siswa = $post["jumlah_siswa"];
        $this->jumlah_siswa_masuk = $post["jumlah_siswa_masuk"];
        $this->jumlah_siswa_keluar = $post["jumlah_siswa_keluar"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jumlahsiswa = $post["id_jumlahsiswa"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->tahun = $post["tahun"];
        $this->jumlah_siswa = $post["jumlah_siswa"];
        $this->jumlah_siswa_masuk = $post["jumlah_siswa_masuk"];
        $this->jumlah_siswa_keluar = $post["jumlah_siswa_keluar"];
        return $this->db->update($this->_table, $this, array('id_jumlahsiswa' => $post['id_jumlahsiswa']));
    }

    public function delete($id_jumlahsiswa)
    {
        return $this->db->delete($this->_table, array("id_jumlahsiswa" => $id_jumlahsiswa));
    }
}