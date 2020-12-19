<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_model extends CI_Model
{
    private $_table = "tb_sekolah";
	
	public $id_sekolah;
    public $nama;
    public $alamat;
    public $telp;
	public $status;
	public $email;
    public $keterangan;
    public $jenis;
    public $rayon;
	public $jenjang;
	public $akreditasi;
    public $longtitude;
    public $latitude;

    public function loginsekolah($where){
        $this->db->where($where);
      return $this->db->get('tb_sekolah')->num_rows();
    }

    public function hasil($id_sekolah){
      $this->db->where('id_sekolah',$id_sekolah);
        return $this->db->get('tb_sekolah')->result();
    }
    public function idsekolah($id_sekolah)
    {
      $this->db->where('id_sekolah',$id_sekolah);
      return $this->db->get('tb_sekolah')->result();
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getBysd()
    {
        return $this->db->get_where($this->_table, ["jenjang" => 'SD'])->result();
    }
    public function s($a)
    {
        return $this->db->get_where($this->_table, ["id_sekolah" => $a])->row();
    }
    public function getBytk()
    {
        return $this->db->get_where($this->_table, ["jenjang" => 'TK'])->result();
    }
    public function getById($id_sekolah)
    {
        return $this->db->get_where($this->_table, ["id_sekolah" => $id_sekolah])->row();
    }
    public function login($username)
    {
        return $this->db->get_where($this->_table, ["id_sekolah" => $id_sekolah])->row();
    }
    public function swasta()
    {
        return $this->db->get_where($this->_table, ["jenis" => 'swasta'])->num_rows();
    }
    public function negeri()
    {
        return $this->db->get_where($this->_table, ["jenis" => 'negeri'])->num_rows();
    }
    public function totalsekolah()
    {
        return $this->db->count_all('tb_sekolah');   
    }
    public function totaltk()
    {
        $this->db->where('jenjang','tk');
        $this->db->from("tb_sekolah");
        return $this->db->count_all_results();
    }
    public function totalsd()
    {
        $this->db->where('jenjang','sd');
        $this->db->from("tb_sekolah");
        return $this->db->count_all_results();
    }
    public function save()
    {
        $post = $this->input->post();
       
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->status = $post["status"];
        $this->email = $post["email"];
        $this->keterangan = $post["keterangan"];
        $this->jenis = $post["jenis"];
        $this->rayon = $post["rayon"];
        $this->jenjang = $post["jenjang"];
        $this->akreditasi = $post["akreditasi"];
        $this->longtitude = $post["longtitude"];
        $this->latitude = $post["latitude"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_sekolah = $post["id_sekolah"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->status = $post["status"];
        $this->email = $post["email"];
        $this->keterangan = $post["keterangan"];
        $this->jenis = $post["jenis"];
        $this->rayon = $post["rayon"];
        $this->jenjang = $post["jenjang"];
        $this->akreditasi = $post["akreditasi"];
        $this->longtitude = $post["longtitude"];
        $this->latitude = $post["latitude"];
        return $this->db->update($this->_table, $this, array('id_sekolah' => $post['id_sekolah']));
    }

    public function delete($id_sekolah)
    {
        return $this->db->delete($this->_table, array("id_sekolah" => $id_sekolah));
    }
}