<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function index() {
    $data['title'] = "Home - Listagem de cursos";

    $this->load->model("Cursos_model");

    $data['cursos'] = $this->Cursos_model->index();

    $this->load->view("templates/header", $data);
    $this->load->view("templates/navbar");
    $this->load->view("pages/home", $data);
    $this->load->view("templates/footer");
  }
}