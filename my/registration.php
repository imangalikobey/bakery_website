<?php
$login=$_POST['login'];
$password=$_POST['password'];
$l_name=$_POST['l_name'];
$f_name=$_POST['f_name'];
$mobilephone=$_POST['mobilephone'];
INCLUDE("connectDB.php");
if(strlen($password)<8){
    echo 'Your password is less than 8 characters';
    exit();
}
//checking uniqueness of login
$sql=mysqli_query($conn,"SELECT * FROM users  where login='$login'");
if(mysqli_num_rows($sql)>0)
{
    echo "Login Already Exists"; 
	exit;
}
//checking uniqueness of mobilephone
$sql=mysqli_query($conn,"SELECT * FROM users  where login='$mobilephone'");
if(mysqli_num_rows($sql)>0)
{
    echo "Mobilephone Already Exists"; 
	exit;
}
//make a sql statement and attach it to the variable $sql 
$sql = "INSERT INTO users (login,password, l_name,f_name,mobilephone)
VALUES ('$login', '$password','$l_name','$f_name','$mobilephone')";
//make query to database
if ($conn->query($sql) === TRUE) {
    echo "Successfully registered";
    header("Location: login.html");//change the website to the login.html page  
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
