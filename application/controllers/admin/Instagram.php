<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instagram extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("instagram_models");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['instagram'] = $this->instagram_models->getIg();
		var_dump($data);
		$this->load->view('admin/instagram/list', $data);
	}

	public function add()
	{
		$instagram = $this->instagram_models;
		$validation = $this->form_validation;
		$validation->set_rules($instagram->rules());
		if($validation->run()){
			$instagram->save();
			$this->session->set_flashdata('success', 'Data Instagram Berhasil Ditambahkan');
			redirect(site_url('admin/instagram'));
		}
		$this->load->view("admin/instagram");
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('admin/instagram');

		$instagram = $this->instagram_models;
		$validation = $this->form_validation;
		$validation->set_rules($instagram->rules());

		if($validation->run()) {
			$instagram->update();
			$this->session->set_flashdata('success', 'Data instagram Berhasil Diubah');
			redirect(site_url('admin/instagram'));
		}

		$data["instagram"] = $instagram->getById($id);
		if(!$data["instagram"]) show_404();

		$this->load->view("admin/instagram/edit_form", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();

		if($this->instagram_models->delete($id)){
			redirect(site_url("admin/instagram"));
		}
	}
}
