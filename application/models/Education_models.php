<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Education_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'pendidikan',
            'label' => 'Pendidikan',
            'rules' => 'required'],

            ['field' => 'waktu_pendidikan',
            'label' => 'Waktu pendidikan',
            'rules' => 'required']
        ];
    }

    public function getPendidikan()
    {
        $hasil = $this->db->get('pendidikan');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('pendidikan', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id           = uniqid();
        $this->nama_pend    = $post["pendidikan"];
        $this->waktu_pend   = $post["waktu_pendidikan"];
        $this->db->insert('pendidikan', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->nama_pend    = $post["nama_pend"];
        $this->waktu_pend   = $post["waktu_pend"];
        $this->db->update('pendidikan', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('pendidikan', array("id" => $id));
    }
}
