<?php
include 'dblink.php';

$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Samsul', 'Yusof', 'samsulyusof@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>