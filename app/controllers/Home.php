<?php
namespace Project\Mvc\controllers;
use Project\Mvc\core\BaseController;

class Home extends BaseController {
  public function index() {
    $this->view("template/header");
    $this->view("Home");
    $this->view("template/footer");
  }
  public function menu() {
    $data['product'] = $this->model("ProductModel")->getAllData();
    $this->view("template/header");
    $this->view("Menu", $data);
    $this->view("template/footer");
  }
}