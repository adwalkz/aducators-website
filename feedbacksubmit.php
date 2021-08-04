<?php

$regmail = $_POST['regmail'];
$enrl = $_POST['enrlno'];
$feed = $_POST['feed'];

$conn = mysqli_connect("localhost", "root", "", "aducators") or die("Connection Failed");

$query = "INSERT INTO feedback VALUES ('{$regmail}', '{$enrl}', '{$feed}')";

mysqli_query($conn, $query) or die("Query Unsuccessful.");

mysqli_close($conn);

header("Location:http://localhost/Aducators/feedback.php?submitted=true");

?>