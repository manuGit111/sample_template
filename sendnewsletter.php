<?php
include('config.php');

$result = $con->query("SELECT * FROM newsletters ORDER BY id DESC LIMIT 1") ;
while ($row = $result->fetch_assoc()) {
$newid=$row['id'];
$thetitle=$row['title'];
$thecontent=$row['content'];
echo '<hr/>';
}

$resultt = $con->query("SELECT * FROM users WHERE emailed <> $newid AND unsub='y' LIMIT 50") ;
while ($rowt = $resultt->fetch_assoc()) {
$userid=$rowt['id'];
$email= $rowt['email'];
echo '<hr/>';

$to = $email;
$subject = $thetitle;
$message = $thecontent;
$headers = "From: max@a1websitepro.com \r\n";
$headers .= "Reply-To: max@a1websitepro.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);

 mysqli_query($con,"UPDATE users SET emailed='$newid'
WHERE id='$userid' ");
}

$con->close();
?>