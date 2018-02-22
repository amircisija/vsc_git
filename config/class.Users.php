<?php

require_once 'database.php';

class User {

	private $conn;
	
	public function __construct()
	{
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}    


}