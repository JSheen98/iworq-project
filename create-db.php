<?php

// Connection variables
$server = "localhost";
$user = "root";
$password = "";

// Create new connection
$connection = new mysqli($server, $user, $password, "", 3306);

// If there is a connection error, print it
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

// Creates database, prints if it is successful or not
$db = "CREATE DATABASE iworq_user_db";
if ($connection->query($db) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $connection->error;
}

$connection->close();
