<?php

include 'mysqli.php';
if ($_POST['action'] == 'reister') 
{
$password=$_POST['password'];
$passwordc=$_POST['passwordc'];
$username=$_POST['username'];
if (!empty($username)) 
{
$queryf='
SELECT * FROM 
 user WHERE username = "'.$username.'"
';
$stmu=$connect->prepare($queryf);
$stmu->execute();
$rowcus=$stmu->rowcount();
if ($rowcus > 0) 
{
	echo "<h3 style='text-align: center;color: red;'>Registered username</h3>";
}else{

if (is_numeric($password)&is_numeric($passwordc)) 
{
	
if ($password != $passwordc) 
{
  echo "<h3 style='text-align: center;color: red;'>password does not match</h3>";
}else{

$query='
INSERT INTO user
(password,username)
 VALUES ("'.$password.'","'.$username.'")
';
$stm=$connect->prepare($query);
if ($stm->execute()) 
{
  echo "<h3 style='text-align: center;color: green;'>Successfully registered<a href='login.php'><h3 style='text-align: center;'>Login</h3></a></h3>";
}
}
}else{
	echo "<h3 style='text-align: center;color: red;'>choose password numbers only</h3>";
}	
}
}else{
	echo "<h3 style='text-align: center;color: red;'>please fill in the username filed</h3>";
}
}

?>