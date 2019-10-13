<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portofolio_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'foto',
            'label' => 'foto',
            'rules' => 'required'],

            ['field' => 'ket_port',
            'label' => 'ket_port',
            'rules' => 'required']
        ];
    }

    public function getPortofolio()
    {
        $hasil = $this->db->get('portofolio');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('portofolio', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->foto     = $post["foto"];
        $this->ket_port = $post["ket_port"];
        $this->db->insert('portofolio', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->foto     = $post["foto"];
        $this->ket_port = $post["ket_port"];
        $this->db->update('portofolio', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('portofolio', array("id" => $id));
    }
}
