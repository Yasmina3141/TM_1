<?php

class DbOperation
{
    //Database connection link
    private $con;

    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect_TM.php';

        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();

        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }

	/*
	* The create operation
	* When this method is called a new record is created in the database
	*/
	function createUser($name, $email_address, $address, $psswd, $maths, $physics, $English, $Monday_9, $Monday_10, $Monday_11){
		$stmt = $this->con->prepare("INSERT INTO name, email_address, address, psswd, maths, physics, English, Monday_9, Monday_10, Monday_11) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssis", $name, $email_address, $address, $psswd, $maths, $physics, $English, $Monday_9, $Monday_10, $Monday_11);
		if($stmt->execute())
			return true;
		return false;
	}

	/*
	* The read operation
	* When this method is called it is returning all the existing record of the database
	*/
	function getUser(){
		$stmt = $this->con->prepare("SELECT id, name, email_address, address, psswd, maths, physics, English, Monday_9, Monday_10, Monday_11 FROM users");
		$stmt->execute();
		$stmt->bind_result($id, $name, $email_address, $address, $psswd, $maths, $physics, $English, $Monday_9, $Monday_10, $Monday_11);

		$users = array();

		while($stmt->fetch()){
			$user  = array();
			$user['id'] = $id;
			$user['name'] = $name;
			$user['email_address'] = $email_address;
			$user['address'] = $address;
			$user['psswd'] = $psswd;
      $user['maths'] = $maths;
      $user['physics'] = $physics;
      $user['English'] = $English;
      $user['Monday_9'] = $Monday_9;
      $user['Monday_10'] = $Monday_10;
      $user['Monday_11'] = $Monday_11;

			array_push($users, $user);
		}

		return $users;
	}

	/*
	* The update operation
	* When this method is called the record with the given id is updated with the new given values
	*/
	function updateUser($id, $name, $email_address, $address, $password, $maths, $physics, $English, $Monday_9, $Monday_10, $Monday_11){
		$stmt = $this->con->prepare("UPDATE users SET name = ?, email_address = ?, address = ?, password = ?, maths = ?, physics = ? English = ?, Monday_9 = ?, Monday_10 = ?, Monday_11 = ? WHERE id = ?");
		$stmt->bind_param("ssisi", $name, $email_address, $address, $password, $maths, $physics, $English, $Monday_9, $Monday_10, $Monday_11, $id);
		if($stmt->execute())
			return true;
		return false;
	}


	/*
	* The delete operation
	* When this method is called record is deleted for the given id
	*/
	function deleteUser($id){
		$stmt = $this->con->prepare("DELETE FROM users WHERE id = ? ");
		$stmt->bind_param("i", $id);
		if($stmt->execute())
			return true;

		return false;
	}
}
