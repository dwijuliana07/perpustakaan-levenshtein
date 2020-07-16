<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("perpus_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["perpus"] = $this->perpus_model->getAll();
        $this->load->view("admin/perpus/list", $data);
    }

    public function add()
    {
        $perpus = $this->perpus_model;
        $validation = $this->form_validation;
        $validation->set_rules($perpus->rules());

        if ($validation->run()) {
            $perpus->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/perpus/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/perpus');
       
        $perpus = $this->perpus_model;
        $validation = $this->form_validation;
        $validation->set_rules($perpus->rules());

        if ($validation->run()) {
            $perpus->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["perpus"] = $perpus->getById($id);
        if (!$data["perpus"]) show_404();
        
        $this->load->view("admin/perpus/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->perpus_model->delete($id)) {
            redirect(site_url('admin/perpus'));
        }
    }
}