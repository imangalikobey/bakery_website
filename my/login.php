<?php
INCLUDE("connectDB.php");
session_start();
//connecting database
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="homebakery";
//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed"  .$conn->connect_error);
} 
//Take the values from the Form
$login=$_POST['login'];
$password=$_POST['password'];
//convert into upper case
$userid=strtoupper($login);
//check  input values with the table's data
$sql = "SELECT * from users
       where upper(login)='$login' and password='$password'";
//Executes a database query
$rw = mysqli_query($conn,$sql);
//Gets the number of rows in the result set
$total_rows=mysqli_num_rows($rw);
//Checks the number of rowa
if ( $total_rows>0) {
	$_SESSION['login']=$login;
	header('Location: index.php');//change webpage to the index.php
} else {
    echo "Error" . "Login or password incorrect";//shows the error 
}
$conn->close();
?>
