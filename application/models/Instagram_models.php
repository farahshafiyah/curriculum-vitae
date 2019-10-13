<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Instagram_models extends CI_Model
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

    public function getIg()
    {
        $hasil = $this->db->get('instagram');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('instagram', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id   = $post["id"];
        $this->link = $post["link"];
        $this->db->insert('instagram', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id   = $post["id"];
        $this->link = $post["link"];
        $this->db->update('instagram', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('instagram', array("id" => $id));
    }
}
