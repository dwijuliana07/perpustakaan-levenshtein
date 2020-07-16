<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus_model extends CI_Model
{
    private $_table = "buku";

    public $id;
    public $judul_buku;
    public $pengarang;
    public $tahun_terbit;
    public $penerbit;
    public $deskripsi;


    public function rules()
    {
        return [
            ['field' => 'judul_buku',
            'label' => 'Judul_buku',
            'rules' => 'required'],

            ['field' => 'pengarang',
            'label' => 'Pengarang',
            'rules' => 'required'],
            
            ['field' => 'tahun_terbit',
            'label' => 'Tahun_terbit',
            'rules' => 'numeric'],

            ['field' => 'penerbit',
            'label' => 'Penerbit',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->judul_buku = $post["judul_buku"];
        $this->pengarang = $post["pengarang"];
        $this->tahun_terbit = $post["tahun_terbit"];
        $this->penerbit = $post["penerbit"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->judul_buku = $post["judul_buku"];
        $this->pengarang = $post["pengarang"];
        $this->tahun_terbit = $post["tahun_terbit"];
        $this->penerbit = $post["penerbit"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}