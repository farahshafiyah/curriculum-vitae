<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("contact_models");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['contact'] = $this->contact_models->getContact();
		var_dump($data);
		$this->load->view('admin/contact/list', $data);
	}

	public function add()
	{
		$contact = $this->contact_models;
		$validation = $this->form_validation;
		$validation->set_rules($contact->rules());
		if($validation->run()){
			$contact->save();
			$this->session->set_flashdata('success', 'Data Contact Berhasil Ditambahkan');
			redirect(site_url('admin/contact'));
		}
		$this->load->view("admin/contact");
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('admin/contact');

		$contact = $this->contact_models;
		$validation = $this->form_validation;
		$validation->set_rules($contact->rules());

		if($validation->run()) {
			$contact->update();
			$this->session->set_flashdata('success', 'Data Contact Berhasil Diubah');
			redirect(site_url('admin/contact'));
		}

		$data["contact"] = $contact->getById($id);
		if(!$data["contact"]) show_404();

		$this->load->view("admin/contact/edit_form", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();

		if($this->contact_models->delete($id)){
			redirect(site_url("admin/contact"));
		}
	}
}
