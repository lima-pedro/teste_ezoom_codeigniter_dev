<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_cursos extends CI_Controller {
  public function index() {

    $data['title'] = "Cadastro de cursos";

    $this->load->view("templates/header", $data);
    $this->load->view("templates/navbar");
    $this->load->view("pages/cadastro_cursos");
    $this->load->view("templates/footer");
  }
 
  public function create() {
    $galeria = '';

    $curso['titulo'] = $_POST['title'];
    $curso['descricao'] = $_POST['description'];
    $curso['img_principal'] = time().$_FILES['main_image']['name'];

    // Upload da imagem principal
    $imagem_dir = "public/uploads/imgs_principais/".$curso['img_principal'];
    move_uploaded_file($_FILES['main_image']["tmp_name"], $imagem_dir);

    $tamanho_array_galeria = count($_FILES['galery_images']['name']);

    for ($i = 0; $i < $tamanho_array_galeria; $i++) {

      $temp_name = time() . $_FILES['galery_images']['name'][$i];
      $galeria .=  $temp_name . ",";

      // Upload das imagens da galeria
      $imagem_dir = "public/uploads/imgs_galeria/".$temp_name;
      move_uploaded_file($_FILES['galery_images']['tmp_name'][$i], $imagem_dir);
    }

    $curso['img_galeria'] = $galeria;

    // print "<pre>";
    // print_r($curso);
    // print "</pre>";
    // exit();

    $this->load->model("cursos_model");
    $this->cursos_model->create($curso);

    redirect('home');
  }
}