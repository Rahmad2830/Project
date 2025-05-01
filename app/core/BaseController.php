<?php
namespace Project\Mvc\core;

class BaseController {
  public function view($path, $data=[]){
    require_once __DIR__."/../views/".$path.".php";
  }
  public function model($model) {
    $modelName = "Project\Mvc\models\\".$model;
    return new $modelName;
  }
}