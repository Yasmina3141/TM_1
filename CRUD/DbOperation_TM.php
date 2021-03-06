 <?php

// DbOperation.php

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
	function createUser($first_name, $last_name, $email_address, $address, $psswd, $maths, $physics, $English, $French, $German, $Spanish, $Italian, $Latin, $Greek, $sciences, $psychology, $philosophy, $music, $applied_maths, $history, $geography, $economics_laws, $biology, $chemistry, $Monday_9, $Monday_10, $Monday_11, $Monday_12, $Monday_13, $Monday_14, $Monday_15, $Monday_16, $Monday_17, $Monday_18, $Monday_19, $Monday_20, $Tuesday_9, $Tuesday_10, $Tuesday_11, $Tuesday_12, $Tuesday_13, $Tuesday_14, $Tuesday_15, $Tuesday_16, $Tuesday_17, $Tuesday_18, $Tuesday_19, $Tuesday_20, $Wednesday_9, $Wednesday_10, $Wednesday_11, $Wednesday_12, $Wednesday_13, $Wednesday_14, $Wednesday_15, $Wednesday_16, $Wednesday_17, $Wednesday_18, $Wednesday_19, $Wednesday_20, $Thursday_9, $Thursday_10, $Thursday_11, $Thursday_12, $Thursday_13, $Thursday_14, $Thursday_15, $Thursday_16, $Thursday_17, $Thursday_18, $Thursday_19, $Thursday_20, $Friday_9, $Friday_10, $Friday_11, $Friday_12, $Friday_13, $Friday_14, $Friday_15, $Friday_16, $Friday_17, $Friday_18, $Friday_19, $Friday_20, $Saturday_9, $Saturday_10, $Saturday_11, $Saturday_12, $Saturday_13, $Saturday_14, $Saturday_15, $Saturday_16, $Saturday_17, $Saturday_18, $Saturday_19, $Saturday_20, $Sunday_9, $Sunday_10, $Sunday_11, $Sunday_12, $Sunday_13, $Sunday_14, $Sunday_15, $Sunday_16, $Sunday_17, $Sunday_18, $Sunday_19, $Sunday_20, $level, $status, $price) {
		$stmt = $this->con->prepare("INSERT INTO users ( first_name ,  last_name ,  email_address ,  address ,  psswd ,  maths ,  physics ,  English ,  French ,  German ,  Spanish ,  Italian ,  Latin ,  Greek ,  sciences ,  psychology ,  philosophy ,  music ,  applied_maths ,  history ,  geography ,  economics_laws ,  biology ,  chemistry ,  Monday_9 ,  Monday_10 ,  Monday_11 ,  Monday_12 ,  Monday_13 ,  Monday_14 ,  Monday_15 ,  Monday_16 ,  Monday_17 ,  Monday_18 ,  Monday_19 ,  Monday_20 ,  Tuesday_9 ,  Tuesday_10 ,  Tuesday_11 ,  Tuesday_12 ,  Tuesday_13 ,  Tuesday_14 ,  Tuesday_15 ,  Tuesday_16 ,  Tuesday_17 ,  Tuesday_18 ,  Tuesday_19 ,  Tuesday_20 ,  Wednesday_9 ,  Wednesday_10 ,  Wednesday_11 ,  Wednesday_12 ,  Wednesday_13 ,  Wednesday_14 ,  Wednesday_15 ,  Wednesday_16 ,  Wednesday_17 ,  Wednesday_18 ,  Wednesday_19 ,  Wednesday_20 ,  Thursday_9 ,  Thursday_10 ,  Thursday_11 ,  Thursday_12 ,  Thursday_13 ,  Thursday_14 ,  Thursday_15 ,  Thursday_16 ,  Thursday_17 ,  Thursday_18 ,  Thursday_19 ,  Thursday_20 ,  Friday_9 ,  Friday_10 ,  Friday_11 ,  Friday_12 ,  Friday_13 ,  Friday_14 ,  Friday_15 ,  Friday_16 ,  Friday_17 ,  Friday_18 ,  Friday_19 ,  Friday_20 ,  Saturday_9 ,  Saturday_10 ,  Saturday_11 ,  Saturday_12 ,  Saturday_13 ,  Saturday_14 ,  Saturday_15 ,  Saturday_16 ,  Saturday_17 ,  Saturday_18 ,  Saturday_19 ,  Saturday_20 ,  Sunday_9 ,  Sunday_10 ,  Sunday_11 ,  Sunday_12 ,  Sunday_13 ,  Sunday_14 ,  Sunday_15 ,  Sunday_16 ,  Sunday_17 ,  Sunday_18 ,  Sunday_19 ,  Sunday_20 ,  level ,  status ,  price ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiissi", $first_name, $last_name, $email_address, $address, $psswd, $maths, $physics, $English, $French, $German, $Spanish, $Italian, $Latin, $Greek, $sciences, $psychology, $philosophy, $music, $applied_maths, $history, $geography, $economics_laws, $biology, $chemistry, $Monday_9, $Monday_10, $Monday_11, $Monday_12, $Monday_13, $Monday_14, $Monday_15, $Monday_16, $Monday_17, $Monday_18, $Monday_19, $Monday_20, $Tuesday_9, $Tuesday_10, $Tuesday_11, $Tuesday_12, $Tuesday_13, $Tuesday_14, $Tuesday_15, $Tuesday_16, $Tuesday_17, $Tuesday_18, $Tuesday_19, $Tuesday_20, $Wednesday_9, $Wednesday_10, $Wednesday_11, $Wednesday_12, $Wednesday_13, $Wednesday_14, $Wednesday_15, $Wednesday_16, $Wednesday_17, $Wednesday_18, $Wednesday_19, $Wednesday_20, $Thursday_9, $Thursday_10, $Thursday_11, $Thursday_12, $Thursday_13, $Thursday_14, $Thursday_15, $Thursday_16, $Thursday_17, $Thursday_18, $Thursday_19, $Thursday_20, $Friday_9, $Friday_10, $Friday_11, $Friday_12, $Friday_13, $Friday_14, $Friday_15, $Friday_16, $Friday_17, $Friday_18, $Friday_19, $Friday_20, $Saturday_9, $Saturday_10, $Saturday_11, $Saturday_12, $Saturday_13, $Saturday_14, $Saturday_15, $Saturday_16, $Saturday_17, $Saturday_18, $Saturday_19, $Saturday_20, $Sunday_9, $Sunday_10, $Sunday_11, $Sunday_12, $Sunday_13, $Sunday_14, $Sunday_15, $Sunday_16, $Sunday_17, $Sunday_18, $Sunday_19, $Sunday_20, $level, $status, $price);
		if($stmt->execute())
			return true;
		return false;
	}

	/*
	* The read operation
	* When this method is called it is returning all the existing record of the database
	*/
	function getUsers(){
		$stmt = $this->con->prepare("SELECT ID, first_name, last_name, email_address, address, psswd, maths, physics, English, French, German, Spanish, Italian, Latin, Greek, sciences, psychology, philosophy, music, applied_maths, history, geography, economics_laws, biology, chemistry, Monday_9, Monday_10, Monday_11, Monday_12, Monday_13, Monday_14, Monday_15, Monday_16, Monday_17, Monday_18, Monday_19, Monday_20, Tuesday_9, Tuesday_10, Tuesday_11, Tuesday_12, Tuesday_13, Tuesday_14, Tuesday_15, Tuesday_16, Tuesday_17, Tuesday_18, Tuesday_19, Tuesday_20, Wednesday_9, Wednesday_10, Wednesday_11, Wednesday_12, Wednesday_13, Wednesday_14, Wednesday_15, Wednesday_16, Wednesday_17, Wednesday_18, Wednesday_19, Wednesday_20, Thursday_9, Thursday_10, Thursday_11, Thursday_12, Thursday_13, Thursday_14, Thursday_15, Thursday_16, Thursday_17, Thursday_18, Thursday_19, Thursday_20, Friday_9, Friday_10, Friday_11, Friday_12, Friday_13, Friday_14, Friday_15, Friday_16, Friday_17, Friday_18, Friday_19, Friday_20, Saturday_9, Saturday_10, Saturday_11, Saturday_12, Saturday_13, Saturday_14, Saturday_15, Saturday_16, Saturday_17, Saturday_18, Saturday_19, Saturday_20, Sunday_9, Sunday_10, Sunday_11, Sunday_12, Sunday_13, Sunday_14, Sunday_15, Sunday_16, Sunday_17, Sunday_18, Sunday_19, Sunday_20, level, status, price FROM users");
		$stmt->execute();
		$stmt->bind_result($ID, $first_name, $last_name, $email_address, $address, $psswd, $maths, $physics, $English, $French, $German, $Spanish, $Italian, $Latin, $Greek, $sciences, $psychology, $philosophy, $music, $applied_maths, $history, $geography, $economics_laws, $biology, $chemistry, $Monday_9, $Monday_10, $Monday_11, $Monday_12, $Monday_13, $Monday_14, $Monday_15, $Monday_16, $Monday_17, $Monday_18, $Monday_19, $Monday_20, $Tuesday_9, $Tuesday_10, $Tuesday_11, $Tuesday_12, $Tuesday_13, $Tuesday_14, $Tuesday_15, $Tuesday_16, $Tuesday_17, $Tuesday_18, $Tuesday_19, $Tuesday_20, $Wednesday_9, $Wednesday_10, $Wednesday_11, $Wednesday_12, $Wednesday_13, $Wednesday_14, $Wednesday_15, $Wednesday_16, $Wednesday_17, $Wednesday_18, $Wednesday_19, $Wednesday_20, $Thursday_9, $Thursday_10, $Thursday_11, $Thursday_12, $Thursday_13, $Thursday_14, $Thursday_15, $Thursday_16, $Thursday_17, $Thursday_18, $Thursday_19, $Thursday_20, $Friday_9, $Friday_10, $Friday_11, $Friday_12, $Friday_13, $Friday_14, $Friday_15, $Friday_16, $Friday_17, $Friday_18, $Friday_19, $Friday_20, $Saturday_9, $Saturday_10, $Saturday_11, $Saturday_12, $Saturday_13, $Saturday_14, $Saturday_15, $Saturday_16, $Saturday_17, $Saturday_18, $Saturday_19, $Saturday_20, $Sunday_9, $Sunday_10, $Sunday_11, $Sunday_12, $Sunday_13, $Sunday_14, $Sunday_15, $Sunday_16, $Sunday_17, $Sunday_18, $Sunday_19, $Sunday_20, $level, $status, $price);

		$users = array();

		while($stmt->fetch()){
			$user  = array();
			$user['ID'] = $ID;
      $user['first_name'] = $first_name;
      $user['last_name'] = $last_name;
      $user['email_address'] = $email_address;
      $user['address'] = $address;
      $user['psswd'] = $psswd;
      $user['maths'] = $maths;
      $user['physics'] = $physics;
      $user['English'] = $English;
      $user['French'] = $French;
      $user['German'] = $German;
      $user['Spanish'] = $Spanish;
      $user['Italian'] = $Italian;
      $user['Latin'] = $Latin;
      $user['Greek'] = $Greek;
      $user['sciences'] = $sciences;
      $user['psychology'] = $psychology;
      $user['philosophy'] = $philosophy;
      $user['music'] = $music;
      $user['applied_maths'] = $applied_maths;
      $user['history'] = $history;
      $user['geography'] = $geography;
      $user['economics_laws'] = $economics_laws;
      $user['biology'] = $biology;
      $user['chemistry'] = $chemistry;
      $user['Monday_9'] = $Monday_9;
      $user['Monday_10'] = $Monday_10;
      $user['Monday_11'] = $Monday_11;
      $user['Monday_12'] = $Monday_12;
      $user['Monday_13'] = $Monday_13;
      $user['Monday_14'] = $Monday_14;
      $user['Monday_15'] = $Monday_15;
      $user['Monday_16'] = $Monday_16;
      $user['Monday_17'] = $Monday_17;
      $user['Monday_18'] = $Monday_18;
      $user['Monday_19'] = $Monday_19;
      $user['Monday_20'] = $Monday_20;
      $user['Tuesday_9'] = $Tuesday_9;
      $user['Tuesday_10'] = $Tuesday_10;
      $user['Tuesday_11'] = $Tuesday_11;
      $user['Tuesday_12'] = $Tuesday_12;
      $user['Tuesday_13'] = $Tuesday_13;
      $user['Tuesday_14'] = $Tuesday_14;
      $user['Tuesday_15'] = $Tuesday_15;
      $user['Tuesday_16'] = $Tuesday_16;
      $user['Tuesday_17'] = $Tuesday_17;
      $user['Tuesday_18'] = $Tuesday_18;
      $user['Tuesday_19'] = $Tuesday_19;
      $user['Tuesday_20'] = $Tuesday_20;
      $user['Wednesday_9'] = $Wednesday_9;
      $user['Wednesday_10'] = $Wednesday_10;
      $user['Wednesday_11'] = $Wednesday_11;
      $user['Wednesday_12'] = $Wednesday_12;
      $user['Wednesday_13'] = $Wednesday_13;
      $user['Wednesday_14'] = $Wednesday_14;
      $user['Wednesday_15'] = $Wednesday_15;
      $user['Wednesday_16'] = $Wednesday_16;
      $user['Wednesday_17'] = $Wednesday_17;
      $user['Wednesday_18'] = $Wednesday_18;
      $user['Wednesday_19'] = $Wednesday_19;
      $user['Wednesday_20'] = $Wednesday_20;
      $user['Thursday_9'] = $Thursday_9;
      $user['Thursday_10'] = $Thursday_10;
      $user['Thursday_11'] = $Thursday_11;
      $user['Thursday_12'] = $Thursday_12;
      $user['Thursday_13'] = $Thursday_13;
      $user['Thursday_14'] = $Thursday_14;
      $user['Thursday_15'] = $Thursday_15;
      $user['Thursday_16'] = $Thursday_16;
      $user['Thursday_17'] = $Thursday_17;
      $user['Thursday_18'] = $Thursday_18;
      $user['Thursday_19'] = $Thursday_19;
      $user['Thursday_20'] = $Thursday_20;
      $user['Friday_9'] = $Friday_9;
      $user['Friday_10'] = $Friday_10;
      $user['Friday_11'] = $Friday_11;
      $user['Friday_12'] = $Friday_12;
      $user['Friday_13'] = $Friday_13;
      $user['Friday_14'] = $Friday_14;
      $user['Friday_15'] = $Friday_15;
      $user['Friday_16'] = $Friday_16;
      $user['Friday_17'] = $Friday_17;
      $user['Friday_18'] = $Friday_18;
      $user['Friday_19'] = $Friday_19;
      $user['Friday_20'] = $Friday_20;
      $user['Saturday_9'] = $Saturday_9;
      $user['Saturday_10'] = $Saturday_10;
      $user['Saturday_11'] = $Saturday_11;
      $user['Saturday_12'] = $Saturday_12;
      $user['Saturday_13'] = $Saturday_13;
      $user['Saturday_14'] = $Saturday_14;
      $user['Saturday_15'] = $Saturday_15;
      $user['Saturday_16'] = $Saturday_16;
      $user['Saturday_17'] = $Saturday_17;
      $user['Saturday_18'] = $Saturday_18;
      $user['Saturday_19'] = $Saturday_19;
      $user['Saturday_20'] = $Saturday_20;
      $user['Sunday_9'] = $Sunday_9;
      $user['Sunday_10'] = $Sunday_10;
      $user['Sunday_11'] = $Sunday_11;
      $user['Sunday_12'] = $Sunday_12;
      $user['Sunday_13'] = $Sunday_13;
      $user['Sunday_14'] = $Sunday_14;
      $user['Sunday_15'] = $Sunday_15;
      $user['Sunday_16'] = $Sunday_16;
      $user['Sunday_17'] = $Sunday_17;
      $user['Sunday_18'] = $Sunday_18;
      $user['Sunday_19'] = $Sunday_19;
      $user['Sunday_20'] = $Sunday_20;
      $user['level'] = $level;
      $user['status'] = $status;
      $user['price'] = $price;

			array_push($users, $user);
		}

		return $users;
	}

	/*
	* The update operation
	* When this method is called the record with the given id is updated with the new given values
	*/
	function updateUser($ID, $first_name, $last_name, $email_address, $address, $psswd, $maths, $physics, $English, $French, $German, $Spanish, $Italian, $Latin, $Greek, $sciences, $psychology, $philosophy, $music, $applied_maths, $history, $geography, $economics_laws, $biology, $chemistry, $Monday_9, $Monday_10, $Monday_11, $Monday_12, $Monday_13, $Monday_14, $Monday_15, $Monday_16, $Monday_17, $Monday_18, $Monday_19, $Monday_20, $Tuesday_9, $Tuesday_10, $Tuesday_11, $Tuesday_12, $Tuesday_13, $Tuesday_14, $Tuesday_15, $Tuesday_16, $Tuesday_17, $Tuesday_18, $Tuesday_19, $Tuesday_20, $Wednesday_9, $Wednesday_10, $Wednesday_11, $Wednesday_12, $Wednesday_13, $Wednesday_14, $Wednesday_15, $Wednesday_16, $Wednesday_17, $Wednesday_18, $Wednesday_19, $Wednesday_20, $Thursday_9, $Thursday_10, $Thursday_11, $Thursday_12, $Thursday_13, $Thursday_14, $Thursday_15, $Thursday_16, $Thursday_17, $Thursday_18, $Thursday_19, $Thursday_20, $Friday_9, $Friday_10, $Friday_11, $Friday_12, $Friday_13, $Friday_14, $Friday_15, $Friday_16, $Friday_17, $Friday_18, $Friday_19, $Friday_20, $Saturday_9, $Saturday_10, $Saturday_11, $Saturday_12, $Saturday_13, $Saturday_14, $Saturday_15, $Saturday_16, $Saturday_17, $Saturday_18, $Saturday_19, $Saturday_20, $Sunday_9, $Sunday_10, $Sunday_11, $Sunday_12, $Sunday_13, $Sunday_14, $Sunday_15, $Sunday_16, $Sunday_17, $Sunday_18, $Sunday_19, $Sunday_20, $level, $status, $price){
		$stmt = $this->con->prepare("UPDATE users SET 'first_name' = ?, 'last_name' = ?, 'email_address' = ?, 'address' = ?, 'psswd' = ?, 'maths' = ?, 'physics' = ?, 'English' = ?, 'French' = ?, 'German' = ?, 'Spanish' = ?, 'Italian' = ?, 'Latin' = ?, 'Greek' = ?, 'sciences' = ?, 'psychology' = ?, 'philosophy' = ?, 'music' = ?, 'applied_maths' = ?, 'history' = ?, 'geography' = ?, 'economics_laws' = ?, 'biology' = ?, 'chemistry' = ?, 'Monday_9' = ?, 'Monday_10' = ?, 'Monday_11' = ?, 'Monday_12' = ?, 'Monday_13' = ?, 'Monday_14' = ?, 'Monday_15' = ?, 'Monday_16' = ?, 'Monday_17' = ?, 'Monday_18' = ?, 'Monday_19' = ?, 'Monday_20' = ?, 'Tuesday_9' = ?, 'Tuesday_10' = ?, 'Tuesday_11' = ?, 'Tuesday_12' = ?, 'Tuesday_13' = ?, 'Tuesday_14' = ?, 'Tuesday_15' = ?, 'Tuesday_16' = ?, 'Tuesday_17' = ?, 'Tuesday_18' = ?, 'Tuesday_19' = ?, 'Tuesday_20' = ?, 'Wednesday_9' = ?, 'Wednesday_10' = ?, 'Wednesday_11' = ?, 'Wednesday_12' = ?, 'Wednesday_13' = ?, 'Wednesday_14' = ?, 'Wednesday_15' = ?, 'Wednesday_16' = ?, 'Wednesday_17' = ?, 'Wednesday_18' = ?, 'Wednesday_19' = ?, 'Wednesday_20' = ?, 'Thursday_9' = ?, 'Thursday_10' = ?, 'Thursday_11' = ?, 'Thursday_12' = ?, 'Thursday_13' = ?, 'Thursday_14' = ?, 'Thursday_15' = ?, 'Thursday_16' = ?, 'Thursday_17' = ?, 'Thursday_18' = ?, 'Thursday_19' = ?, 'Thursday_20' = ?, 'Friday_9' = ?, 'Friday_10' = ?, 'Friday_11' = ?, 'Friday_12' = ?, 'Friday_13' = ?, 'Friday_14' = ?, 'Friday_15' = ?, 'Friday_16' = ?, 'Friday_17' = ?, 'Friday_18' = ?, 'Friday_19' = ?, 'Friday_20' = ?, 'Saturday_9' = ?, 'Saturday_10' = ?, 'Saturday_11' = ?, 'Saturday_12' = ?, 'Saturday_13' = ?, 'Saturday_14' = ?, 'Saturday_15' = ?, 'Saturday_16' = ?, 'Saturday_17' = ?, 'Saturday_18' = ?, 'Saturday_19' = ?, 'Saturday_20' = ?, 'Sunday_9' = ?, 'Sunday_10' = ?, 'Sunday_11' = ?, 'Sunday_12' = ?, 'Sunday_13' = ?, 'Sunday_14' = ?, 'Sunday_15' = ?, 'Sunday_16' = ?, 'Sunday_17' = ?, 'Sunday_18' = ?, 'Sunday_19' = ?, 'Sunday_20' = ?, 'level' = ?, status = ?, price = ? WHERE `ID` = ?");
		$stmt->bind_param("sssssiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiissii", $first_name, $last_name, $email_address, $address, $psswd, $maths, $physics, $English, $French, $German, $Spanish, $Italian, $Latin, $Greek, $sciences, $psychology, $philosophy, $music, $applied_maths, $history, $geography, $economics_laws, $biology, $chemistry, $Monday_9, $Monday_10, $Monday_11, $Monday_12, $Monday_13, $Monday_14, $Monday_15, $Monday_16, $Monday_17, $Monday_18, $Monday_19, $Monday_20, $Tuesday_9, $Tuesday_10, $Tuesday_11, $Tuesday_12, $Tuesday_13, $Tuesday_14, $Tuesday_15, $Tuesday_16, $Tuesday_17, $Tuesday_18, $Tuesday_19, $Tuesday_20, $Wednesday_9, $Wednesday_10, $Wednesday_11, $Wednesday_12, $Wednesday_13, $Wednesday_14, $Wednesday_15, $Wednesday_16, $Wednesday_17, $Wednesday_18, $Wednesday_19, $Wednesday_20, $Thursday_9, $Thursday_10, $Thursday_11, $Thursday_12, $Thursday_13, $Thursday_14, $Thursday_15, $Thursday_16, $Thursday_17, $Thursday_18, $Thursday_19, $Thursday_20, $Friday_9, $Friday_10, $Friday_11, $Friday_12, $Friday_13, $Friday_14, $Friday_15, $Friday_16, $Friday_17, $Friday_18, $Friday_19, $Friday_20, $Saturday_9, $Saturday_10, $Saturday_11, $Saturday_12, $Saturday_13, $Saturday_14, $Saturday_15, $Saturday_16, $Saturday_17, $Saturday_18, $Saturday_19, $Saturday_20, $Sunday_9, $Sunday_10, $Sunday_11, $Sunday_12, $Sunday_13, $Sunday_14, $Sunday_15, $Sunday_16, $Sunday_17, $Sunday_18, $Sunday_19, $Sunday_20, $level, $status, $price, $ID);
		if($stmt->execute())
			return true;
		return false;
	}


	/*
	* The delete operation
	* When this method is called record is deleted for the given id
	*/
	function deleteUser($ID){
		$stmt = $this->con->prepare("DELETE FROM users WHERE ID = ? ");
		$stmt->bind_param("i", $ID);
		if($stmt->execute())
			return true;

		return false;
	}
}
