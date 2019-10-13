<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'telp',
            'label' => 'telp',
            'rules' => 'required'],

            ['field' => 'hp',
            'label' => 'hp',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required']

        ];
    }

    public function getContact()
    {
        $hasil = $this->db->get('contact');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('contact', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->alamat   = $post["alamat"];
        $this->telp     = $post["telp"];
        $this->hp       = $post["hp"];
        $this->email    = $post["email"];
        $this->db->insert('contact', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->alamat   = $post["alamat"];
        $this->telp     = $post["telp"];
        $this->hp       = $post["hp"];
        $this->email    = $post["email"];
        $this->db->update('contact', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('contact', array("id" => $id));
    }
}
