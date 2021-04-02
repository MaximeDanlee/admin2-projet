<?php
$user = "example_user";
$password = "password";
$database = "example_database";
$table = "todo_list";


echo '<html>';
echo '<head>';
echo '<title>Test PHP</title>';
echo '</head>';
echo '<body>';
echo '<p>Bonjour le monde</p>';

 try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
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