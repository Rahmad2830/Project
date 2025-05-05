<?php
namespace Project\Mvc\models;
use Project\Mvc\core\FileSystem;

class ProductModel {
  private $dbh;
  
  public function __construct() {
    $this->dbh = new FileSystem;
  }
  
  public function getAllData() {
    return $this->dbh->getContents(__DIR__."/../data/Menu.json");
  }
  
  public function addEmail($data) {
    return $this->dbh->addEmail(__DIR__."/../data/Email.json", $data);
  }
}