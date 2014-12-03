<?php
$connection = mysql_connect("localhost", "web", "webpass"); // Establishing Connection with Server..
$db = mysql_select_db("concon", $connection); // Selecting Database
//Fetching Values from URL
$b_id2=$_POST['b_id1'];
$e_id2=$_POST['e_id1'];
$set_one_reps2=$_POST['set_one_reps1'];
$set_two_reps2=$_POST['set_two_reps1'];
$set_three_reps2=$_POST['set_three_reps1'];


//Insert query
$query = mysql_query("INSERT INTO workout_log(b_id, e_id, set_one_reps, set_two_reps, set_three_reps) values ( (SELECT id from body_parts WHERE name = '$b_id2'), (SELECT exercise_id from exercises WHERE exercise_name = '$e_id2'), '$set_one_reps2', '$set_two_reps2','$set_three_reps2' )");

//this success will always run....need to build into logic.
if (!$query) {
  echo mysql_error();
} else {
  echo "Form Submitted Succesfully";
}

mysql_close($connection); // Connection Closed
?>
