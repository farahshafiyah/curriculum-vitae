<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'uname',
            'label' => 'uname',
            'rules' => 'required'],

            ['field' => 'pass',
            'label' => 'pass',
            'rules' => 'required']
        ];
    }

    public function getUser()
    {
        $hasil = $this->db->get('user');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('user', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->uname    = $post["uname"];
        $this->pass     = $post["pass"];
        $this->db->insert('user', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id       = $post["id"];
        $this->uname    = $post["uname"];
        $this->pass     = $post["pass"];
        $this->db->update('user', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('user', array("id" => $id));
    }
}
