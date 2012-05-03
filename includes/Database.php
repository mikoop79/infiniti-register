<?php

class Database {

//  private static $db_host       = 'localhost';
//   private static $db_port       = '5598';
//   private static $db_name       = 'infiniti';
//   private static $db_username   = 'root';
//   private static $db_password   = 'coop';
  // 
 private static $db_host       = 'localhost';
 private static $db_port       = '8888';
 private static $db_name       = 'root';
 private static $db_username   = 'root';
 private static $db_password   = 'root';
 
  
  
  
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


public static function addGuest(array $values){
	

			  	$database = new Database();
				$sql = "INSERT INTO `infiniti`.`guest` (`title`, `firstname`, `surname`, `dob`, `ppNumber`, `frequentFlyerNo`, `departureCity`, `returnCity`, `dietaryRequirements`, `size`, `gender`, `date`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP);";
			try {
		      		$statement = $database->pdo->prepare($sql);
		      		$return = $statement->execute($values);
			  		//positive as data is now inserted
			  		
		if ($return) {		 	
        			    $id = $database->pdo->lastInsertId();
    				 }
		      		
		      		$database->pdo = null;
		   			// return a boolean
					return $id;
				} catch (PDOException $e) {
      echo $e->getMessage();
		$id = false;
        return $id; 
    }

}

public static function addUser(array $values){
	
				$id = true;
			  	$database = new Database();
				$sql = "INSERT INTO `infiniti`.`data` (`title`, `firstname`, `surname`, `dob`, `ppNumber`, `frequentFlyerNo`, `departureCity`, `returnCity`, `dietaryRequirements`, `MailAddress`, `phoneNumber`, `phoneUp`, `guestId`, `size`, `gender`, `date`, `user_type`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?, ?, CURRENT_TIMESTAMP, ?);";
				
			try {
		      		$statement = $database->pdo->prepare($sql);
		      		$return = $statement->execute($values);
			  		//positive as data is now inserted
			  		
		
		      		
		      		$database->pdo = null;
		   			// return a boolean
					return $id;
				} catch (PDOException $e) {
      echo $e->getMessage();
		$id = false;
        return $id; 
    }
}
public static function showerror() {
  die("Error " . mysql_errno() . " : " . mysql_error());
}

public static function mysqlclean($array, $index, $maxlength, $connection) {
  if (isset($array["{$index}"])) {
     $input = substr($array["{$index}"], 0, $maxlength);
     $input = mysql_real_escape_string($input, $connection);
     return ($input);
  }
  return NULL;
}

public static function shellclean($array, $index, $maxlength) {
  if (isset($array["{$index}"])) {
    $input = substr($array["{$index}"], 0, $maxlength);
    $input = EscapeShellArg($input);
    return ($input);
  }
  return NULL;
}

public static function prePopulate($user_email){
	// no id set yet
	
	$user= false;
	$sql = "SELECT * FROM invited WHERE email = ?";
	$database = Database::getInstance();      
    $values = array($user_email);
	
try {
	  //$database->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $statement = $database->pdo->prepare($sql);
      $statement->execute($values);
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      $database->pdo = null;
    

if (count($result) > 0) {
    	
		//get the id from the users table
    	$user = $result;
		
    	// id is now set
      	return $user;
    } else {
    	return $user;
    }
    
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

}


public static function checkEmail($user_email){
	// no id set yet
	
	$id = false;
	$sql = "SELECT * FROM invited WHERE email = ?";
	$database = Database::getInstance();      
    $values = array($user_email);
	
try {
	  //$database->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $statement = $database->pdo->prepare($sql);
      $statement->execute($values);
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      $database->pdo = null;
    

if (count($result) > 0) {
    	
		//get the id from the users table
    	$id = true;
		
    	// id is now set
      	return $id;
    } else {
    	return $id;
    }
    
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

}


} // end of database class



?>

