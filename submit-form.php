<?php

// Grabs these inputs from the HTML forms
$name = $_POST["name"];
$email = $_POST["email"];
$note = $_POST["note"];

// Doesn't let user progress until all fields are filled out
if (!$name || !$email || !$note) {
    echo '<script>alert("Must fill out ALL fields!")</script>';
    return;
}

// Insert data into database
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "iworq_user_db";

// Create connection with database
$connection = new mysqli($server, $user, $password, $dbname, 3306);
// Prints connection error if there is one
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

// Inserts the data into table in database
$query = "INSERT INTO user (name, email, note)
          VALUES (?, ?, ?)"; // Placeholders

// create prepared statement (for protection against SQL injection)
$stmt = mysqli_stmt_init($connection);
// Returns boolean value if successful or not
// if false, code will stop and print connection error
if (!mysqli_stmt_prepare($stmt, $query)) {
    die(mysqli_error($connection));
}

// use this to bind our variables, pass in stmt, and second variable will be string of types for variables we're using
// for example, sss is three strings (since all our fields are strings)
mysqli_stmt_bind_param($stmt, "sss",
    $name,
    $email,
    $note
);

mysqli_stmt_execute($stmt);

// Refreshes the page upon submission, and closes connection with db
header("Location: http://localhost/iworq-project/index.html");
$connection->close();