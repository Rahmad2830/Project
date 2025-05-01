<?php
namespace Project\Mvc\core;

class App {
  private $controller = "Home";
  private $method = "index";
  private $params = [];
  
  public function __construct() {
    $url = $this->parseUrl();
    
    if(isset($url[0])) {
      $this->controller = $url[0];
      unset($url[0]);
    }
    $newControllerName = "Project\Mvc\controllers\\".$this->controller;
    if(class_exists($newControllerName)) {
      $this->controller = new $newControllerName;
    }
    if(isset($url[1])) {
      if(method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    if(!empty($url)) {
      $this->params = array_values($url);
    }
    
    call_user_func_array([$this->controller, $this->method], $this->params);
    
  }
  public function parseUrl() {
    if(isset($_GET['url'])) {
      $url = rtrim($_GET['url'], "/");
      $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
      $url = explode("/", $_GET['url']);
      return $url;
    }
  }
}