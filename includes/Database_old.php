<?php

class Database {

  private static $db_host       = 'localhost';
   private static $db_port       = '5598';
   private static $db_name       = 'infiniti';
   private static $db_username   = 'root';
   private static $db_password   = 'coop';
  // 
  // private static $db_host       = 'localhost';
  // private static $db_port       = '3306';
  // private static $db_name       = 'magnify';
  // private static $db_username   = 'magnify';
  // private static $db_password   = 'wior0br7';
  
  
  
  private static $instance = NULL;
  public $dsn = NULL;
  public $pdo = NULL;

  private function __construct() {
    $this->dsn = 'mysql:host=' . self::$db_host . ';port=' . self::$db_port .  ';dbname=' . self::$db_name;
    try {
      $this->pdo = new PDO($this->dsn, self::$db_username, self::$db_password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  




} // end of database class



?>

