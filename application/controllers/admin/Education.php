<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("education_models");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['pendidikan'] = $this->education_models->getPendidikan();
		var_dump($data);
		$this->load->view('admin/education/list', $data);
	}

	public function add()
	{
		$pendidikan = $this->education_models;
		$validation = $this->form_validation;
		$validation->set_rules($pendidikan->rules());

		// var_dump($validation->run());
		if($validation->run()){
			$pendidikan->save();
			$this->session->set_flashdata('success', 'Data pendidikan Berhasil Ditambahkan');
			redirect(site_url('admin/education'));
		}
		$this->load->view("admin/education");
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('admin/education');

		$pendidikan = $this->education_models;
		$validation = $this->form_validation;
		$validation->set_rules($pendidikan->rules());

		if($validation->run()) {
			$pendidikan->update();
			$this->session->set_flashdata('success', 'Data Pendidikan Berhasil Diubah');
			redirect(site_url('admin/education'));
		}

		$data["pendidikan"] = $pendidikan->getById($id);
		if(!$data["pendidikan"]) show_404();

		$this->load->view("admin/education/edit_form", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();

		if($this->education_models->delete($id)){
			redirect(site_url("admin/education"));
		}
	}
}
