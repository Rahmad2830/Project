<?php
namespace Project\Mvc\core;

class Validator {
  private $data = [];
  private $error = [];
  
  public function __construct($data) {
    $this->data = $data;
  }
  public function validate($field, $values) {
    if(empty($this->data[$values])) {
      $this->error[$field] = "*$field is required";
    } else if(strlen($this->data[$values]) < 3) {
      $this->error[$field] = "must be more than 3 characters";
    }
    return $this->error;
  }
  public function sanitize() {
    $this->data = array_map('htmlspecialchars', $this->data);
    $this->data = array_map('stripslashes', $this->data);
    $this->data = array_map('trim', $this->data);
    return $this->data;
  }
  public function noError() {
    return empty($this->error);
  }
}