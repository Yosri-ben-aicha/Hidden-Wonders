<?php

// Include the database connection file
include 'config1.php';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert the data into the database
$sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
  // Redirect to a success page
  header('Location: home page.php');
} else {
  // Redirect to an error page
  header('Location: error.php');
}

?>
