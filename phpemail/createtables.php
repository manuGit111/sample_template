<?php include('config.php');
// sql to create table
$sql = "CREATE TABLE about(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
description VARCHAR(250) NOT NULL,
reg_date TIMESTAMP
)";

if ($con->query($sql) === TRUE) {
echo "Table about created successfully";
} else {
echo "Error creating table: " . $con->error;
}

$con->close();
?>