<?php

// Variable for new database
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "iworq_user_db";

// Create a new connection now that db exists 
$connection = new mysqli($server, $user, $password, $dbname, 3306);

// Print connection error if there is one
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

// Creates a new table within the new database
$table = "CREATE TABLE user (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    note VARCHAR(180) NOT NULL
    )";

// If query is successful, table is created
if ($connection->query($table) === TRUE) {
    echo "New table saved";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();