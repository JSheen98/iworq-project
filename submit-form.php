<?php

// Grabs these inputs from the HTML forms
$name = $_POST["name"];
$email = $_POST["email"];
$note = $_POST["note"];
$url = "index.html";

// Doesn't let user progress until all fields are filled out
if (!$name || !$email || !$note) {
    die("Must fill out ALL fields!");
}

// Insert data into database
$server = "localhost";
$user = "root";
$password = "";
$dbname = "iworq_user_db";

// Create connection with database
$connection = new mysqli($server, $user, $password, $dbname, 3306);
// Prints connection error if there is one
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

// Inserts the data into table in database
$query = "INSERT INTO user (name, email, note)
          VALUES ('$name', '$email', '$note')";

// If query is successful, data is inserted into table in database

if ($connection->query($query) === TRUE) {
    // Refreshes the page upon submission
    header("Location: http://localhost/iworq-project/index.html");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();