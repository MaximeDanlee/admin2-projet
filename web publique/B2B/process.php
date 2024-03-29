<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form
	$mysql_config = parse_ini_file('mysql.ini');

	//mysql credentials
	$mysql_host = $mysql_config['host'];
	$mysql_username = $mysql_config['username'];
	$mysql_password = $mysql_config['password'];
	$mysql_database = $mysql_config['database'];
	
	$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below

	if (empty($name)){
		die("Please enter your name");
	}

	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare('INSERT INTO todo_list (content) VALUES(?)'); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s', $name); //bind values and execute insert query
	
	if($statement->execute()){
		print "success";
	}else{
		print $mysqli->error; //show mysql error if any
	}
}
?>