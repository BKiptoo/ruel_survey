<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$role = $_POST['role'];
$recommendation = $_POST['recommendation'];
$favourite = $_POST['favourite'];
$checkbox = $_POST['checkbox'];
$comments = $_POST['comments'];

// Do something with the data (e.g. store it in a database, send an email, etc.)

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the table
$sql = "INSERT INTO survey (name, email, age, role, recommendation, favourite, improvements, comments) VALUES ('$name', '$email', '$age', '$role', '$recommendation', '$favourite', '$improvements', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();


?>
