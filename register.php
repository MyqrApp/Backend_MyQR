<?php
require "connection.php";
$user_name = $_POST["user_name"];
$email = $_POST["email"];
$user_pass = $_POST["user_pass"];
//$attempts = $_POST["password"];
$mysql_qry = "insert into emp_data (username, email, password) values ('$user_name', '$email', '$user_pass')";

if ($conn->query($mysql_qry) === TRUE) {
	echo "Insert Successful";
}
else
	echo "Insert Unsuccessful";

$conn->close();
?>