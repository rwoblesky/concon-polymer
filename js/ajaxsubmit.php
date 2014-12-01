<?php
$connection = mysql_connect("localhost", "root", "convict3040"); // Establishing Connection with Server..
$db = mysql_select_db("concon", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];

//Insert query
$query = mysql_query("insert into test(test) values ('$name2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>
