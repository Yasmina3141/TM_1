<?php

 //getting the dboperation class
 require_once '../includes/DbOperation_TM.php';

 //function validating all the paramters are available
 //we will pass the required parameters to this function
 function isTheseParametersAvailable($params){
 //assuming all parameters are available
 $available = true;
 $missingparams = "";

 foreach($params as $param){
 if(!isset($_POST[$param]) || strlen($_POST[$param])<=0){
 $available = false;
 $missingparams = $missingparams . ", " . $param;
 }
 }

 //if parameters are missing
 if(!$available){
 $response = array();
 $response['error'] = true;
 $response['message'] = 'Parameters ' . substr($missingparams, 1, strlen($missingparams)) . ' missing';

 //displaying error
 echo json_encode($response);

 //stopping further execution
 die();
 }
 }

 //an array to display response
 $response = array();

 //if it is an api call
 //that means a get parameter named api call is set in the URL
 //and with this parameter we are concluding that it is an api call
 if(isset($_GET['apicall'])){

 switch($_GET['apicall']){

 //the CREATE operation
 //if the api call value is 'createhero'
 //we will create a record in the database
 case 'createuser':
 //first check the parameters required for this request are available or not
 isTheseParametersAvailable(array('email_address', 'psswd'));

 //creating a new dboperation object
 $db = new DbOperation();

 //creating a new record in the database
 $result = $db->createUser(
 $_POST['first_name'],
 $_POST['last_name'],
 $_POST['email_address'],
 $_POST['address'],
 $_POST['psswd'],
 $_POST['maths'],
 $_POST['physics'],
 $_POST['English'],
 $_POST['French'],
 $_POST['German'],
 $_POST['Spanish'],
 $_POST['Italian'],
 $_POST['Latin'],
 $_POST['Greek'],
 $_POST['sciences'],
 $_POST['psychology'],
 $_POST['philosophy'],
 $_POST['music'],
 $_POST['applied_maths'],
 $_POST['history'],
 $_POST['geography'],
 $_POST['economics_laws'],
 $_POST['biology'],
 $_POST['chemistry'],
 $_POST['Monday_9'],
 $_POST['Monday_10'],
 $_POST['Monday_11'],
 $_POST['Monday_12'],
 $_POST['Monday_13'],
 $_POST['Monday_14'],
 $_POST['Monday_15'],
 $_POST['Monday_16'],
 $_POST['Monday_17'],
 $_POST['Monday_18'],
 $_POST['Monday_19'],
 $_POST['Monday_20'],
 $_POST['Tuesday_9'],
 $_POST['Tuesday_10'],
 $_POST['Tuesday_11'],
 $_POST['Tuesday_12'],
 $_POST['Tuesday_13'],
 $_POST['Tuesday_14'],
 $_POST['Tuesday_15'],
 $_POST['Tuesday_16'],
 $_POST['Tuesday_17'],
 $_POST['Tuesday_18'],
 $_POST['Tuesday_19'],
 $_POST['Tuesday_20'],
 $_POST['Wednesday_9'],
 $_POST['Wednesday_10'],
 $_POST['Wednesday_11'],
 $_POST['Wednesday_12'],
 $_POST['Wednesday_13'],
 $_POST['Wednesday_14'],
 $_POST['Wednesday_15'],
 $_POST['Wednesday_16'],
 $_POST['Wednesday_17'],
 $_POST['Wednesday_18'],
 $_POST['Wednesday_19'],
 $_POST['Wednesday_20'],
 $_POST['Thursday_9'],
 $_POST['Thursday_10'],
 $_POST['Thursday_11'],
 $_POST['Thursday_12'],
 $_POST['Thursday_13'],
 $_POST['Thursday_14'],
 $_POST['Thursday_15'],
 $_POST['Thursday_16'],
 $_POST['Thursday_17'],
 $_POST['Thursday_18'],
 $_POST['Thursday_19'],
 $_POST['Thursday_20'],
 $_POST['Friday_9'],
 $_POST['Friday_10'],
 $_POST['Friday_11'],
 $_POST['Friday_12'],
 $_POST['Friday_13'],
 $_POST['Friday_14'],
 $_POST['Friday_15'],
 $_POST['Friday_16'],
 $_POST['Friday_17'],
 $_POST['Friday_18'],
 $_POST['Friday_19'],
 $_POST['Friday_20'],
 $_POST['Saturday_9'],
 $_POST['Saturday_10'],
 $_POST['Saturday_11'],
 $_POST['Saturday_12'],
 $_POST['Saturday_13'],
 $_POST['Saturday_14'],
 $_POST['Saturday_15'],
 $_POST['Saturday_16'],
 $_POST['Saturday_17'],
 $_POST['Saturday_18'],
 $_POST['Saturday_19'],
 $_POST['Saturday_20'],
 $_POST['Sunday_9'],
 $_POST['Sunday_10'],
 $_POST['Sunday_11'],
 $_POST['Sunday_12'],
 $_POST['Sunday_13'],
 $_POST['Sunday_14'],
 $_POST['Sunday_15'],
 $_POST['Sunday_16'],
 $_POST['Sunday_17'],
 $_POST['Sunday_18'],
 $_POST['Sunday_19'],
 $_POST['Sunday_20'],
 $_POST['level'],
 $_POST['status'],
 $_POST['price']
 );


 //if the record is created adding success to response
 if($result){
 //record is created means there is no error
 $response['error'] = false;

 //in message we have a success message
 $response['message'] = 'User addedd successfully';

 //and we are getting all the heroes from the database in the response
 $response['users'] = $db->getUsers();
 }else{

 //if record is not added that means there is an error
 $response['error'] = true;

 //and we have the error message
 $response['message'] = 'Some error occurred please try again';
 }

 break;

 //the READ operation
 //if the call is getheroes
 case 'getusers':
 isTheseParametersAvailable(array('email_address', 'psswd'));
 $db = new DbOperation();
 if($result){}
 $response['error'] = false;
 $response['message'] = 'Request successfully completed';
 $response['users'] = $db->getUsers();
}
else{
  
}
 break;

 // READ operation but to get one single user
 case 'getuser':
 isTheseParametersAvailable(array('email_address', 'psswd'));

 $db = new DbOperation();


 //the UPDATE operation
 case 'updateuser':
 isTheseParametersAvailable(array('first_name', 'last_name', 'email_address', 'address', 'psswd', 'maths', 'physics', 'English', 'French', 'German', 'Spanish', 'Italian', 'Latin', 'Greek', 'sciences', 'psychology', 'philosophy', 'music', 'applied_maths', 'history', 'geography', 'economics_laws', 'biology', 'chemistry', 'Monday_9', 'Monday_10', 'Monday_11', 'Monday_12', 'Monday_13', 'Monday_14', 'Monday_15', 'Monday_16', 'Monday_17', 'Monday_18', 'Monday_19', 'Monday_20', 'Tuesday_9', 'Tuesday_10', 'Tuesday_11', 'Tuesday_12', 'Tuesday_13', 'Tuesday_14', 'Tuesday_15', 'Tuesday_16', 'Tuesday_17', 'Tuesday_18', 'Tuesday_19', 'Tuesday_20', 'Wednesday_9', 'Wednesday_10', 'Wednesday_11', 'Wednesday_12', 'Wednesday_13', 'Wednesday_14', 'Wednesday_15', 'Wednesday_16', 'Wednesday_17', 'Wednesday_18', 'Wednesday_19', 'Wednesday_20', 'Thursday_9', 'Thursday_10', 'Thursday_11', 'Thursday_12', 'Thursday_13', 'Thursday_14', 'Thursday_15', 'Thursday_16', 'Thursday_17', 'Thursday_18', 'Thursday_19', 'Thursday_20', 'Friday_9', 'Friday_10', 'Friday_11', 'Friday_12', 'Friday_13', 'Friday_14', 'Friday_15', 'Friday_16', 'Friday_17', 'Friday_18', 'Friday_19', 'Friday_20', 'Saturday_9', 'Saturday_10', 'Saturday_11', 'Saturday_12', 'Saturday_13', 'Saturday_14', 'Saturday_15', 'Saturday_16', 'Saturday_17', 'Saturday_18', 'Saturday_19', 'Saturday_20', 'Sunday_9', 'Sunday_10', 'Sunday_11', 'Sunday_12', 'Sunday_13', 'Sunday_14', 'Sunday_15', 'Sunday_16', 'Sunday_17', 'Sunday_18', 'Sunday_19', 'Sunday_20', 'level', 'status', 'price'));
 $db = new DbOperation();
 $result = $db->updateUser(
   $_POST['ID'],
   $_POST['first_name'],
   $_POST['last_name'],
   $_POST['email_address'],
   $_POST['address'],
   $_POST['psswd'],
   $_POST['maths'],
   $_POST['physics'],
   $_POST['English'],
   $_POST['French'],
   $_POST['German'],
   $_POST['Spanish'],
   $_POST['Italian'],
   $_POST['Latin'],
   $_POST['Greek'],
   $_POST['sciences'],
   $_POST['psychology'],
   $_POST['philosophy'],
   $_POST['music'],
   $_POST['applied_maths'],
   $_POST['history'],
   $_POST['geography'],
   $_POST['economics_laws'],
   $_POST['biology'],
   $_POST['chemistry'],
   $_POST['Monday_9'],
   $_POST['Monday_10'],
   $_POST['Monday_11'],
   $_POST['Monday_12'],
   $_POST['Monday_13'],
   $_POST['Monday_14'],
   $_POST['Monday_15'],
   $_POST['Monday_16'],
   $_POST['Monday_17'],
   $_POST['Monday_18'],
   $_POST['Monday_19'],
   $_POST['Monday_20'],
   $_POST['Tuesday_9'],
   $_POST['Tuesday_10'],
   $_POST['Tuesday_11'],
   $_POST['Tuesday_12'],
   $_POST['Tuesday_13'],
   $_POST['Tuesday_14'],
   $_POST['Tuesday_15'],
   $_POST['Tuesday_16'],
   $_POST['Tuesday_17'],
   $_POST['Tuesday_18'],
   $_POST['Tuesday_19'],
   $_POST['Tuesday_20'],
   $_POST['Wednesday_9'],
   $_POST['Wednesday_10'],
   $_POST['Wednesday_11'],
   $_POST['Wednesday_12'],
   $_POST['Wednesday_13'],
   $_POST['Wednesday_14'],
   $_POST['Wednesday_15'],
   $_POST['Wednesday_16'],
   $_POST['Wednesday_17'],
   $_POST['Wednesday_18'],
   $_POST['Wednesday_19'],
   $_POST['Wednesday_20'],
   $_POST['Thursday_9'],
   $_POST['Thursday_10'],
   $_POST['Thursday_11'],
   $_POST['Thursday_12'],
   $_POST['Thursday_13'],
   $_POST['Thursday_14'],
   $_POST['Thursday_15'],
   $_POST['Thursday_16'],
   $_POST['Thursday_17'],
   $_POST['Thursday_18'],
   $_POST['Thursday_19'],
   $_POST['Thursday_20'],
   $_POST['Friday_9'],
   $_POST['Friday_10'],
   $_POST['Friday_11'],
   $_POST['Friday_12'],
   $_POST['Friday_13'],
   $_POST['Friday_14'],
   $_POST['Friday_15'],
   $_POST['Friday_16'],
   $_POST['Friday_17'],
   $_POST['Friday_18'],
   $_POST['Friday_19'],
   $_POST['Friday_20'],
   $_POST['Saturday_9'],
   $_POST['Saturday_10'],
   $_POST['Saturday_11'],
   $_POST['Saturday_12'],
   $_POST['Saturday_13'],
   $_POST['Saturday_14'],
   $_POST['Saturday_15'],
   $_POST['Saturday_16'],
   $_POST['Saturday_17'],
   $_POST['Saturday_18'],
   $_POST['Saturday_19'],
   $_POST['Saturday_20'],
   $_POST['Sunday_9'],
   $_POST['Sunday_10'],
   $_POST['Sunday_11'],
   $_POST['Sunday_12'],
   $_POST['Sunday_13'],
   $_POST['Sunday_14'],
   $_POST['Sunday_15'],
   $_POST['Sunday_16'],
   $_POST['Sunday_17'],
   $_POST['Sunday_18'],
   $_POST['Sunday_19'],
   $_POST['Sunday_20'],
   $_POST['level'],
   $_POST['status'],
   $_POST['price']
 );

 if($result){
 $response['error'] = false;
 $response['message'] = 'User updated successfully';
 $response['users'] = $db->getUsers();
 }else{
 $response['error'] = true;
 $response['message'] = 'Some error occurred please try again';
 }
 break;

 //the delete operation
 case 'deleteuser':

 //for the delete operation we are getting a GET parameter from the url having the id of the record to be deleted
 if(isset($_GET['ID'])){
 $db = new DbOperation();
 if($db->deleteUser($_GET['ID'])){
 $response['error'] = false;
 $response['message'] = 'User deleted successfully';
 $response['users'] = $db->getUsers();
 }else{
 $response['error'] = true;
 $response['message'] = 'Some error occurred please try again';
 }
 }else{
 $response['error'] = true;
 $response['message'] = 'Nothing to delete, provide an ID please';
 }
 break;
 }

 }else{
 //if it is not api call
 //pushing appropriate values to response array
 $response['error'] = true;
 $response['message'] = 'Invalid API Call';
 }

 //displaying the response in json structure
 echo json_encode($response);
