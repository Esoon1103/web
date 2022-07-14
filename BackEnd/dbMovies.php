<?php
$servername  = "localhost";
$username = "root";
$password = "";
$db = "webasgmt";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = mysqli_query($conn, "SELECT * FROM  `movies`");

$result = mysqli_fetch_all($sql,MYSQLI_ASSOC);


exit(json_encode($result));