<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Experience_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'Id',
            'rules' => 'required'],

            ['field' => 'namaPengalaman',
            'label' => 'Nama Pengalaman',
            'rules' => 'required']
        ];
    }

    public function getPengalaman()
    {
        $hasil = $this->db->get('pengalaman');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('pengalaman', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id           = $post["id"];
        $this->nama_peng    = $post["namaPengalaman"];
        $this->db->insert('pengalaman', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->nama_peng= $post["namaPengalaman"];
        $this->db->update('pengalaman', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('pengalaman', array("id" => $id));
    }
}
