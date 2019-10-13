<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_models");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->user_models->getUser();
		var_dump($data);
		$this->load->view('admin/user/list', $data);
	}

	public function add()
	{
		$user = $this->user_models;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());
		if($validation->run()){
			$user->save();
			$this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan');
			redirect(site_url('admin/user'));
		}
		$this->load->view("admin/user");
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('admin/user');

		$user = $this->user_models;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if($validation->run()) {
			$user->update();
			$this->session->set_flashdata('success', 'Data user Berhasil Diubah');
			redirect(site_url('admin/user'));
		}

		$data["user"] = $user->getById($id);
		if(!$data["user"]) show_404();

		$this->load->view("admin/user/edit_form", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();

		if($this->user_models->delete($id)){
			redirect(site_url("admin/user"));
		}
	}
}
