<?php
$servername = "localhost";

$username = "web";
$password = "webpass";
$dbname = "concon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = $_GET["query"];

if ($query == "body_parts"){
  $sql = "SELECT * FROM body_parts";
  $result = $conn->query($sql);
  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
  }
  echo json_encode($rows);
} else {
  echo "Query not supported! <br />";
}



?>
