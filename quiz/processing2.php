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


$cxn = mysqli_connect($host, $user, $password, $database);



$myusername = stripslashes($uname);
$mypassword = stripslashes($pass);


$sql="SELECT * FROM users WHERE uname='$myusername' and pass='$mypassword'";
$result=mysqli_query($cxn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
if($count==1){
session_start();
echo "successful";
$_SESSION['myusername']=$uname;
$_SESSION['mypassword']=$pass;
header("Location:queans.php");


//echo "q1.dsldsgjdsngjkdsngkjdsngskdjgnsdgkjdd<br/>";
//echo "<form action='scorecheck.php' method='post'>
  //    <input type='text' name='ans' value=''> <br/>";



}
else {
echo "Wrong Username or Password";
}


  ?>


</body>

</html>