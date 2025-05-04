<?php
namespace Project\Mvc\core;

class FileSystem {
  
  public function getContents($filePath) {
    if(!file_exists($filePath)) {
      return [];
    }
    $json = file_get_contents($filePath);
    $result = json_decode($json, true);
    return $result;
  }
  public function putContents($filePath, $data) {
    $data = json_encode($data);
    return file_put_contents($filePath, $data);
  }
  public function addEmail($filePath, $data) {
    $result = $this->getContents("Email.json");
    
    $arr = [
      "Nama" => $data['nama'],
      "Email" => $data['email']
      ];
      
    $result[] = $arr;
    $this->putContents($filePath, $result);
  }
}