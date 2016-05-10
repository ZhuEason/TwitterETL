<?php
$mysqli = new mysqli("cloud.cmhxxkeppunk.us-east-1.rds.amazonaws.com", "mc6029", "12345678", "cloudtweet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

