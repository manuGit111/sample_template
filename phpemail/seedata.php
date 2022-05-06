<?php
include('config.php');

$result = $con->query("SELECT * FROM users WHERE unsub='y'") ;

while ($row = $result->fetch_assoc()) {
echo $row['id'];
echo $row['name'];
echo $row['email'];
echo '<hr/>';
}

$con->close();
?>