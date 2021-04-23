<?php
$hostname='172.16.129.10';
$user = "b2b";
$password = "P@sswordMysql123";
$database = "example_database";
$table = "todo_list";
?>

<html>
<head>
<title>Test PHP</title>
</head>
<body>
<p>Bonjour, bienvue dans B2B</p>

<<<<<<< HEAD
<form method="post" action="process.php">
  Name: <input type="text" name="name" required>
  <input type="submit" name="submit">
</form>
=======
<form method="" action="">
  Name: <input type="text" name="name" required>
  <input type="submit" name="submit">
</form>

<?php
  if(isset($_POST['submit'])){
    if(!empty($_POST['name'])){
      $name = $_POST['name'];
      
      try {
        $db = new PDO("mysql:host=$hostname;dbname=$database", $user, $password);
        $db-> query("INSERT INTO example_database.todo_list (content) VALUES ('$name')");
        echo "Ajout réussi !";

      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    }
  }


  
>>>>>>> f1a2fe85ec751cfb7bc6a51ed6a631d5c0d544b9


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
