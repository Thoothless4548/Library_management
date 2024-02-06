

<?php
//Establishing connection with the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname="student";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
	
}
echo "<h2>connected successfully<h2>";
echo "<br>";

?>
