<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Skill_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'nm_skill',
            'label' => 'Nama Skill',
            'rules' => 'required'],

            ['field' => 'ket_skill',
            'label' => 'ket_skill',
            'rules' => 'required']
        ];
    }

    public function getSkill()
    {
        $hasil = $this->db->get('skill');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('skill', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id           = $post["id"];
        $this->nama_skill   = $post["nm_skill"];
        $this->ket_skill    = $post["ket_skill"];
        $this->db->insert('skill', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id           = $post["id"];
        $this->nama_skill   = $post["nm_skill"];
        $this->ket_skill    = $post["ket_skill"];
        $this->db->update('skill', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id" => $id));
    }
}
