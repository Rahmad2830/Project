<?php
namespace Project\Mvc\controllers;
use Project\Mvc\core\BaseController;
use Project\Mvc\core\Validator;

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
  public function addEmail() {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(!file_exists(__DIR__."/../data/Email.json")) {
        $path = __DIR__."/../data/Email.json";
        fopen($path, "w");
        file_put_contents($path, "[]");
      }
      $validator = new Validator($_POST);
      $data = $validator->validate("Name", "name");
      $data = $validator->validate("Email", "email");
      if($validator->noError()) {
        $data = $validator->sanitize();
        $this->model("ProductModel")->addEmail($data);
        header("location:".BASEURL."/Home/index");
      }
    }
    $this->view("template/header");
    $this->view("Home", $data);
    $this->view("template/footer");
  }
}