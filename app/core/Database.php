<?php
namespace Project\Mvc\core;
use PDO;

require_once __DIR__."/../config/config.php";

class Database {
  private $host = DBHOST;
  private $dbname = DBNAME;
  private $user = DBUSER;
  private $pass = DBPASS;
  private $db;
  private $stmt;
  
  public function __construct() {
    try {
      $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);
    } catch (PDOException $err) {
      echo "Connection failed ".$err->getMessage();
    }
  }
  public function query($query) {
    $this->stmt = $this->db->prepare($query);
  }
  public function bind($param, $value, $type=null) {
    if(is_null($type)) {
      switch(true) {
        case is_int($value) :
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value) :
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value) :
          $type = PDO::PARAM_NULL;
          break;
        default :
          $type = PDO::PARAM_STR;
          break;
      }
    }
  }
  public function execute() {
    $this->stmt->execute();
  }
  public function resultSet() {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}