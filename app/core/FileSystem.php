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
    $result = $this->getContents($filePath);
    
    $arr = [
      "Nama" => $data['name'],
      "Email" => $data['email'],
      "Phone" => $data['phone'],
      "Message" => $data['message']
      ];
      
    $result[] = $arr;
    $this->putContents($filePath, $result);
  }
}