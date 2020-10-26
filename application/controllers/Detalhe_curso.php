<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalhe_curso extends CI_Controller {
  public function show($id) {

    $data['title'] = "Detalhes do curso";

    $this->load->model("cursos_model");

    $data['curso'] = $this->cursos_model->show($id);
    $img_galeria_temp = substr($data['curso']['img_galeria'], 0, -1);

    $data['img_galeria_nome'] = explode(",",  $img_galeria_temp);
      
    $this->load->view("templates/header", $data);
    $this->load->view("templates/navbar");
    $this->load->view("pages/detalhe_curso", $data);
    $this->load->View("templates/footer");
  }
}