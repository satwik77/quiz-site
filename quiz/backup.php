<html>
<head>
<title> Process</title>
</head>
</body>
<?php
$uname= $_POST['uname'];
$pass= $_POST['pass'];


$user= "root";
$password = "";
$host="localhost";
$database="civquiz";

switch ($_POST[‘do’]) 
{
case “login”: 
$cxn = mysqli_connect($host, $user, $password, $database);



$sql = "SELECT uname FROM users
WHERE uname= " .$uname; 
$result = mysqli_query($cxn,$sql);

$num = mysqli_num_rows($result); 
if ($num > 0) 
{
$sql = "SELECT uname FROM users
WHERE uname=".$uname.
"AND password=".$pass;
$result2 = mysqli_query($cxn,$sql);

$num2 = mysqli_num_rows($result2);
if ($num2 > 0) // password is correct 
{
 echo "successfully logged in";
}
 


else 
{
echo "username exists but password is incorrect";

}
} 
elseif ($num == 0) 
{
echo “Theain”;

}
break;

echo "check";
  ?>


</body>

</html>