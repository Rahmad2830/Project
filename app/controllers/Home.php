<?php
namespace Project\Mvc\controllers;
use Project\Mvc\core\BaseController;

class Home extends BaseController {
  public function index() {
    $data['product'] = $this->model("ProductModel")->getAllData();
    $this->view("template/header");
    $this->view("Home", $data);
    $this->view("template/footer");
  }
}