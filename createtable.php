<?php
$servername = "localhost";
$username = "uspfstudent";
$password = "1234567";
$dbname = "schooldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE studenttable (
StudentIdnumber INT(6) AUTO_INCREMENT PRIMARY KEY,
StudentFamilyname VARCHAR(30) NOT NULL,
StudentFirstname VARCHAR(30) NOT NULL,
StudentMiddlename VARCHAR(30) NOT NULL,
StudentEmailAddress VARCHAR(50),
StudentHomeAddress VARCHAR(50),
StudentMobilenumber VARCHAR(50),
StudentCourse VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
  echo 'Table studenttable created successfully';
} else {
  echo 'Error creating table: ' . $conn->error;
}

$conn->close();

?>