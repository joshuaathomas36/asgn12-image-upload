<?php

class Image {
  public $image_url;
    
  // start of active record code

  static public $database;

  // TODO: figure out why I can't set this to protected
  static public function set_database($database) {
    self::$database = $database;
  }
    
  static public function find_by_sql($sql) {
    $result = self::$database->query($sql);
    if(!$result) {
      exit("Database query failed.");
    }
    // convert the results into objects
    $objectArray = [];
    while($record = $result->fetch_assoc()) {
      $objectArray[] = self::instantiate($record);
    }
    $result->free();
    return $objectArray;
  }

  static protected function instantiate($record) {
    $object = new self;
    // could manually do this, but this method is cooler
    foreach($record as $property=>$value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
      return $object;
  }

  static public function find_all() {
    $sql = "SELECT * FROM images ORDER BY id DESC";
    return self::find_by_sql($sql);
  }
  
  // $img_name = $_FILES['my_image']['name'];
  // $img_size = $_FILES['my_image']['size'];
  // $tmp_name = $_FILES['my_image']['tmp_name'];
  // $error = $_FILES['my_image']['error'];

  // public function upload_image_file() {

  // }

  // public function test_image_size() {

  // }

  // public function test_image_type() {

  // }

  // public function insert_image_url() {
    
  // }
}
