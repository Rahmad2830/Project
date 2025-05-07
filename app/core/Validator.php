<?php
namespace Project\Mvc\core;

class Validator {
  private $data = [];
  private $error = [];
  
  public function __construct($data) {
    $this->data = $data;
  }
  public function validateRequired($field, $values) {
    if(empty($this->data[$values])) {
      $this->error[$field] = "*$field is required";
    } else if(strlen($this->data[$values]) < 3) {
      $this->error[$field] = "must be more than 3 characters";
    }
    return $this->error;
  }
  public function validateEmail($field, $values) {
    if(empty($this->data[$values])) {
      $this->error[$field] = "*$fiels is required";
    } else if (!filter_var($this->data[$values], FILTER_VALIDATE_EMAIL)) {
      $this->error[$field] = "$field must be a valid email";
    }
    return $this->error;
  }
  public function validatePhone($field, $values) {
    if(empty($this->data[$values])) {
      $this->error[$field] = "*$field is required";
    } else if(!is_numeric($this->data[$values])) {
      $this->error[$field] = "$field must be a phone number";
    } else if (!filter_var($this->data[$values], FILTER_SANITIZE_NUMBER_INT)) {
      $this->error[$field] = "$field number is not valid";
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