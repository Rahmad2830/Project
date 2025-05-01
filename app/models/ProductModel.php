<?php
namespace Project\Mvc\models;
use Project\Mvc\core\Database;

class ProductModel {
  private $dbh;
  
  public function __construct() {
    $this->dbh = new Database;
  }
  
  public function getAllData() {
    $this->dbh->query("SELECT * FROM daftar_coffee");
    $this->dbh->execute();
    return $this->dbh->resultSet();
  }
}