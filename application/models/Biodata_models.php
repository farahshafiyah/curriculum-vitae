<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'Id',
            'rules' => 'required'],

            ['field' => 'resume',
            'label' => 'Resume',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jk',
            'label' => 'Jk',
            'rules' => 'required'],

            ['field' => 'ttl',
            'label' => 'Ttl',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'wa',
            'label' => 'Wa',
            'rules' => 'required'],

            ['field' => 'foto',
            'label' => 'Foto',
            'rules' => 'required']
        ];
    }

    public function getBiodata()
    {
        $hasil = $this->db->get('biodata');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('biodata', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->resume   = $post["resume"];
        $this->nama     = $post["nama"];
        $this->jk       = $post["jk"];
        $this->ttl      = $post["ttl"];
        $this->agama    = $post["agama"];
        $this->alamat   = $post["alamat"];
        $this->email    = $post["email"];
        $this->wa       = $post["wa"];
        $this->foto     = $post["foto"];
        $this->db->insert('biodata', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->resume   = $post["resume"];
        $this->nama     = $post["nama"];
        $this->jk       = $post["jk"];
        $this->ttl      = $post["ttl"];
        $this->agama    = $post["agama"];
        $this->alamat   = $post["alamat"];
        $this->email    = $post["email"];
        $this->wa       = $post["wa"];
        $this->foto     = $post["foto"];
        $this->db->update('biodata', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('biodata', array("id" => $id));
    }
}
