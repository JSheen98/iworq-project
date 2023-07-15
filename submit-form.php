<?php

$name = $_POST["name"];
$email = $_POST["email"];
$note = $_POST["note"];

// jQuery validation
if (! $name || ! $email || ! $note ) {
    die ("Must fill out ALL fields!");
}

// Insert data into database
$server = "localhost";
$user = "root";
$password = "";
$dbname = "test_iworq_user_db";

// Create connection with database
$connection = new mysqli($server, $user, $password, $dbname, 3306);
// Prints connection error if there is one
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

// // Inserts the data into database
// $query = "INSERT INTO test_iworq_user_db (name, email, note)
//           VALUES ('$name', '$email', '$note')";

// // If query is successful, data is inserted into table in database
// if ($connection->query($dbname) === TRUE) {
//     echo "New query saved";
// } else {
//     echo "Error: " . $query . "<br>" . $connection->error; 
// }

// $connection->close();