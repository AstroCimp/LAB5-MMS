<?php
include 'dblink.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

echo "Welcome". "<br>";
echo "Your firstname is: ". $firstname . "<br>";
echo "Your lastname is: ". $lastname . "<br>";
echo "Your email address is: ". $email;

$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>