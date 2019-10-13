<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("experience_models");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['pengalaman'] = $this->experience_models->getPengalaman();
		var_dump($data);
		$this->load->view('admin/experience/list', $data);
	}

	public function add()
	{
		$pengalaman = $this->experience_models;
		$validation = $this->form_validation;
		$validation->set_rules($pengalaman->rules());
		if($validation->run()){
			$pengalaman->save();
			$this->session->set_flashdata('success', 'Data Pengalaman Berhasil Ditambahkan');
			redirect(site_url('admin/experience'));
		}
		$this->load->view("admin/experience");
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('admin/experience');

		$pengalaman = $this->experience_models;
		$validation = $this->form_validation;
		$validation->set_rules($pengalaman->rules());

		if($validation->run()) {
			$pengalaman->update();
			$this->session->set_flashdata('success', 'Data pengalaman Berhasil Diubah');
			redirect(site_url('admin/experience'));
		}

		$data["pengalaman"] = $pengalaman->getById($id);
		if(!$data["pengalaman"]) show_404();

		$this->load->view("admin/experience/edit_form", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();

		if($this->experience_models->delete($id)){
			redirect(site_url("admin/experience"));
		}
	}
}
