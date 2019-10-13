<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Info_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'info',
            'label' => 'info',
            'rules' => 'required'],

            ['field' => 'foto',
            'label' => 'foto',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('info');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('info', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id   = $post["id"];
        $this->info = $post["info"];
        $this->foto = $post["foto"];
        $this->db->insert('info', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->info = $post["info"];
        $this->foto = $post["foto"];
        $this->db->update('info', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('info', array("id" => $id));
    }
}
