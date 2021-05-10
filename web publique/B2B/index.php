<?php
$mysql_config = parse_ini_file('mysql.ini');

$hostname=$mysql_config['host'];;
$user = $mysql_config['username'];;
$password = $mysql_config['password'];;
$database = $mysql_config['database'];;
$table = "todo_list";
?>

<html>
<head>
<title>Test PHP</title>
</head>
<body>
<p>Bonjour, bienvue dans B2B</p>

<form method="post" action="process.php">
  Name: <input type="text" name="name" required>
  <input type="submit" name="submit">
</form>


<?php
 try {
    $db = new PDO("mysql:host=$hostname;dbname=$database", $user, $password);
    echo "<h2>TODO</h2><ol>";
    foreach($db->query("SELECT content FROM $table") as $row) {
      echo "<li>" . $row['content'] . "</li>";
    }
    echo "</ol>";
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }

 echo '</body>';
 echo '</html>';

 ?>