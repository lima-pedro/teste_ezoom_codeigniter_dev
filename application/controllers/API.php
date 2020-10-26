<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {

  public function __construct()
    {
      // header CORS
      header('Access-Control-Allow-Origin: *');
      header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
      header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
      $method = $_SERVER['REQUEST_METHOD'];
      if($method == 'OPTIONS') {
        die();
      }

      parent::__construct();
      $this->load->helper('json_output_helper');
      $this->load->model("cursos_model");
       
    }

  public function index () {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'GET') {

      $response = $this->cursos_model->index();
      json_output(200, $response);
    }
  }

  public function create () {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {

      $curso = json_decode(file_get_contents('php://input'), TRUE);
      $this->cursos_model->create($curso);
      json_output(200, array('message' => "ok"));
    }
  }

  public function show ($id) {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'GET') {
      $curso = $this->cursos_model->show($id);
      json_output(200, $curso);
    }
  }

  public function update ($id) {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'PUT') {

      $curso = json_decode(file_get_contents('php://input'), TRUE);
      $this->cursos_model->update($id, $curso);
      json_output(200, array('message' => "ok"));
    }
  }

  public function delete ($id) {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == "DELETE") {
      $this->cursos_model->delete($id);
      json_output(200, array('message' => "ok"));
    }
  }
}