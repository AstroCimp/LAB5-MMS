<?php
include 'dblink.php';

$sql = "UPDATE MyGuests SET email='ikwanibrahim@email.com' WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>