<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "tb_siswa";
	
    public $nis;
    public $id_sekolah;
    public $nama;
    public $alamat;
	public $telp;
	public $kelas;
    public $jeniskelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
	public $tanggal_masuk;
	public $tanggal_keluar;
    public $status_masuk;
    public $status_keluar;
    public $agama;
    public $kewarganegaraan;
    
    public function getAll()
    {
        if($this->session->userdata['id_sekolah'] != null){
            $this->db->where('id_sekolah',$this->session->userdata['id_sekolah']);
            return $this->db->get($this->_table)->result();
        }else{
            return $this->db->get($this->_table)->result();
        }
    }
    public function totalsiswa()
    {
        return $this->db->count_all('tb_siswa');   
    }
    public function nis($id_sekolah)
    {
      $this->db->where('id_sekolah',$id_sekolah);
      return $this->db->get('tb_siswa')->result();
    }
    public function getById($nis)
    {
        return $this->db->get_where($this->_table, ["nis" => $nis])->row();
    }
    public function pria()
    {
        if($this->session->userdata['id_sekolah'] != null){
            $this->db->where('id_sekolah',$this->session->userdata['id_sekolah']);
            return $this->db->get_where($this->_table, ["jeniskelamin" => 'pria'])->row();
        }else{
            return $this->db->get_where($this->_table, ["jeniskelamin" => 'pria'])->row();
        }
    }
    public function perempuan()
    {
        if($this->session->userdata['id_sekolah'] != null){
            $this->db->where('id_sekolah',$this->session->userdata['id_sekolah']);
            return $this->db->get_where($this->_table, ["jeniskelamin" => 'perempuan'])->row();
        }else{
            return $this->db->get_where($this->_table, ["jeniskelamin" => 'perempuan'])->row();
        }
        
    }
    public function jeniskelamin($where)
    {
        if($this->session->userdata['id_sekolah'] != null){
            $this->db->where('id_sekolah',$this->session->userdata['id_sekolah']);
            $this->db->like('jeniskelamin',$where);
            return $this->db->get('tb_siswa')->num_rows();;
        }else{
            $this->db->like('jeniskelamin',$where);
            return $this->db->get('tb_siswa')->num_rows();
        }
    }
    public function save()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->kelas = $post["kelas"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->tanggal_masuk = $post["tanggal_masuk"];
        $this->tanggal_keluar = $post["tanggal_keluar"];
        $this->status_masuk = $post["status_masuk"];
        $this->status_keluar = $post["status_keluar"];
        $this->agama = $post["agama"];
        $this->kewarganegaraan = $post["kewarganegaraan"];

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->kelas = $post["kelas"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->tanggal_masuk = $post["tanggal_masuk"];
        $this->tanggal_keluar = $post["tanggal_keluar"];
        $this->status_masuk = $post["status_masuk"];
        $this->status_keluar = $post["status_keluar"];
        $this->agama = $post["agama"];
        $this->kewarganegaraan = $post["kewarganegaraan"];
        return $this->db->update($this->_table, $this, array('nis' => $post['nis']));
    }

    public function delete($nis)
    {
        return $this->db->delete($this->_table, array("nis" => $nis));
    }
}