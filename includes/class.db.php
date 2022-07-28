<?php
class ConnectDb {
	private $connection;
	private static $instance; //The single instance
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "";

    
	// Constructor
	private function __construct() {
		$this->connection = new mysqli($this->host, $this->username, 
			$this->password, $this->database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(),
				 E_USER_ERROR);
		}
	}

	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$instance) { // If no instance then make one
			self::$instance = new self();
		}
		return self::$instance;
	}
	// Get mysqli connection
	public function getConnection() {
		return $this->connection;
	}
}
?>