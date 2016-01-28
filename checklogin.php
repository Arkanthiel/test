<?php
$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$user=$_POST['user'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$user = stripslashes($user);
$password = stripslashes($password);
$user = mysql_real_escape_string($user);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$user' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['user']="user";
$_SESSION['password']="password";

header("location:login_success.php");
}
else {
header ("location:login_fail.php");
}
?>
