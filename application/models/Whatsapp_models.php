<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Whatsapp_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'link',
            'label' => 'link',
            'rules' => 'required']
        ];
    }

    public function getWa()
    {
        $hasil = $this->db->get('whatsapp');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('whatsapp', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id   = $post["id"];
        $this->link = $post["link"];
        $this->db->insert('whatsapp', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->link     = $post["link"];
        $this->db->update('whatsapp', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('whatsapp', array("id" => $id));
    }
}
